<h3> Lista de objetos </h3>
<p> <a class="btn btn-success" href="<?php echo base_url() ?>objetos/guardar"> Añadir objeto </a> </p>
<?php if (count($objetos)): ?>
 <table class="table tableborder">
    <thead>
       <tr>
          <th> Nombre </th>
          <th> Descripción </th>
          <th> &nbsp; </th>
       </tr>
    </thead>
    <tbody>
       <?php foreach($objetos as $item): 
        if($item->foto == 0) $accion="Añadir foto";
        else $accion = "Cambiar foto";
        ?>
          <tr>
             <td style="width: 20%"> <?php echo $item->nombre ?> </td>
             <td style="width: 35%"> <?php echo $item->descripcion ?> </td>
             <td> 
                <a class="btn btn-info" href="<?php echo base_url() ?>objetos/ver/<?php echo $item->id ?>"> Ver </a>

                <a class="btn btn-info" href="<?php echo base_url() ?>objetos/guardar/<?php echo $item->id ?>"> Editar </a>
              
                <a class="file-upload btn btn-primary" href="<?php echo base_url() ?>objetos/subir/<?php echo $item->id ?>"> <?php echo $accion ?> </a>

                <a class="btn btn-danger eliminar_objeto" href="<?php echo base_url() ?>objetos/eliminar/<?php echo $item->id ?>"> Eliminar </a> 
             </td>
          </tr>
       <?php endforeach; ?>
    </tbody>
 </table>
<?php else: ?>
 <p> No hay objetos </p></br>
<?php endif; ?>
<script type="text/javascript">
   $(".eliminar_objeto").each(function() {
      var href = $(this).attr('href');
      $(this).attr('href', 'javascript:void(0)');
      $(this).click(function() {
         if (confirm("¿Seguro desea eliminar este objeto?")) {
            location.href = href;
         }
      });
   });
</script>