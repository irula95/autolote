<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Eliminar Automoviles</h1>
        </header>
        <section>
<?php
if($_GET):
   $con = mysql_connect("localhost", "root", "")
            or die(mysql_error());
    if($con):
        $sisp = mysql_select_db("autolote",$con);
        if($sisp):
            $data = mysql_query("DELETE FROM autoproducto WHERE idProducto=".$_GET['id'])
                or die(mysql_error());
            if($data):
                echo "Registros Eliminados: ".mysql_affected_rows()."<br/>";
                echo "<a href='automoviles.php'>Regresar</a>";
            endif;
        endif;
    endif;
endif;
?>
        </section>
    </body>
</html>