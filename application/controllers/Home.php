<?php 
    Class Home extends CI_Controller
    {
        private $data;
        public function __construct(){
            parent::__construct();
            $this->load->model('Marketplace_model');
            $this->load->model('Counter_Model');
            $this->load->model('Keranjang_Model');
            $this->load->model('cart_model');
            $this->data['data'] = $this->cart_model->getcart();
            $this->data['judul'] = 'KaktusKmi';
        }
		
        public function index()
        {
			
            $data['produk'] = $this->Marketplace_model->getDataProdukTerbaru();
            $data['judul'] = 'Selamat Datang di Kaktuskmi';

            $this->load->view('templates/header', $this->data);
            $this->load->view('home/index',$data);
            $this->load->view('templates/footer');
			
			$this->Counter_Model->Model_Counter();
        }
        function ambil_ip_pengunjung() {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }
      public function addToCart(){
        $ip = $this->ambil_ip_pengunjung();
        $kode = $this->input->post('kode_barang');
        $jumlah = $this->input->post('jumlah');
        $query = "select stok_produk from produk where kode_produk ='$kode'";
            $stok = $this->db->query($query)->result_array(); 
          
              $this->cart->insert(array(
                  "id" => $kode,
                  "jumlah" => $jumlah
              ));
            $err = FALSE;
            
            if($ip){
              foreach($stok as $s){
                  if($s['stok_produk']<=0){
                      $this->session->set_flashdata('stok','<div class="alert alert-danger" role="alert">Maaf Stok Habis</div>');
                      redirect('Home','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'Home';
                  redirect($tujuan);
              }
                  }
              }
      }
        public function detail_tanaman($id)
        {
            $data['produk'] = $this->Marketplace_model->getByProduk($id);
            $data['judul'] = 'Disini Nama Produk';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/detail/detail_tanaman',$data);
            $this->load->view('templates/footer'); 
			
        }
    }

?>