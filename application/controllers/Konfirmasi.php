<?php 
    Class Konfirmasi extends CI_Controller
    {
        private $data;
        public function __construct(){
            parent::__construct();
            $this->load->model('cart_model');
            $this->load->model('Konfirmasi_Model');
            $this->load->library('form_validation');
            $this->data['data'] = $this->cart_model->getcart();
            $this->data['judul'] = 'KaktusKmi';
            
        }
        public function index()
        {
            $data['judul'] = 'Konfirmasi Pembayaran';

            $this->form_validation->set_rules('nomor', 'Nomor', 'required|trim|numeric', [
                'required' => 'Nomor Harus Di isi',
                'numeric' => 'Nomor harus angka'
            ]);

            $this->form_validation->set_rules('kode', 'Kode', 'required|min_length[5]', [
                'required' => 'Kode Harus Di isi',
                'min_length' => 'Kode tidak valid'
            ]);

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $this->data);
                $this->load->view('konfirmasi/index',$data);
                $this->load->view('templates/footer');
            } else {
                $dt = [
                    'nomor' => $this->input->post('nomor'),
                    'kode' => $this->input->post('kode')
                ];

                $status = $this->Konfirmasi_Model->getStatus($dt);

                // var_dump($status);
                // echo $status->status;
                // die;

                if($status) {
                    $statusnya = $status->status;
                    if($statusnya == "menunggu ongkir") {
                        redirect('Pembelian/menunggu_ongkir/'.$status->id_pembeli);
                    } else if($statusnya == "menunggu pembayaran") {
                        redirect('Pembelian/menunggu_pembayaran/'.$status->id_pembeli);                        
                    } else {
                        redirect('Pembelian/terkonfirmasi/'.$status->id_pembeli);
                    }
                } else {
                    $this->session->set_flashdata('pesan', "<div class='alert alert-danger' role='alert'>Kode Pesanan tidak ada.</div>");

                    redirect('Konfirmasi/index');
                }
            }

        }
    }
?>