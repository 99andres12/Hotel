<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_rooms extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }
     //FUNCION PARA VALIDAR EL LOGIN
     function consultaHabita()
     {
       $sql="select * from rooms ";
             $restul= $this->db->query($sql);
             return $restul->result();
     }


     function eliminaHabitacion($id){
       $this->db->delete('rooms',array('id'=>$id));
     }




}
?>
