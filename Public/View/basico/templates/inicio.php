<!DOCTYPE html>
<html>
<head>
  <title>chanmpions</title>
  <?php
    $lib = new Libreria;
    $lib->CssBasico();
    $link = new Core;
  ?>
</head>
  <body>
  <header>
  <div class="wrapper">
    <div class="logo">ONE FOOTBALL</div>

    <nav>
      <a href="#">UEFA champions league</a>
      <a href="#">eurocopa</a>
      <a href="#">Premier leage</a>
      <a href="#">Bumdesliga</a>
      <a href="">copa del rey</a>
    </nav>
  </div></header>
<center>
  <table width="90%" class="table-3">
    <tr>
      <td class="cont-img"><img src="<?php echo $link->url_link['config']?>img/pagina/balon.jpg" class="img"></td>
      <td><h1>Brasil supera su tramite</h1></td>
    </tr>
  </table>


  <table width="100%" class="table-4">
    <tr>
      <td class="cartas">
        <img src="<?php echo $link->url_link['config']?>img/pagina/mes.jpg" class="img">
        <p class="cart-text">"MESSI DICE SER MEJOR QUE RONALDO"</p>
      </td>

    <td class="space"></td>

      <td class="cartas">
        <img src="<?php echo $link->url_link['config']?>img/pagina/bal2.jpg" class="img">
        <p class="cart-text">LOS BALONES QUE SE USARAN EN EL MUNDIAL</p>
      </td>

    <td class="space"></td>

      <td class="cartas">
        <img src="<?php echo $link->url_link['config']?>img/pagina/cr.jpg" class="img">
        <p class="cart-text">CRISTIANO , TERCER MAXIMO GOLEADOR DE LA HISTORIA</p>
      </td>

    <td class="space"></td>

      <td class="cartas">
        <img src="<?php echo $link->url_link['config']?>img/pagina/est.jpg" class="img">
        <p class="cart-text">EL ESTADIO AZTECA ES DONDE SE ESTRENARA EL MUNDIAL 2026</p>
      </td>
    </tr>
  </table>


</center>
</body>
</html>
