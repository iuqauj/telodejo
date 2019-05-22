<?php
class Objeto_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function guardar($nombre, $descripcion, $usuario, $foto, $id=null){
      if($id){
         $data = array(
         'nombre' => $nombre,
         'descripcion' => $descripcion
         );
         $this->db->where('id', $id);
         $this->db->update('objetos', $data);
      }else{
         $data = array(
         'nombre' => $nombre,
         'descripcion' => $descripcion,
         'usuario' => $this->session->userdata('id')
         );
         $this->db->insert('objetos', $data);
      } 
   }
   public function eliminar($id){
      $this->db->where('id', $id);
      $this->db->delete('objetos');
   }
   public function obtener_por_id($id){
      $this->db->select('objetos.id, objetos.nombre, descripcion, usuario, foto,contacto,usuarios.nombre as user');
      $this->db->from('objetos');
      $this->db->join('usuarios', 'objetos.usuario = usuarios.id');
      $this->db->where('objetos.id', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function usuario_por_id(){
      $id_user = $this->session->userdata('id');
      $this->db->select('id, nombre, descripcion, usuario, foto');
      $this->db->from('objetos');
      $this->db->where('usuario', $id_user);
      $this->db->order_by('usuario, nombre', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
   }
   public function obtener_todos(){
      $this->db->select('id, nombre, descripcion, usuario, foto');
      $this->db->from('objetos');
      $this->db->where('usuario');
      $this->db->order_by('usuario, nombre', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
   }

   public function añadir_foto ($id){
   $data = array(
         'foto' => 1
      );
         $this->db->where('id', $id);
         $this->db->update('objetos', $data);
   }

}