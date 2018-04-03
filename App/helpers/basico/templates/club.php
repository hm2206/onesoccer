<?php
    $obj = new Basico;
?>
<h2 class="titulo-group"><?php echo $fila[1]; $logo = $fila[1]; $id = $fila[0];?></h2>

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
      <div class="cont-new big"><img src="<?php echo $this->url_link['config']?>img/perfil/<?php echo $fila[5]?>" class="img-new"></div>
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
                    <h3><?php echo utf8_encode($fila[1]) ." ".  utf8_encode($fila[2]);?></h3>
                </div>
              </div>

    <?php
              $i++;
          }
    ?>
  </div>

    <!-- Estructura de  los partidos -->
    <?php
      $p = $obj->getPartidos($id);
      $l = $obj->setPartidos($p[1]);
      $v = $obj->setPartidos($p[2]);
    ?>


    <div class="partidos">
        <div class="head-partidos">
            <h2>Partidos del <?php echo $logo;?></h2>
        </div>

        <div class="cont-partidos">
          <h3 class="fecha">Fecha del partido</h3>
          <div class="card-partidos">
            <span>local</span>
            <div class="img-partidos">
              <img src="<?php echo $this->url_link['config'] . 'img/perfil/' . $l[6];?>">
            </div>
            <p><?php echo $l[1];?></p>
          </div>   
          <p>Vs</p>
          <div class="card-partidos">
             <span>visitante</span>
            <div class="img-partidos">
              <img src="<?php echo $this->url_link['config'] . 'img/perfil/' . $v[6];?>">
            </div>
            <p><?php echo $v[1];?></p>
          </div>
        </div>
    </div>
