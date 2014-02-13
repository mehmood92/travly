<?php 
class Routes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->model('routes_model');
        $data = $this->routes_model->getAllRoutes();
        $this->data['route'] = $data;
        $this->load->view('include/header.php');
        $this->load->view('include/topbar.php');
        $this->load->view('include/sidebar.php');
        $this->load->view('routes.php',$this->data);
        $this->load->view('include/footer.php');
    }
}
?>