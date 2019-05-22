
    <h1> Iniciar sesión </h1>

     <?php if ($this->input->get == 1) echo "EL USUARIO O LA CONTRASEÑA SON INCORRECTAS";?>
    <form method="post" action="<?php echo base_url() ?>usuarios/iniciar_sesion_post">
       <label> Nombre </label>
       <br />
       <input type="text" name="nombre" />
       <br />
       <label> Contraseña </label>
       <br />
       <input type="password" name="contrasena" />
       <br />
       <input type="submit" value="Iniciar sesión" />
    </form>
