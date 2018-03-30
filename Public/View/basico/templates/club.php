<?php
  $root = new Core;
  $lib = new Libreria;
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
    ?>

    <h2 class="titulo-group">Bundes League</h2>

    <nav class="option">
      <a href="#">Noticias</a>
      <a href="#">Partidos</a>
    </nav>

    <h3 class="titulo-news">Ultimas Noticias</h3>

    <table class="tabla-new">
      <tr>
        <td class="card-new" colspan="2">
          <div class="cont-new big"><img src="<?php echo $root->url_link['config']?>img/perfil/bg2.jpg" class="img-new"></div>
          <p class="cont-text big-text">
              neiser
          </p>
        </td>

        <td class="card-new">
          <div class="cont-new"><img src="<?php echo $root->url_link['config']?>img/perfil/bg3.jpg" class="img-new"></div>
          <p class="cont-text">
              revilla
          </p>
        </td>
      </tr>
    </table>

  </body>
</html>
