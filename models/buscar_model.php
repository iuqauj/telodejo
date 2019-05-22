<?php
class Buscar_model extends CI_Model {
    public function __construct()
    {
         parent::__construct();
    }
    public function busca()
    {
        $clave = $this->input->GET('clave', TRUE);
        $data = $this->db->query("SELECT * from objetos where (nombre like '%$clave%' or descripcion like '%$clave%')");
        return $data->result();
    }
}