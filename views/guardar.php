<h1> Añadir objeto </h1>
<form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>objetos/guardar_post/<?php echo $id ?>">
    <div class="row">
       <label> Título </label>
       <input type="text" name="nombre" required="required" value="<?php echo $nombre ?>" />
    </div>
    <div class="row">
       <label> Descripción </label>
       <textarea name="descripcion" cols="100" rows="10" required="required" style="width: 100%;"><?php echo $descripcion; ?></textarea>
    </div>

    <div class="row">
       <input type="submit" class="btn btn-success" value="Añadir" />
       <a class="btn btn-danger" href="javascript: history.go(-1)"> Cancelar </a>
    </div>
</form>

