
    <h1> <?php echo $nombre ?> </h1>

    <?php if ($imagen==1){?>
		<div> <img src= "<?php echo base_url() ?>images/users/<?php echo $id?>.jpg" width="400px"> </div>
	<?php } else {?>
		<div> <img src= "<?php echo base_url() ?>images/noimage.jpg" width="400px"> </div>
	<?php } ?>

    <h3> Localización</h3>



<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $localizacion ?>&key=AIzaSyB298X89HJgwcVrzfjP1Y-xkOziLpcQ0cA" allowfullscreen></iframe>
   <?php if($imagen == 0) $accion="Añadir imagen de perfil";
        else $accion = "Cambiar imagen de perfil"; ?>

 


 	<p>
 	</br>
	 <a class="btn btn-info" href="<?php echo base_url() ?>usuarios/guardar/<?php echo $id ?>"> Editar perfil</a>
	 <a class="file-upload btn btn-primary" href="<?php echo base_url() ?>usuarios/subir_user/<?php echo $id ?>"> <?php echo $accion ?> </a>
	 <a class="btn btn-danger" href="<?php echo base_url()?>usuarios/cerrar_sesion"> Cerrar sesión</a>
	</p>
	</br>

   
   
