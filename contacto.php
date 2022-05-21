<!DOCTYPE html>
<html>
<head>
	<title> Buscador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estiloindex.css">
</head>
<body >
<main> <div id="fondogaleria">
<header> 
 <ul class="navbar">
 	            <li><a href="index.html"> Inicio</a></li>
				<li><a href="historia.html"> Historia </a></li> 
				<li><a href="exposiciones.html"> Exposiciones</a></li> 
				<li><a href="#"> Artistas</a>
					<ul>
						<li><a href="dali.html">Dalí</a></li>
						<li><a href="ernst.html">Ernst</a></li>
						<li><a href="miro.html">Miró</a></li>
						<li><a href="magri.html">Magritte</a></li>
					</ul>
				</li>
				<li><a href="galeria.html"> Galeria</a></li>
				<li><a href="contacto.html"> Contacto</a></li>
				

			</ul>  </header>
			<section> 
 <form id="cajabuscador" action="contacto.php" method="post" >
<input type="search" name="buscar" placeholder="Artistas">

    <input type="submit" value="Enviar">

</form>
<?php
	include('conexion.php');
	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>

	<p>Cantidad de Resultados: 
	<?php 

		$nros=mysqli_num_rows($consulta);
		echo $nros; 
	?>
	</p>
    
	<?php
		while ($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'];
			echo $resultados['apellido'] . " <br>  ";
			echo $resultados['bio'] ;

	?>
     <?php echo $resultados['foto'] ; ?>

</p>
    
    <?php
		
}
		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?> 




		   </section> 

<footer >  <div id="footergaleria">
			<div id="nombre"> <a href="#"> XIOMARA ESPINDOLA </a> 
			<div id="redes">
				<ul><li> <a href="#" target="_blanck"><img src="2.png"></a></li>
				
					<li> <a href="#" target="_blanck"><img src="1.png"></a></li>
					
				</ul>
			</div> </div> </div></footer>
</main>

</body> 
</html>
