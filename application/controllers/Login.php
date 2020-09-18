<?php
class Login extends CI_Controller
{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Login_Model');
        $this->load->library('form_validation');
    }
    public function index(){
        $judul['judul'] = 'Halaman Admin';
        $this->load->view('templates/header_admin', $judul);
        $this->load->view('adminpage/loginpage');
        $this->load->view('templates/footer');
    }
        public function aksi()
        {
    
        //set form validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //set message form validation
        $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
            <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');
            if ($this->form_validation->run() == TRUE) {

                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $where = array(
                    'username' => $username,
                    'password' => $password
                );
                //checking data via model
                $checking = $this->Login_Model->check_login('penjual', array('username' => $username), array('password' => $password));

                        if ($checking > 0) {

                                $session_data = array(
                                // 'id_penjual' => $apps->id_penjual,
                                    'username' => $username,
                                    'password' => $password,
                                    'status' => "Login",
                                );
                            /*  var_dump($session_data);
                                die; */
                                $this->session->set_userdata($session_data);
                
                                redirect("Adminpage/Home/");
                            
                
                        }else{
                            $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                            <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
        
                        $judul['judul'] = 'Halaman Admin';
                        $this->load->view('templates/header_admin', $judul);
                        $this->load->view('adminpage/loginpage',$data);
                        $this->load->view('templates/footer');
                    }
                }else{

                    $judul['judul'] = 'Halaman Admin';
                    $this->load->view('templates/header_admin', $judul);
                    $this->load->view('adminpage/loginpage');
                    $this->load->view('templates/footer');
                }

        
    }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect(base_url('Login'));
        }
    }

   



?>
