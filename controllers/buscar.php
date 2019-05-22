<?php
class Buscar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buscar_model');
    }
    public function clave() 
    {
        $this->load->view('/header');
        $this->load->view('buscador');
        $this->load->view('/footer');
    }
    public function recoge()
    {
        $data2['clave'] = $this->Buscar_model->busca();
        $this->load->view('/header_result');
        $this->load->view('result', $data2);
        $this->load->view('/footer');
        
    }
}