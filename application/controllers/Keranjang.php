<?php
    Class Keranjang extends CI_Controller
    {
        private $data;
        public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		//$this->load->model('Marketplace_model');
        $this->load->model('Keranjang_Model');
        $this->load->model('cart_model');
        $this->data['data'] = $this->cart_model->getcart();
        $this->data['judul'] = 'KaktusKmi';
        
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

    public function tampil_cart()
    {
        $data['judul'] = 'Keranjang';
        $data['kategori'] = $this->Keranjang_Model->get_kategori_all();
        $data['data'] = $this->Keranjang_Model->tampil();
       
        $this->load->view('templates/header',$this->data);
        $this->load->view('Keranjang/tampil_cart',$data);
        $this->load->view('templates/footer');
    }
    public function hapus($kode){
       
        if($this->Keranjang_Model->hapus($kode)){
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">"pesan di hapus"</div>');
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">"pesan gagal dihapus"</div>');
        }

        redirect('Keranjang/tampil_cart');
    }  
    }
?>
