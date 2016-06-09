<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/forms.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Agregar nueva categoria</h1>
        </header>
        <section>
            <?php 
            if($_POST):
                $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
                if($con):
                    $db = mysql_select_db("autolote", $con)
                        or die(mysql_error());
                    if($db):
                        $res = mysql_query("INSERT INTO autocategoria "
                            . "VALUES("
                                . "'".$_POST['id']."', "
                                . "'".$_POST['name']."' "
                            . ")")
                            or die(mysql_error());
                        if($res):
                            echo "<div class='accept'>Datos Guardados Exitosamente</div>";
                        endif;
                    endif;
                endif;
            endif;
            ?>
            
            <form method="post" class="comun" action="nuevacategoria.php">
                <div>
                    <div>ID Categoria</div>
                    <div><input type="text" name="id" required  /></div>
                   
                </div>
                <div>
                    <div>Nombre de Categoria</div>
                    <div><input type="text" name="name"  required /></div>
                   
                </div>
             
                <div>
                    <input type="reset" class="buttons" value="Limpiar"/>
                    <input type="submit" class="buttons" value="Enviar"/>
                </div>
            </form>
        </section>
        <nav id="system">
            <a href="categoria.php"><img src="images/arrow.png" alt="Atras" title="Atras"></a>
        </nav>
    </body>
</html>
