<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    Class Pembelian extends CI_Controller
    {
        private $data;
        function __construct(){
            parent::__construct();

        $this->load->model("Pembelian_Model");
        $this->load->model("Menunggu_Model");
        $this->load->model("Keranjang_Model");
        $this->load->model("cart_model");
        $this->load->library("form_validation");
        $this->load->library('cart');
        $this->load->library("session");

        $this->data['data'] = $this->cart_model->getcart();
        $this->data['judul'] = 'KaktusKmi';
        }

        public function Data_pembeli()
        {
            $id = $this->Pembelian_Model->Model_Pembeli($this->input->post());
            redirect('pembelian/menunggu_ongkir/'.$id);
        }

        public function index()
        {
            $data['judul'] = 'Data Diri';

            $data['keranjang'] = $this->Keranjang_Model->tampil();

            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('no_telp','No_telp','required|numeric|min_length[7]|max_length[13]');
            $this->form_validation->set_rules('catatan','Catatan');
            $this->form_validation->set_rules('provinsi','Provinsi','required');
            $this->form_validation->set_rules('kabupaten','Kabupaten','required');
            $this->form_validation->set_rules('kecamatan','Kecamatan','required');
            $this->form_validation->set_rules('kodepos','Kode Pos','required');
            $this->form_validation->set_rules('alamatlengkap','Detail Alamat','required');

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            if ($this->form_validation->run() != FALSE) {
               
                $id = $this->Pembelian_Model->Model_Pembeli($this->input->post());
                
              
                $data['data'] = $this->Keranjang_Model->hapusemua();
                $this->session->set_flashdata('success');
                
                redirect('pembelian/menunggu_ongkir/'. $id);

            } else {

                $this->load->view('templates/header', $this->data);
                $this->load->view('pembelian/index',$data);
                $this->load->view('templates/footer');
                
            }
        }

        public function menunggu_ongkir($id)
        {
            
            $data['ongkir'] =$this->Pembelian_Model->Model_ongkir($id);
            $data['judul'] = 'Halaman Status Pengiriman';
            $data['tampil'] = $this->Pembelian_Model->tampil($id);
          

            $this->load->view('templates/header', $this->data);
            $this->load->view('pembelian/menunggu_ongkir',$data);
            $this->load->view('templates/footer');
        }

        public function menunggu_pembayaran($id)
        {
            $data['judul'] = 'Halaman Status Pengiriman';

            if(empty($_FILES['userfile']['name'])) {
                    $this->session->set_userdata('temp_kode_pembeli', $id);
        
                    $gambare = $this->Pembelian_Model->upload_gambar();

                    // echo $gambare['result']; die;
                    if($gambare['result'] != 'failed') {
                        if($this->Pembelian_Model->save_gambar($gambare) > 0) {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Bukti pembayaran berhasil diupload</div>');
                        } else {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Bukti pembayaran gagal diupload</div>');
                        }
                    }
            }

                // echo $id; die;
                $ongkir = $this->Pembelian_Model->Model_ongkir($id);
                
                $data['kode_pembeli'] = $id;
                $data['ongkir'] = $ongkir;
    
                $data['tampil'] = $this->Pembelian_Model->tampil($id);
    
                $this->load->view('templates/header', $this->data);
                $this->load->view('pembelian/menunggu_pembayaran',$data);
                $this->load->view('templates/footer');
            
            // redirect('Pembelian/menunggu_pembayaran');
        }

        public function terkonfirmasi($id)
        {
            $data['judul'] = 'Halaman Status Pengiriman';
            $data['ongkir'] =$this->Pembelian_Model->Model_ongkir($id);
            $data['tampil'] = $this->Pembelian_Model->tampil($id);

            $this->load->view('templates/header', $this->data);
            $this->load->view('pembelian/terkonfirmasi',$data);
            $this->load->view('templates/footer');
        }

        public function registerpembeli()
        {
            $this->load->view('pembeli/index');
        }
    }

?>