<?php
class BusStopRoutes_Model extends CI_Model
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
    public function getAllBusStops()
   {
       $query = $this->db->get('bus_stops');
       $result = array();
       foreach($query->result() as $row)
       {
               $data= array('id'=>$row->bus_stops_id,'name'=>$row->stop_name,'no'=>$row->stop_no,'lon'=>$row->lon,'lat'=>$row->lat,'admin'=>$row->admin_id);
               $result[] =$data; 
       }
       return $result; 
   }
   public function preformAction($route,$busStops)
   {
      
       $allBusStops = $this->getAllBusStops();
       $busStopObject = array();
       foreach ($busStops as $bus) {
           
           foreach ($allBusStops as $row) {
               
                    if($bus['id']==$row['id'])
                    {
                       $busStopObject[] = $row;

                    }
             }
       }
       
       
       $previous = $busStopObject[0];
       
      for($i = 1; $i < count($busStopObject); $i++)
        {
            $start = $previous['lat'] . ',' . $previous['lon']; 
     $end = $busStopObject[i]['lat'] . ',' .$busStopObject[i]['lon'] ;
     $data = json_decode(file_get_contents('http://maps.googleapis.com/maps/api/directions/json?origin=' . $start . '&destination=' . $end . '&sensor=false'),true);
     
      $distance = $data['routes'][0]['legs'][0]['distance']['value'];
      
      
      
$data2 = array(
        
        'route_id'=>$route,
            'sequence_no'=>$i,
        'starting_point'=>$previous.id,
        'ending_point'=>$busStopObject[i].id,
            'distance'=>$distance
        );

        addBusStopRoute($data2);
     

    
    $previous = $busStopObject[i];
 


        }
       
       
       
   }
   public function addBusStopRoute($data)
   {
     
        

        $this->db->insert('route_has_bus_stops',$data);
   }
} 
?>

