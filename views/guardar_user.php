<h1> Registro usuario </h1>
<form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>usuarios/guardar_post/<?php echo $id ?>">
    <div class="row">
       <label> Nombre </label>
       <input type="text" name="nombre" required="required" value="<?php echo $nombre ?>" />
    </div>
    <div class="row">
       <label> Contrasena </label>
       <input type="password" name="contrasena" required="required" value="<?php echo $contrasena ?>" />
    </div>

    <div class="row">
       <label> Código postal </label>
       <input type="text" name="localizacion" required="required" value="<?php echo $localizacion ?>" />
    </div>

    <div class="row">
       <label> Contacto </label>
       <textarea name="contacto" cols="50" rows="4" required="required" style="width: 100%;"><?php echo $contacto; ?></textarea>
    </div>
    <div c

    

    <div class="row">
       <input type="submit" class="btn btn-success" value="Registrarse" />
       <a class="btn btn-danger" href="javascript: history.go(-1)"> Cancelar </a>
    </div>
</form>

