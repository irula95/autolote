<?php
if(isset($_POST["pass"]) && isset($_POST["user"])){
$con=mysql_connect("localhost","root","");
$base=mysql_select_db("autolote",$con);
$consulta=mysql_query("select * from usuarios login where user='".$_POST["user"]."' and pass='".$_POST["pass"]."'");
if(mysql_num_rows($consulta)>0)
{
	session_start();
	$_SESSION['user']=$_POST["user"];
	?>
	<script type="text/javascript">
	window.location="menu.php";
	</script>
	<?php

}
else
{
	echo"<center><p>Usuario o Password no valida</p></center>";

}
}
?>