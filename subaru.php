<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/prin.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" href="css/style.css" />

	<title></title>
</head>
<body>
<nav>
<img id="logo" src="images/banner.png" />
	<ul class="menu">
		<li><a href="index.html">Inicio</a></li>
		<li><a href="venta.php">Venta</a>
		<ul>
			<li><a href="sedan.php">Sedan</a></li>
			<li><a href="camioneta.php">Camioneta</a></li>
			<li><a href="pickup.php">Pick-Up</a></li>
			<li><a href="#">Coupe</a></li>
		</ul>
		</li>
		<li><a href="reparacion.php">Reparación</a>
		<ul>
		<li><a href="#">Sedan</a></li>
		<li><a href="camioneta.php">Camioneta</a></li>
		<li><a href="#">Pick-Up</a></li>
		<li><a href="#">Coupé</a></li>
		</ul>
		</li>
		<li><a href="contactenos.php">Contáctenos</a></li>
		<li><a href="quienes_somos.html">Quienes Somos</a></li>
        <li><a href="index.php">Administrador</a></li>
    </ul>
	<img src="images/banner_repa.png" id="banner_rentar"/>
<section id="cursos">

	<!--****************************************INICIA SEGUNDO CARRO*************************************************** -->
	<a href="auto.php"><article>
   
        
            
<img width="150px" height="100px" src="                                
<?php 
require "config1.php";
$data = mysql_query("select urlProducto from imgproducto where idProducto='001' and idImg='1'");
while($nt=mysql_fetch_array($data)){ $urlProducto=nl2br($nt['urlProducto']);
echo "$nt[urlProducto]";    
}
?>  ">
		<p><?php 
$data = mysql_query("select nameProducto from autoproducto where idProducto='001'");
while($nt=mysql_fetch_array($data)){ $nameProducto=nl2br($nt['nameProducto']);
echo "<p>$nt[nameProducto]</p>";   
}?>  </p>
		
	</article></a>
	
<!--****************************************FINALIZA SEGUNDO CARRO*************************************************** -->
</section>

<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/particulas.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.slides.js"></script>

<script>
	 $(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});

</script>
</body>
<footer>
<div>
	<section id="about">
	    <header>
		<h3>Acerca de Flores Escobar</h3>
		</header>
		<p>
		
Crear un valor agregado a nuestros productos y servicios a través de la plena satisfacción de nuestros clientes, convirtiéndonos de esta manera en una empresa sólida y confiable, teniendo en cuenta lo más importante de nuestra razón de ser: El Cliente.
	
		
		</p>
	</section>
	<section id="blogroll">
	<header>
		<h3>Categorias de Autos</h3>
	</header>
	<ul id="pie">
	<a href="sedan.php">Sedan</a></li>
		<li><a href="camioneta.php">Camioneta</a></li>
		<li><a href="pickup.php">Pick-Up</a></li>
		<li><a href="#">Coupé</a></li>
	</ul>
	</section>
	<section id="popular">
		<header>
			<h3>Acceso Directo</h3>
		</header>
		<ul>
		<li><a href="index.html">Inicio</a></li>
			<li><a href="venta.php">Venta</a></li>
			<li><a href="reparacion.php">Reparación</a></li>
			<li><a href="quienes_somos.html">Quienes Somos?</a></li>
			<li><a href="contactenos.php">Contactenos</a></li>
		</ul>
	</section>
	
</div>
<a href="#"><img id="social"src="images/facebook.png" alt="" /></a>
<p id="copyright">Derechos Reservados © 2015–2016 Flores Escobar S.A de C.V, San Miguel, El Salvador</p>
</footer>
</html>


