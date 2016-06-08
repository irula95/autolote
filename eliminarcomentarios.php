<!doctype html>
<html>
    <head>
        <title>Turismo en El Salvador</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Eliminar Comentario</h1>
        </header>
        <section>
<?php
if($_GET):
   $con = mysql_connect("localhost", "root", "")
            or die(mysql_error());
    if($con):
        $sisp = mysql_select_db("SistemaTurismo",$con);
        if($sisp):
            $data = mysql_query("DELETE FROM comentarios WHERE post_id=".$_GET['id'])
                or die(mysql_error());
            if($data):
                echo "Registros Eliminados: ".mysql_affected_rows()."<br/>";
                echo "<a href='comentarios.php'>Regresar</a>";
            endif;
        endif;
    endif;
endif;
?>
        </section>
    </body>
</html>