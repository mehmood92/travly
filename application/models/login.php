<?php 
class Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function loginValidation($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('admin');
        if($result->num_rows() > 0)
        {
            $res = $result->row();
            $data = array('username'=>$res->username,'password'=>$res->password,'name'=>$res->name);
            return $data ; 
        }
    }
}
?>
