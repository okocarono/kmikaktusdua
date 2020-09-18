<?php 
    Class Description extends CI_Controller
    {
        private $data;
        public function __construct(){
            parent::__construct();
           
            $this->load->model('cart_model');
           
            $this->data['data'] = $this->cart_model->getcart();
            $this->data['judul'] = 'KaktusKmi';
            
        }
        public function index()
        {
            $data['judul'] = 'Deskripsi Kaktuskmi';

            $this->load->view('templates/header', $this->data);
            $this->load->view('description/index',$data);
            $this->load->view('templates/footer');
        }

        public function kaktus()
        {
            $data['judul'] = 'Kaktus';

            $this->load->view('templates/header', $this->data);
            $this->load->view('description/kaktus',$data);
            $this->load->view('templates/footer');
        }
        public function aglaonema()
        {
            $data['judul'] = 'Aglaonema';

            $this->load->view('templates/header', $this->data);
            $this->load->view('description/aglaonema',$data);
            $this->load->view('templates/footer');
        }
        public function aloevera()
        {
            $data['judul'] = 'Aloevera';

            $this->load->view('templates/header', $this->data);
            $this->load->view('description/aloevera',$data);
            $this->load->view('templates/footer');
        }
        public function lactea()
        {
            $data['judul'] = 'Lactea';

            $this->load->view('templates/header', $this->data);
            $this->load->view('description/lactea',$data);
            $this->load->view('templates/footer');
        }
        public function sansivera()
        {
            $data['judul'] = 'sansivera';

            $this->load->view('templates/header', $this->data);
            $this->load->view('description/sansivera',$data);
            $this->load->view('templates/footer');
        }
    }
?>