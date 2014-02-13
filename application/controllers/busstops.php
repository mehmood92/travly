<?php 
class BusStops extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('include/header.php');
              $this->load->view('include/topbar.php');
              $this->load->view('include/sidebar.php');
              $this->load->view('busstops.php');
              $this->load->view('include/footer.php');
    }
}
?>