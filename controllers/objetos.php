<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Objetos extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function index() {
      $data = array();
      $this->load->model('objeto_model');
      $data['objetos'] = $this->objeto_model->obtener_todos();
      $this->load->view('/header');
      $this->load->view('/index', $data);
      $this->load->view('/footer');
   }
   public function ver($id){
      $data = array();
      $this->load->model('objeto_model');
      $objeto = $this->objeto_model->obtener_por_id($id);
      $data['objeto'] = $objeto;
      $this->load->view('/ver', $data);
      $this->load->view('/footer');
   }
   public function guardar($id=null){
      $data = array(); 
      $this->load->model('objeto_model');
      if($id){
         $objeto = $this->objeto_model->obtener_por_id($id); 
         $data['id'] = $objeto->id;
         $data['nombre'] = $objeto->nombre;
         $data['descripcion'] = $objeto->descripcion;
         $data['usuario'] = $objeto->usuario;
         $data['foto'] = $objeto->foto;
         $this->load->view('/header');
         $this->load->view('/actualiza', $data);
         $this->load->view('/footer');
      }else{
         $data['id'] = null;
         $data['nombre'] = null;
         $data['descripcion'] = null;
         $data['usuario'] = null;
         $data['foto'] = null;
         $this->load->view('/header');
         $this->load->view('/guardar', $data);
         $this->load->view('/footer');
      }

   }
   public function guardar_post($id=null){
      if($this->input->post()){
         $nombre = $this->input->post('nombre');
         $descripcion = $this->input->post('descripcion');
         $foto = $this->input->post('foto');
         $this->load->model('objeto_model');
         $this->objeto_model->guardar($nombre, $descripcion, $usuario, $foto, $id);
         redirect('usuarios/perfil');
      }else{
         $this->guardar();
      } 
   }
   public function eliminar($id){
      $this->load->model('objeto_model');
      $this->objeto_model->eliminar($id);
      redirect('usuarios/perfil');
   }

   public function subir($id){
      $this->load->model('objeto_model');
      $objeto = $this->objeto_model->obtener_por_id($id); 
      $data['id'] = $objeto->id;
      $data['usuario'] = $objeto->usuario;
      $this->load->view('/header');
      $this->load->view('/subir', $data);
      $this->load->view('/footer');
   }

   
}