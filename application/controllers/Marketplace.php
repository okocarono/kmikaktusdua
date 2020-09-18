<?php 
    Class Marketplace extends CI_Controller
    {
        private $data;
        public function __construct()
        {

            parent::__construct();
            $this->load->library('cart');
            $this->load->model('Marketplace_model');
            $this->load->model('Keranjang_Model');
            $this->load->model('Pembelian_Model');
            $this->load->model('cart_model');
            $this->load->library('pagination');
            $this->data['data'] = $this->cart_model->getcart();
            $this->data['judul'] = 'KaktusKmi';
            
        }

        public function index()
        {
        
            
            $config['base_url'] = site_url('marketplace/index'); //site url
            $config['total_rows'] = $this->db->count_all('produk'); //total row
            $config['per_page'] = 15;  //show record per halaman
            $config["uri_segment"] = 3;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
         
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
     
            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
     
          
            $data['data'] = $this->Marketplace_model->getDataProduk($config["per_page"], $data['page']);           
     
            $data['pagination'] = $this->pagination->create_links();
            $data['judul'] = 'Marketplace';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/index',$data);
            $this->load->view('templates/footer');
        }

        public function detail_tanaman($id)
        {
            $data['data'] = $this->Marketplace_model->getByProduk($id);
            $data['judul'] = 'Disini Nama Produk';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/detail/detail_tanaman',$data);
            $this->load->view('templates/footer'); 
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
          $kode = $this->input->post('kode_produk');
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
                    $this->session->set_flashdata('stok','<div class="alert alert-danger my-2" role="alert">Maaf Stok Habis</div>');
                    redirect('marketplace','refresh');
                }else{

                    if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                  
                          $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                }
                
                if(!$err){
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
    
                }
               
                $tujuan = 'marketplace';
                redirect($tujuan);
            }
                }
            }
         }
        public function addToCartdetail(){
          $ip = $this->ambil_ip_pengunjung();
          $kode = $this->input->post('kode_produk');
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
                    redirect('marketplace/detail_tanaman/'.$kode,'refresh');
                }else{

                    if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                  
                          $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                }
                
                if(!$err){
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
    
                }
               
                $tujuan = 'marketplace/detail_tanaman/'.$kode;
                redirect($tujuan);
            }
                }
            }
         }
        public function addToCartbatu(){
          $ip = $this->ambil_ip_pengunjung();
          $kode = $this->input->post('kode_produk');
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
                    redirect('marketplace/batu_product','refresh');
                }else{

                    if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                  
                          $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                }
                
                if(!$err){
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
    
                }
               
                $tujuan = 'marketplace/batu_product/';
                redirect($tujuan);
            }
                }
            }
         }
    
        public function addToCartbibit(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/bibit_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/bibit_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
        public function addToCartpot(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/pot_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/pot_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
        public function addToCartpaket(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/paket_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/paket_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
    
        public function addToCartaglonema(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/aglonema_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/aglonema_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
        public function addToCartkaktus(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/kaktus_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/kaktus_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
        public function addToCartsansivera(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/sansivera_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/sansivera_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
        public function addToCartsukulen(){
            $ip = $this->ambil_ip_pengunjung();
            $kode = $this->input->post('kode_produk');
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
                      redirect('marketplace/sukulen_product','refresh');
                  }else{
  
                      if($this->Keranjang_Model->addToCart($kode,$jumlah)) {
                    
                            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Berhasil ditambahkan ke dalam cart</div>');       
                  }
                  
                  if(!$err){
                      $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Gagal ditambahkan ke dalam cart</div>');
      
                  }
                 
                  $tujuan = 'marketplace/sukulen_product';
                  redirect($tujuan);
              }
                  }
              }
         }
    
     
        public function kaktus_product()
        
        {
           // $data['cart'] = $this->cart_model->getcart();
            $data['data'] = $this->Marketplace_model->getByKaktus();
            $data['judul'] = 'Produk Tanaman Kaktus';

            $this->load->view('templates/header',$this->data);
            $this->load->view('marketplace/tanaman/kaktus_product',$data);
            $this->load->view('templates/footer'); 
        }

        public function aglonema_product()
        {
          //  $data['cart'] = $this->cart_model->getcart();
            $data['data'] = $this->Marketplace_model->getByAglonema();
            $data['judul'] = 'Produk Tanaman Aglonema';

            $this->load->view('templates/header',$this->data);
            $this->load->view('marketplace/tanaman/aglonema_product',$data);
            $this->load->view('templates/footer'); 
        }

        public function sansivera_product()
        {
           // $data['cart'] = $this->cart_model->getcart();
            $data['data'] = $this->Marketplace_model->getBySansivera();
            $data['judul'] = 'Produk Tanaman Sansivera';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/tanaman/sansivera_product',$data);
            $this->load->view('templates/footer'); 
        }

        public function sukulen_product()
        {
            $data['data'] = $this->Marketplace_model->getBySukulen();
            $data['judul'] = 'Produk Tanaman Sukulen';

            $this->load->view('templates/header',$this->data);
            $this->load->view('marketplace/tanaman/sukulen_product',$data);
            $this->load->view('templates/footer'); 
        }

        public function paket_product()
        {
            $data['data'] = $this->Marketplace_model->getDataPaket();
            $data['judul'] = 'Produk Tanaman Lactea';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/paket/paket_product',$data);
            $this->load->view('templates/footer'); 
        }
      
        public function pot_product()
        {
            $data['data'] = $this->Marketplace_model->getDataPot();
            $data['judul'] = 'Produk Pot Tanaman';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/aksesoris/pot_product',$data);
            $this->load->view('templates/footer');

        }

        public function batu_product()
        {
            $data['data'] = $this->Marketplace_model->getDataBatu();
            $data['judul'] = 'Produk Batu Tanaman';

            $this->load->view('templates/header', $this->data);
            $this->load->view('marketplace/aksesoris/batu_product',$data);
            $this->load->view('templates/footer'); 
        }

        public function bibit_product()
        {
            $data['data'] = $this->Marketplace_model->getDataBibit();
            $data['judul'] = 'Produk Bibit Tanaman';

            $this->load->view('templates/header',$this->data);
            $this->load->view('marketplace/aksesoris/bibit_product',$data);
            $this->load->view('templates/footer'); 
        }
        
        public function cariproduk()
        {

            $data['judul'] = 'Pencarian Produk';
            $keyword = $this->input->post('keyword');
            $data['pagination'] = $this->pagination->create_links();
            $data['data'] = $this->Marketplace_model->getProdukKeyword($keyword);
            // var_dump($data['produk']);
            $this->load->view('templates/header',$this->data);
            $this->load->view('marketplace/index',$data);
            $this->load->view('templates/footer');
        }
       
        
    }
?>