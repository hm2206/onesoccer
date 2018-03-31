<?php
  $root = new Core;
  $lib = new Libreria;
  $obj = new Basico;
  $get = new Get;

  //Traer informacion de la base de datos
  $get->get2($_GET['url']);
  $liga = $obj->liga($get->setGet());
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>ligas</title>
    <?php
      $lib->CssBasico();
    ?>
  </head>
  <body>

    <?php
      include "Public/View/basico/templates/menu.php";
    ?>

    <div class="contenido-liga">
      <div class="liga-top">
        <h2><?php echo $liga['nombre'];?></h2>
        <h3>Equipos</h3>
        <div class="liga-equipos">
            <?php
                $obj->setLiga();
            ?>
        </div>
      </div>
    </div>
  </body>
</html>
