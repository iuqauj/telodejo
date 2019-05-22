
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Archivo extends CI_Controller {

 // public function index(){ 
 //       $this->load->view('subir');
 //  }

    function cargar_archivo($id,$user=null) {

        $mi_archivo = 'foto_objeto';
        if ($user==1) {  $config['upload_path'] = "images/users/"; }
        else {$config['upload_path'] = "images/";}
        $config['file_name'] = "$id";
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = "jpg";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        $data['uploadSuccess'] = $this->upload->data();

        if ($user==1) {
            $this->load->model('usuario_model');
            $this->usuario_model->añadir_imagen($id);
            redirect('usuarios/perfil');
        }
        else {
        $this->load->model('objeto_model');
        $this->objeto_model->añadir_foto($id);
        redirect('usuarios/perfil');
        }
    }
}
?>

   