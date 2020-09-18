<?php
Class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
        $this->load->library('form_validation');
        $this->load->model("Model_grafik");
    }
    Public function index()
    {
        $judul['judul'] = 'Halaman Admin';
        
        foreach($this->Model_grafik->statistik_pengunjung_perbulan()->result_array() as $row)
        {
         $data['grafik'][0]=(float)$row['Januari'];
         $data['grafik'][1]=(float)$row['Februari'];
         $data['grafik'][2]=(float)$row['Maret'];
         $data['grafik'][3]=(float)$row['April'];
         $data['grafik'][4]=(float)$row['Mei'];
         $data['grafik'][5]=(float)$row['Juni'];
         $data['grafik'][6]=(float)$row['Juli'];
         $data['grafik'][7]=(float)$row['Agustus'];
         $data['grafik'][8]=(float)$row['September'];
         $data['grafik'][9]=(float)$row['Oktober'];
         $data['grafik'][10]=(float)$row['November'];
         $data['grafik'][11]=(float)$row['Desember'];
        }
        // foreach($this->Model_grafik->statistik_pengunjung_perhari()->result_array() as $row)
        // {
        //  $data['grafik'][0]=(float)$row['Senin'];
        //  $data['grafik'][1]=(float)$row['Selasa'];
        //  $data['grafik'][2]=(float)$row['Rabu'];
        //  $data['grafik'][3]=(float)$row['Kamis'];
        //  $data['grafik'][4]=(float)$row['Jumat'];
        //  $data['grafik'][5]=(float)$row['Sabtu'];
        //  $data['grafik'][6]=(float)$row['Minggu'];
        // }
       
        $data["perbulan"] = $this->Model_grafik->perbulan();
        $data["pertahun"] = $this->Model_grafik->pertahun();
        $data["perhari"] = $this->Model_grafik->perhari();
        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/index',$data);
        $this->load->view('templates/footer');
    
    }
}


?>