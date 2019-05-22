<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function iniciar_sesion($vuelve=null) {
      $data = array();

      $this->load->view('/header');
      $this->load->view('/iniciar_sesion', $data);
      if ($vuelve==1){
      $this->load->view('/error_sesion');         
      }
      $this->load->view('/footer');
   }
   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $nombre = $this->input->post('nombre');
         $contrasena = $this->input->post('contrasena');
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $contrasena);
         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,
               'nombre' => $usuario->nombre,
               'localizacion' => $usuario->localizacion,
               'imagen' => $usuario->imagen,
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect("usuarios/perfil");
         } else {
            redirect('usuarios/iniciar_sesion/1');
         }
      } else {
         $this->iniciar_sesion();
      }
   }
   public function perfil() {
      if($this->session->userdata('logueado')){
         $data = array();
		 $data['id'] = $this->session->userdata('id');
         $data['nombre'] = $this->session->userdata('nombre');
         $data['localizacion'] = $this->session->userdata('localizacion');
         $data['imagen'] = $this->session->userdata('imagen');
		 $datao = array();
		 $this->load->model('objeto_model');
		 $objetos = $this->objeto_model->usuario_por_id();
		 $datao['objetos'] = $objetos;
         $this->load->view('/header');
         $this->load->view('/perfil', $data);
		 $this->load->view('/index', $datao);
         $this->load->view('/footer');
      }else{
         redirect('usuarios/iniciar_sesion');
      }
   }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('usuarios/iniciar_sesion');
   }

   public function guardar($id=null){
      $data = array(); 
      $this->load->model('usuario_model');
      if($id){
         $usuario = $this->usuario_model->obtener_por_id_user($id); 
         $data['id'] = $usuario->id;
         $data['nombre'] = $usuario->nombre;
         $data['contrasena'] = $usuario->contrasena;
         $data['localizacion'] = $usuario->localizacion;
         $data['contacto'] = $usuario->contacto;
         $this->load->view('/header');
         $this->load->view('/actualiza_user', $data);
         $this->load->view('/footer');
      }else{
         $data['id'] = null;
         $data['nombre'] = null;
         $data['contrasena'] = null;
         $data['localizacion'] = null;
         $data['contacto'] = null;
         $this->load->view('/header');
         $this->load->view('/guardar_user', $data);
         $this->load->view('/footer');
      }

   }

   public function guardar_post($id=null){
      if($this->input->post()){
         $nombre = $this->input->post('nombre');
         $contrasena = $this->input->post('contrasena');
         $localizacion = $this->input->post('localizacion');
         $contacto = $this->input->post('contacto');
         $this->load->model('usuario_model');
         $this->usuario_model->guardar($nombre, $contrasena, $localizacion, $contacto, $id);

         $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $contrasena);
         $usuario_data = array(
           'id' => $usuario->id,
           'nombre' => $usuario->nombre,
           'localizacion' => $usuario->localizacion,
           'imagen' => $usuario->imagen,
           'logueado' => TRUE
         );
         $this->session->set_userdata($usuario_data);
         redirect("usuarios/perfil");
      }

      else{
         $this->guardar();
      } 
   }

   public function subir_user($id){
      $this->load->model('usuario_model');
      $usuario = $this->usuario_model->obtener_por_id_user($id); 
      $data['id'] = $usuario->id;
      $this->load->view('/header');
      $this->load->view('/subir_user', $data);
      $this->load->view('/footer');
   }

}

