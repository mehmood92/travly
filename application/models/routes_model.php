<?php
class Routes_Model extends CI_Model
{
   public function __construct() 
   {
       parent::__construct();
   }
   public function getAllRoutes()
   {
       $query = $this->db->get('route');
       $result = array();
       foreach($query->result() as $row)
       {
               $data= array('id'=>$row->route_id,'number'=>$row->route_no,'str'=>$row->str_point,'end'=>$row->ending_point,'admin'=>$row->admin_id);
               $result[] =$data; 
       }
       return $result; 
   }
   
} 
?>

