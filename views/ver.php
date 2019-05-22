<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <title> telodejo.es </title>
    <link type="text/css" href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Rubik " rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	 	<table>
	 		<tr>
		  		<td><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/dalt.png" align="right"></a></td>
		 		<td><a href="<?php echo base_url() ?>usuarios/perfil"><img src="<?php echo base_url() ?>images/perfil.png" align="right"></a></td>
		   		<td><a href="<?php echo base_url() ?>buscar/clave"><img src="<?php echo base_url() ?>images/busca.png" align="right"></a></td>
	   		</tr>
	   	</table>
	 
    <div class="container">




<h1> <?php echo $objeto->nombre ?> </h1>

<p>
  <a class="btn btn-success" data-toggle="collapse" href="#contacto" role="button" aria-expanded="false" aria-controls="collapseExample">
   Contacta con el usuario
  </a>
 
</p>
<div class="collapse" id="contacto">
  <div class="card card-body">
Si quieres solicitar un préstamo al propietario <strong><?php echo $objeto->user ?></strong> usa esta información de contacto:

   <p><strong><?php echo $objeto->contacto; ?></strong></p>

  </div>
</div>



<div> <p><?php echo nl2br($objeto->descripcion) ?> </p></div>
<p><?php if ($objeto->foto==1){?></p>
<div> <img src= "<?php echo base_url() ?>images/<?php echo $objeto->id?>.jpg" width="400px"> </div>
<?php } else {?>
<div> <img src= "<?php echo base_url() ?>images/noimage.jpg" width="400px"> </div>
<?php } ?>
<br />
<div> <a class="btn btn-info" href="javascript:history.back()"> Volver atrás </a> </div>