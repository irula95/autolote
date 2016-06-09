<!DOCTYPE html>
<html>
<head>
    <title>Flores Escobar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<link rel="stylesheet" text="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/prin.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
<link rel="stylesheet" type="text/css" href="estilocomentarios.css"  />
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
</head>
<body>
<header id="mainHeader">
    <nav>
        <div id="menuWrapper">
            <ul class="menu" id="menu">
                <!--<a href="#" class="nav-mobile" id="nav-mobile"></a>-->
                <li><a href="index.html">Inicio</a></li>
                <li><a href="venta.php">Venta</a>
                    <ul class="submenu">
                        <li><a href="sedan.php">Sedan</a></li>
                        <li><a href="camioneta.php">Camioneta</a></li>
                        <li><a href="pickup.php">Pick-Up</a></li>
                        <li><a href="#">Coupe</a></li>
                    </ul>
                </li>
                <li><a href="reparacion.php">Reparación</a>
                    <ul class="submenu">
                        <li><a href="#">Sedan</a></li>
                        <li><a href="#">Camioneta</a></li>
                        <li><a href="#">Pick-Up</a></li>
                        <li><a href="#">Coupé</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contactenos.php">Contáctenos</a>
                </li>
                <li>
                    <a href="quienes_somos.html">Quiénes Somos</a>
                </li>
                <li>
                    <a href="index.php">Administrador</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div id="container"> 
    <div class="main">
 	<div class="slides">
     
   <!--****************EL ARCHIVO config1.php HACE LA CONEXION CON LA BD*******************-->
 <img src="
<?php 
require "config1.php"; 

$data = mysql_query("select urlProducto from imgproducto where idProducto='004' and idImg='8'");
while($nt=mysql_fetch_array($data)){ $urlProducto=nl2br($nt['urlProducto']);
echo "$nt[urlProducto]";   
}
?>  "><!--****************MUESTRA LA PRIMERA IMAGEN DEL AUTO*******************-->
      <!--****************MUESTRA LA SEGUNDA IMAGEN DEL AUTO*******************-->
        <img src="
<?php 


$data = mysql_query("select urlProducto from imgproducto where idProducto='004' and idImg='9'");
while($nt=mysql_fetch_array($data)){ $urlProducto=nl2br($nt['urlProducto']);
echo "$nt[urlProducto]";    
}
?>  ">   
<img src="
<?php 


$data = mysql_query("select urlProducto from imgproducto where idProducto='004' and idImg='10'");
while($nt=mysql_fetch_array($data)){ $urlProducto=nl2br($nt['urlProducto']);
echo "$nt[urlProducto]";    
}
?>  ">           
     </div>

</div>

        
<div id="info">
    
<!--****************EL ARCHIVO config1.php HACE LA CONEXION CON LA BD*******************-->
<?php 

$data = mysql_query("select precioProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $precioProducto=nl2br($nt['precioProducto']);
echo "<h1 id='precio'>$nt[precioProducto]</h1>";    
}
?>  <!--****************MUESTRA EL PRECIO DE LOS AUTOS*******************-->

  
<?php 
$data = mysql_query("select nameProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $nameProducto=nl2br($nt['nameProducto']);
echo "<h3>$nt[nameProducto]</h3>";    
}?>  <!--****************MUESTRA EL NOMBRE DE LOS AUTOS*******************-->
<p id="info_titulo">Año</p>
    
<?php 
$data = mysql_query("select anoProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $anoProducto=nl2br($nt['anoProducto']);
echo "<p='info_detalles'>$nt[anoProducto]</p>";    
}?><!--****************MUESTRA EL AÑO DE LOS AUTOS*******************-->
    
<p id="info_titulo">Kilometros</p>
    
    
    <?php 
$data = mysql_query("select kmProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $kmProducto=nl2br($nt['kmProducto']);
echo "<p='info_detalles'>$nt[kmProducto]</p>";    
}?><!--****************MUESTRA EL KM DE LOS AUTOS*******************-->

<p id="info_titulo">Transmision</p>
    
    <?php 
$data = mysql_query("select transmisionProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $transmisionProducto=nl2br($nt['transmisionProducto']);
echo "<p='info_detalles'>$nt[transmisionProducto]</p>";    
}?><!--****************MUESTRA LA TRANSMISION DE LOS AUTOS*******************-->
    
<p id="info_titulo">Tipo de Combustible</p>

       <?php 
$data = mysql_query("select gasProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $gasProducto=nl2br($nt['gasProducto']);
echo "<p='info_detalles'>$nt[gasProducto]</p>";    
}?><!--****************MUESTRA EL COMBUSTIBLE DE LOS AUTOS*******************-->
    

<p id="info_titulo">Tracción</p>
    
          <?php 
$data = mysql_query("select traccionProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $traccionProducto=nl2br($nt['traccionProducto']);
echo "<p='info_detalles'>$nt[traccionProducto]</p>";    
}?><!--****************MUESTRA EL TIPO DE TRACCION DE LOS AUTOS*******************-->
    
<p id="info_titulo">Capacidad</p>
    
     <?php 
$data = mysql_query("select capacidadProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $capacidadProducto=nl2br($nt['capacidadProducto']);
echo "<p='info_detalles'>$nt[capacidadProducto]</p>";    
}?><!--****************MUESTRA LA CAPACIDAD DE LOS AUTOS*******************-->
    
<p id="info_titulo">Puertas</p>
       <?php 
$data = mysql_query("select puertasProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $puertasProducto=nl2br($nt['puertasProducto']);
echo "<p='info_detalles'>$nt[puertasProducto]</p>";    
}?><!--****************MUESTRA LAS PUERTAS DE LOS AUTOS*******************-->
    
       <?php 
$data = mysql_query("select descripcionProducto from autoproducto where idProducto='004'");
while($nt=mysql_fetch_array($data)){ $descripcionProducto=nl2br($nt['descripcionProducto']);
echo "<p='info_titulo'>$nt[descripcionProducto]</p>";    
}?><!--****************MUESTRA LA DESCRIPCION DE LOS AUTOS*******************-->
    
 </p>
    </div>
</div>

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
      interval: 5000,
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
		<li id="pie"><a href="sedan.php">Sedan</a></li>
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
    