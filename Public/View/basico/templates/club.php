<?php
  $lib = new Libreria;
  $root = new Core;
  $obj = new Basico;
  $get = new Get;
?>
<!DOCTYPE html>
<html lang="es-Es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>OneSoccer</title>
    <?php
      $lib->CssBasico();
    ?>
  </head>
  <body>

    <?php
      include "Public/View/basico/templates/menu.php";
      $get->get2($_GET['url']);
      $link = $get->setGet();
      $obj->getClub($link);
      $obj->club();
    ?>
  </body>
</html>
