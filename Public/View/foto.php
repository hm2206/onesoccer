<?php
$helpers = new Core;
?>

<!DOCTYPE html>
<html>
<head>
	<title>foto</title>
	<?php
		$lib =  new Libreria;
		$lib->CssFoto();
	?>
</head>
<body>

	<div class="header_2">
		<div class="header_2_left">
			<img src="<?php echo $helpers->url_link['config']?>img/pagina/bg2.jpg" class="header_2_img">
			<h1 class="eslogan">Foto.com</h1>
		</div>

		<div class="header_2_right">
			<form class="formulario_buscar">
				<label>buscar</label>
				<input type="text" name="buscador" class="inputs">
				<input type="submit" name="buscar" class="btn" value="IR">
			</form>
		</div>
	</div>


	<div class="menu_2">
		<a href="" class="link">Cartelera de Cines</a>
		<a href="" class="link">Suscripción</a>
		<a href="" class="link">Contactate</a>
		<a href="" class="link">01 de Diciembre</a>
	</div>

	<table width="78%">
		<tr>
			<td>
				<img src="<?php echo $helpers->url_link['config']?>img/pagina/bg1.jpg" class="img">
			</td>
			<td>
				<img src="<?php echo $helpers->url_link['config']?>img/pagina/bg3.jpg" class="img">
			</td>
			<td>
				<img src="<?php echo $helpers->url_link['config']?>img/pagina/bg4.jpg" class="img">
			</td>
			<td>
				<img src="<?php echo $helpers->url_link['config']?>img/pagina/bg5.jpg" class="img">
			</td>
			<td>
				<img src="<?php echo $helpers->url_link['config']?>img/pagina/bg6.jpg" class="img">
			</td>
		</tr>

		<tr>
			<td>
				<b>"El protegido"</b><br>
				El mismo equipo de<br>
				"Sexto sentido" se<br>
				vuelve a juntar para<br>
				lograr el mismo<br>
				éxito.. y parecen<br> 
				poder conceguirlo.
			</td>
			<td>
				<b>Oscar 2001</b><br>
				A poco de conocerse<br>
				las candidaturas, no<br>
				no se vislumbrea<br>
				ninguna favorita,<br>
				solo <i>"Gladiador"</i><br> 
				parece tener el lugar<br>
				asegurado.
			</td>
			<td>
				<b>Cine digital</b><br>
				De qué hablamos<br>
				cuando hablamos de<br>
				cine digital, Un<br>
				repaso por las<br>
				producciones que<br> 
				recurren a esta<br>
				tecnologia
			</td>
			<td>
				<b>Alfonso De Grazia</b><br>
				La cultura despide a<br>
				un gran actor, que<br>
				fallecio de un ataque<br>
				al corazon mientras<br>
				miraba unn partido de<br> 
				futbol por television<br>
			</td>
			<td>
				<b>"El Grinch"</b><br>
				Uno de los platos<br>
				fuertes para la<br>
				temporada, Jim<br>
				Carry protagoniza<br>
				esta fabula basada<br> 
				en una serie de<br>
				dibujos animados
			</td>
		</tr>
	</table>

	<table width="78%">
		<tr>
			<td colspan="3"><h1 class="suma">Sumario</h1></td>
		</tr>

		<tr>
			<td>
				<a href="">Estrenos</a><br>
				<u>"el protegido", de M. Night<br>
					Shyamalan<br>
					"Que absurdo es haber<br>
					crecido" de poly Santos
				</u>
			</td>

			<td>
				<a href="">Actualidad</a><br>
				<u>"Robert Downey Jr. otra vez<br>
					en problemas<br>
					La Zeta-Jones podria ser<br>
					un agente 007
				</u>
			</td>

			<td>
				<a href="">Las recomendadas de<br>
							FOTOGRAMA</a><br>
				<u>"Shaft" , de Jhon<br>
					Singleton
				</u>
			</td>
		</tr>
	</table>

</body>
</html>