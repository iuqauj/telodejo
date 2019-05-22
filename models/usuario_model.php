<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $contrasena){
      $this->db->select('id, nombre,localizacion,imagen');
      $this->db->from('usuarios');
      $this->db->where('nombre', $nombre);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function guardar($nombre, $contrasena, $localizacion, $contacto, $id=null){
      $data = array(
      'nombre' => $nombre,
      'contrasena' => $contrasena,
      'localizacion' => $localizacion,
      'contacto' => $contacto
      );      
      if($id){
         $this->db->where('id', $id);
         $this->db->update('usuarios', $data);
      }else{
         $this->db->insert('usuarios', $data);
      }
   } 
   public function añadir_imagen ($id){
      $data = array(
            'imagen' => 1
      );
      $this->db->where('id', $id);
      $this->db->update('usuarios', $data);
      $this->session->set_userdata($data);
      }
   public function obtener_por_id_user($id){
      $this->db->select('id, nombre, contrasena, localizacion, contacto');
      $this->db->from('usuarios');
      $this->db->where('id', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}