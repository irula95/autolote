<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/forms.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modificar Categoria</h1>
        </header>
        <section>
            
            <?php
            if($_POST):
                $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
                if($con):
                    $db = mysql_select_db("autolote", $con)
                        or die(mysql_error());
            
            if($_GET):
                $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
                if($con):
                    $db = mysql_select_db("autolote", $con)
                        or die(mysql_error());
                    if($db):
                        $res = mysql_query("SELECT * FROM autocategoria WHERE idCategoria='".$_GET['id']."'")
                            or die(mysql_error());
                        if(!mysql_num_rows($res)):
                            echo "<div class='error'>No se encontro categoria de auto</div>";
                        else:
                            $d = mysql_fetch_array($res);
                            ?>
            
                            <form method="post" class="comun">
                                <div>
                                    <div>ID de Categoria</div>
                                    <div><input type="text" name="id" value="<?=$d['idCategoria']?>" required/></div>
                                </div>
                                <div>
                                    <div>Nombre</div>
                                    <div><input type="text" name="name" value="<?=$d['nombreCategoria']?>" required/></div>
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
                        <?php
                        endif;
                    endif;
                endif;
            endif;
            ?>
    </body>
</html>
