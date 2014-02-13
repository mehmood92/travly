<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     * 
     */
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
    }
    

    public function index() 
    {
        $this->load->view('Login.php');
    }
    public function loginVerification()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username','Username','Required');
        $this->form_validation->set_rules('password','Password','Required|min_length[6]');
        if($this->form_validation->run() == FALSE)
        {
            redirect('index');
        }
        else 
        {
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('login');
            $result = $this->login->loginValidation($username,$password);
            if($result != NULL)
            {
              $res = $result;   
              $data = array('Name'=>$res['name'],'is_logged_in'=>true);
              $datas = $this->session->set_userdata($data);
              $this->home();
            }
            else
            {
              redirect('index');
            }
         }
            
    }
    public function logout()
    {
        $this->session->unset_userdata('is_logged_in');
        $this->load->view('Login.php');
    }
    public function home()
    {
        $this->load->view('include/header.php');
        $this->load->view('include/topbar.php');
        $this->load->view('include/sidebar.php');
        $this->load->view('index.php');
        $this->load->view('include/footer.php');

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */