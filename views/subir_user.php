    <h1> Subir imagen usuario </h1>


    <div class="row">
      <form action="<?php echo base_url() ?>archivo/cargar_archivo/<?php echo $id ?>/1" method="post" enctype="multipart/form-data">
     
      <input type="file" class="file-upload btn btn-primary" name="foto_objeto" required="required" /> <input type="submit"  class="file-upload btn btn-primary" value="Sube el archivo">
      </form>
      </br></br>
      [Formato permitido: <strong>JPG</strong>]
    </div>   