<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_login');
    $this->load->model('model_rooms');
  }
  public function validaLogin(){

    if(isset($_POST['user']) and isset($_POST['pass'])){


      $username = $this->input->post('user');
      $passwordS = $this->input->post('pass');
      $resultado=$this->model_login->LoginBDD($username,$passwordS);

      if(count($resultado)==1){

        $session= array(
          'ID' => $resultado->id,
          'USUARIO' => $resultado->user,
          'NOMBRE' => $resultado->nombre,
          'CONTRASENA' => $resultado->password,
          "is_logged_in"  =>TRUE,
        );
        $this->session->set_userdata($session);

        redirect("".base_url()."index.php/login/home");

      }else {
        echo "no existe usario";
      }

    }
  }

  public function home(){
    $data['rooms']=$this->model_rooms->consultaHabita();
    $data['meseros']=$this->model_rooms->consultaHabita();
    $this->load->view('header_admin');
    $this->load->view('view_admin',$data);
  }

  public function eliminarHa($id=null){
    $this->model_rooms->eliminaHabitacion($id);
      redirect("".base_url()."index.php/login/home");
  }

  public function admi(){
    $this->load->view('header_admin');
    $this->load->view('view_home');
  }



}

?>
