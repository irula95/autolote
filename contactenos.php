<!DOCTYPE html>
<html>
<head>
    <title>Flores Escobar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<link rel="stylesheet" type="text/css" href="css/prin.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="estilocomentarios.css"  />
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
</head>
<body>
    <header>
<nav>
<img id="logo" src="images/banner.png" />
	<ul class="menu" id="menu">

	<a href="#" class="nav-mobile" id="nav-mobile"> </a>
	
		<li><a href="index.html">Inicio</a></li>
		
		<li><a href="venta.html">Venta</a>
		<ul>
			<li><a href="#">Sedan</a></li>
			<li><a href="#">Camioneta</a></li>
			<li><a href="#">Pick-Up</a></li>
			<li><a href="#">Coupe</a></li>
		</ul>
		</li>
		<li><a href="#">Reparación</a>
		<ul>
		<li><a href="#">Sedan</a></li>
		<li><a href="#">Camioneta</a></li>
		<li><a href="#">Pick-Up</a></li>
		<li><a href="#">Coupé</a></li>
		</ul>
		</li>
		<li><a href="#">En Aduana</a>
		<ul>
			
		   <li><a href="#">Sedan</a></li>
		   <li><a href="#">Camioneta</a></li>
		   <li><a href="#">Pick-Up</a></li>
		   <li><a href="#">Coupe</a></li>

	</ul>
	</li>
		<li><a href="#">Contáctenos</a></li>
		<li><a href="quienes_somos.html">Quienes Somos</a></li>
    </ul>
  
   
</nav>
 </header>
<br>
    <div id="content">
<!-- <H1>CONTACTENOS</H1>	
NUMEROS DE TELEFONO

DIRECCION
CONTACTENOS VIA WEB

FORMULARIO 

BOTONES -->

        <?php
$actualiza="<META HTTP-EQUIV='Refresh' CONTENT='1; URL=contactenos.php'>";//actualizamos la pagina
$q=mysql_query("select name, comentarios,fecha from comentarios where  estado='OK' order by fecha ASC ");
while($nt=mysql_fetch_array($q)){ $comentarios=nl2br($nt['comentarios']);
echo "<li>";
echo "<div>";

echo "<h3> ".date("d-M-y",strtotime($nt['fecha']))."</h3>";
echo "<h2><strong>$nt[name]</strong></h2>";                         
echo "</div>";
echo "<h2>$comentarios</h2>";
}
echo"</li>";

?>
<?php
$publicado="Publicado";
require "config.php";
?>
<?php
@$todo=$_POST['todo'];
if(isset($todo) and $todo=="post_comment"){

$name=$_POST['name'];
$name=mysql_real_escape_string($name);
$email=$_POST['email'];
$email=mysql_real_escape_string($email);
$comentarios=$_POST['comentarios'];
$comentarios=mysql_real_escape_string($comentarios);
$estado = "OK";
$msg="";

if( strlen($name) <3 or strlen($name) > 25){
$msg=$msg."Su nombre debe tener más de 3 caracteres y menos de 25. <BR>";
$estado= "NOTOK";}                  

if( strlen($comentarios) <3 ){
$msg=$msg."Su comentario debe tener más de 3 caracteres por lo menos.<BR>";
$estado= "NOTOK";}  
//****************************
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email)){
$msg=$msg."Su email, no es correcto.<BR>";
$estado= "NOTOK";}          
//****************************


if($estado<>"OK"){ 
echo "$msg";
}else{
$fecha=date("Y-m-d"); 
$estado='NO'; //Validar comentarios
$query=mysql_query("insert into comentarios(publicado,fecha,name,email,comentarios,estado) values('$publicado','$fecha','$name','$email','$comentarios','$estado')");
echo mysql_error();
echo "Gracias por contactarnos le responderemos pronto. <br>".$actualiza;
}
}

?>
<div class="CASILLAS">
<?php
echo "<form method=post action=''><input type=hidden name=todo value=post_comment><span class='EstiloROJO'>* </span>
Nombre:  <br /><input name=name type=text class='fondocasillausuario' size='42'>
<br />
<input type=hidden name=id />
<span class='EstiloROJO'>* </span>E-mail 
(No saldrá publicado):  <br /><input name=email type=text class='fondocasillausuario' size='42'>
<br />
<span class='EstiloROJO'>* </span>Comentarios:  <br />
<textarea name=comentarios cols=40 rows=3 class='fondocasillausuario'></textarea><br /><br />
<input type='reset' class='BOTONcomentarioborrar' value='    Borrar    '>
  <input type=submit class='BOTONcomentarioenviar' value='   Publicar   '>
</form>";
?>
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
<script src="js/jquery.js"></script>
<script>

	$(function() {
	var btn_movil = $('#nav-mobile'),
		menu = $('#menu').find('ul');
		
	btn_movil.on('click', function (e) {
		e.preventDefault();
		
		var el = $(this);
		
		el.toggleClass('nav-active');
		menu.toggleClass('open-menu');
		})
	});
</script>

    
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
		<li id="pie"><a href="#">Sedan</a></li>
		<li><a href="#">Camioneta</a></li>
		<li><a href="#">Pick-Up</a></li>
		<li><a href="#">Coupé</a></li>
	</ul>
	</section>
	<section id="popular">
		<header>
			<h3>Acceso Directo</h3>
		</header>
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="venta.html">Venta</a></li>
			<li><a href="reparacion.html">Reparación</a></li>
			<li><a href="quienes_somos.html">Quienes Somos?</a></li>
			<li><a href="#">Contactenos</a></li>
		</ul>
	</section>
	
</div>
<a href="#"><img id="social"src="images/facebook.png" alt="" /></a>

<p id="copyright">Derechos Reservados © 2015–2016 Flores Escobar S.A de C.V, San Miguel, El Salvador</p>
</footer>
    
</html>