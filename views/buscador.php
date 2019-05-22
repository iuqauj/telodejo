
<h1> Buscar </h1>
 <form action="<?php echo base_url()?>buscar/recoge" action="GET">
                <div class="form-group">
                    <label for="clave">Busca un objeto</label>
                    <input type="text" class="form-control" id="clave" name="clave" placeholder="Palabra a buscar">
                </div>
                <input class="btn btn-primary" type="submit" value="Busca">
  </form>

  <p> Seguro que hay algún objeto que te interesa y te gustaría que te prestara alguno de los usuarios de telodejo.es</p>
  <p> Después de pedir cualquiera de los objetos disponibles no olvides seguir la cadena. Puedes usar todos los objetos que te presten pero recuerda que tú también te puedes hacer usuario de telodejo.es y prestar tus objetos. <a href="<?php echo base_url()?>/usuarios/guardar">Regístrate</a> y comienza a prestar.