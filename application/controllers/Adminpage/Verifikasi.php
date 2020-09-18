<?php
Class Verifikasi extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Verifikasi_Model');
        $this->load->model('Keranjang_Model');
        $this->load->model('Pembelian_Model');
        $this->load->library('form_validation');

        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
    }
    
    public function verification_admin()
        {
            $data['judul'] = 'Halaman Verifikasi';

            $data['pembeli'] = $this->Verifikasi_Model->dapatkanSemuaDataPembeli();

            // var_dump($data['pembeli']);
            // die;

            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/verifikasi/verification_admin');
            $this->load->view('templates/footer');
        }

        public function ongkir_verification($kode)
        {
            $data['judul'] = 'Halaman Detail Verifikasi';

            $this->form_validation->set_rules('biaya', 'Biaya', 'required|numeric|trim', [
                'required' => 'Kudu diisi coy',
                'numeric' => 'Biaya nya harus angka bosque'
            ]);

            if($this->form_validation->run() == FALSE) {
                $data['tampil'] = $this->Verifikasi_Model->tampil($kode);
                $data['pembeli'] = $this->Verifikasi_Model->dapatkanSatuDataPembeli($kode);
                
                $this->load->view('templates/header_admin', $data);
                $this->load->view('adminpage/verifikasi/ongkir_verification',$data);
                $this->load->view('templates/footer');
            } else {
                $dt = [
                    'kode' => $kode,
                    'biaya' => $this->input->post('biaya')
                ];

                if($this->Verifikasi_Model->ubahStatusOngkir($dt)) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Status gagal diubah</div>');
                }

                redirect('adminpage/Verifikasi/verification_admin');
            }
        }

        public function konfirmasi_verification()
        {
            $data['judul'] = 'Halaman Detail Verifikasi';
            //$data['tampil'] = $this->Pembelian_Model->tampil($id);
            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/verifikasi/konfirmasi_verification');
            $this->load->view('templates/footer');
        }

        public function ubahStatusTerkonfirmasi($kode) {
            $hasil = $this->Verifikasi_Model->ubahStatus($kode);
            // var_dump($hasil);
            // die;
            if( $hasil > 0) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Status berhasil diubah</div>');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Status gagal diubah karena belum memberikan bukti pembayaran</div>');            
            }
            
            redirect('adminpage/Verifikasi/verification_admin');
        }
}

?>