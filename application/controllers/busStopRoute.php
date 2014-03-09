<?php 
class BusStopRoute extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->model('busstoproutes_model');
        $data = $this->busstoproutes_model->getAllRoutes();
        $data1 = $this->busstoproutes_model->getAllBusStops();
        $this->data['route'] = $data;
       $this->data['busstop'] = $data1;
        $this->load->view('include/header.php');
        $this->load->view('include/topbar.php');
        $this->load->view('include/sidebar.php');
        $this->load->view('busStopRoute.php',$this->data); 
        $this->load->view('include/footer.php');
    }
    public function getPost()
    {
         $route = $this->input->post('route');
         $busRoute['busstoproute'] = $this->input->post('busstoproute');
         
          $this->load->model('busstoproutes_model');
           $this->busstoproutes_model->preformAction($route,$busRoute);
           
    
    }
    
   
   
}
?>