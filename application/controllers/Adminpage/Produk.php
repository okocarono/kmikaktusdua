<?php
Class Produk extends CI_Controller
{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "Login"){
            redirect(base_url("Login"));
        }
        // $this->load->library('upload');
        $this->load->model("Produk_Model");
        $this->load->library("form_validation");
        $this->load->library('pagination');
    }
    public function edit_produk($kode_produk = null){
        if(!isset($kode_produk)) redirect('Adminpage/Produk/produk_admin');

        $produk = $this->Produk_Model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if($validation->run()){
            $data = [
                "kode_produk" => $kode_produk,
                "nama_produk" => $this->input->post('nama_produk'),
                "catatan" => $this->input->post('catatan'),
                "harga_produk" => $this->input->post('harga_produk'),
                "stok_produk" => $this->input->post('stok_produk'),
                "diameter" => $this->input->post('diameter'),
                "tinggi" => $this->input->post('tinggi'),
                "bobot" => $this->input->post('bobot'),
                "gambar" => $this->input->post('gambar') ,
                "jenis_produk" => $this->input->post('jenis_produk')
            ];
            $produk->update_data_produk($data);
        
            redirect(site_url('Adminpage/Produk/product_admin'));
        }
      
        $data["produk"] = $produk->getIdDataProduk($kode_produk);
     
        if(!$data["produk"]) show_404();

        $judul['judul'] = 'Edit Produk';

        $this->load->view('templates/header_admin', $judul);

        $this->load->view('adminpage/produk/edit_produk',$data);
        $this->load->view('templates/footer');
    }
    public function hapus_produk($kode_produk = null)
    {
        if (!isset($kode_produk)) show_404();

        if($this->Produk_Model->hapus_data_produk($kode_produk))
        {
            redirect(site_url('Adminpage/Produk/product_admin'));
        }
    }

    public function product_admin()
    {
        $judul['judul'] = 'Produk Administrator';
      
        $config['base_url'] = site_url('Adminpage/Produk/product_admin'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 15;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
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
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
     
        
        $data['data'] = $this->Produk_Model->getDataProduk($config["per_page"], $data['page']); 
    
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header_admin',$judul);
        $this->load->view('adminpage/produk/product_admin' ,$data);
        $this->load->view('templates/footer');
    }
    public function product_baru()
    {
        $data['judul'] = 'Halaman Menambah Produk Baru';
   
        $validation = $this->form_validation;
        $validation->set_rules($this->Produk_Model->rules());

        $dataku = [
            "kode_produk" => $this->input->post('kode_produk'),
            "nama_produk" => $this->input->post('nama_produk'),
            "harga_produk" => $this->input->post('harga_produk'),
            "stok_produk" => $this->input->post('stok_produk'),
            "diameter" => $this->input->post('diameter'),
            "tinggi" => $this->input->post('tinggi'),
            "jenis_produk" => $this->input->post('jenis_produk'),
            "catatan" => $this->input->post('catatan')
        ];

        $this->session->set_userdata($dataku);

        if($validation->run()){
            $this->Produk_Model->save_produk($this->Produk_Model->upload_gambar_produk());
            $this->session->set_flashdata('sukses','berhasil disimpan');
            redirect('Adminpage/produk/product_admin');
        } else {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('adminpage/produk/product_baru');
            $this->load->view('templates/footer');
        }

    }
    public function cariproduk()
    {

        $judul['judul'] = 'Pencarian Produk';
        $keyword = $this->input->post('keyword');
        $data['pagination'] = $this->pagination->create_links();
        $data['data'] = $this->Produk_Model->getProdukKeyword($keyword);
       
        $this->load->view('templates/header_admin',$judul);
        $this->load->view('adminpage/produk/product_admin' ,$data);
        $this->load->view('templates/footer');
    }
}

?>