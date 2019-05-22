 <h2>Resultados</h2>
    <hr>
        <?php
        if(count($clave)>0)
        {
            foreach ($clave as $data) {
            echo "<div class='objeto'>";
            echo "<a href='".base_url()."objetos/ver/".$data->id."'> ".$data->nombre."</a><br>";
            if ($data->foto==1){
                echo "<a href='".base_url()."objetos/ver/".$data->id."'><img src='".base_url()."images/".$data->id.".jpg' width='230px'></a>";
            }
            else{
                echo "<a href='".base_url()."objetos/ver/".$data->id."'><img src='".base_url()."images/noimage.jpg' width='230px'></a>";
            }

            echo "</div>";
            }
        }
        else
        {
            echo "La consulta no tiene resultados";
        }

    ?>
<div class="atras"> <a class="btn btn-info" href="javascript:history.back()"> Volver atrás </a> </div>

<p> </p>

