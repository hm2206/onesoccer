<?php
    $root = new Core;
    $obj = new Basico;
?>
<h2 class="titulo-group"><?php echo $fila[1];?></h2>

<nav class="option">
  <h3 class="titulo-news">Informacion</h3>
  <p>
    <?php
        echo utf8_encode($fila[3]);
    ?>
  </p>
</nav>

<table class="tabla-new">
  <tr>
    <td class="card-new" colspan="2">
      <div class="cont-new big"><img src="<?php echo $root->url_link['config']?>img/perfil/<?php echo $fila[5]?>" class="img-new"></div>
    </td>
  </tr>
</table>

<h3 class="titulo-news">Jugadores</h3>
  <div class="liga-equipos">
    <?php
      $i=0;
          while($fila = mysqli_fetch_array($datos_j)){
    ?>

              <div class='equipos-box'>
                <div class='box-img'><img src="<?php echo $this->url_link['config'];?>img/perfil/<?php echo $fila[6];?>">
                    <p>Camiseta : <?php echo utf8_encode($fila[3]) ?> |  Goles : <?php echo $fila[5];?></p>
                </div>
                <div class='box-text'>
                    <h3><?php echo $fila[1] ." ". $fila[2]?></h3>
                </div>
              </div>

    <?php
              $i++;
          }
    ?>
