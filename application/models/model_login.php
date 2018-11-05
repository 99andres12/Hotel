<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_login extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }
     //FUNCION PARA VALIDAR EL LOGIN
     function LoginBD($username, $password)
     {
          $this->db->where('user', $username);
          $this->db->where('password', $password);
		  return $this->db->get('users')->row();
     }

     function LoginBDD($username, $password)
     {
        $sql="select * from users where user='".$username."'
              and password='".$password."'  ";
              $restul= $this->db->query($sql);
              return $restul->row();
     }




}
?>
