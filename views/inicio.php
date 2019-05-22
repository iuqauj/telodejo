<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <title> telodejo.es </title>
    <link type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Rubik " rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-2.1.1.min.js"></script> 
 </head>
 <body class="inicio">
	 
    <div class="container">


<div class="prin">
	<img src= "<?php echo base_url() ?>images/cycle2.png"></br>

    <?php if($this->session->userdata('logueado')){?>
      <a href="<?php echo base_url() ?>usuarios/perfil"><img src= "<?php echo base_url() ?>images/perfil.png" class="padd"></a> PERFIL USUARIO</br></br>
    <?php } else {?>
    <a href="<?php echo base_url() ?>usuarios/iniciar_sesion"><img src= "<?php echo base_url() ?>images/login.png"></a> L O G I N 
     <a href="<?php echo base_url() ?>usuarios/guardar"><img src= "<?php echo base_url() ?>images/perfil.png" class="padd"></a> R E G I S T R O</br></br>
    <?php } ?>
	 <form action="<?php echo base_url()?>buscar/recoge" action="GET">
        <input type="text" class="casilla_busca" id="clave" name="clave" placeholder="ENCUENTRA UN OBJETO">
        <input type="image" src="<?php echo base_url() ?>images/busca_p.png" alt="Submit" width="100">
 	</form>
</div>
   </div>
  </body>
</html>

    