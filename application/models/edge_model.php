<?php
class Edge extends CI_Model
{
   public function __construct() 
   {
       parent::__construct();
   }
  public function getDistance($lat,$lon,$lat1,$lon1)
  {
      $earthRadius = 6371;
       
                $dLat =  deg2rad($lat1 - $lat);
		$dLon = deg2rad($lon1 - $lon);
		 $a =  ( sin($dLat / 2) * sin($dLat / 2) +   cos(deg2rad($lat))
				* cos(deg2rad($lat1))
				* sin($dLon / 2) * sin($dLon / 2));
		$c =  (2 * atan2(sqrt($a), sqrt(1 - $a)));
		$d = $earthRadius * $c;
		return $d;
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
   public function performAction()
   {
       $busStops = getAllBusStops();
       foreach ($busStops as $a) {
        
           foreach ($busStops as $b) {
               echo getDistance($a->lon,$a->lat,$b->lon,$b->lat);
               if(getDistance($a->lon,$a->lat,$b->lon,$b->lat)<=0.50)
               {
                   $data = array(        
        'startingPoint'=>$a->id,
            'endingPoint'=>$b->id   
        );
                   addEgde($data);
               }
               
            }
       }
       
   }
  public function addEgde($data)
  {
        

        $this->db->insert('edge',$data);
   }
   
} 
?>

