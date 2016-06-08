<!doctype html>
<html>
    <head>
        <title>Turismo El Salvador</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/forms.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modificar Comentario</h1>
        </header>
        <section>
            
            <?php
            if($_POST):
                $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
                if($con):
                    $db = mysql_select_db("SistemaTurismo", $con)
                        or die(mysql_error());
                    if($db):
                         $res = mysql_query("UPDATE comentarios SET "
                                 . "post_id = '".$_POST['id']."', "
                                 . "publicado = '".$_POST['publi']."', "
                                 . "fecha = '".$_POST['fech']."', "
                                 . "name = '".$_POST['nombre']."', "
                                 . "email = '".$_POST['correo']."', "
                                 . "comentarios = '".$_POST['coment']."', "
                                 . "email = '".$_POST['correo']."', "
                                 . "estado = '".$_POST['est']."' "
                                 ."WHERE post_id='".$_GET['id']."'")
                            
                            or die(mysql_error());
                         if($res):
                             echo 'Registros actualizados :'.mysql_affected_rows();
                         endif;
                    endif;
                endif;
            endif;
        
            
            if($_GET):
                $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
                if($con):
                    $db = mysql_select_db("SistemaTurismo", $con)
                        or die(mysql_error());
                    if($db):
                        $res = mysql_query("SELECT * FROM comentarios WHERE post_id='".$_GET['id']."'")
                            or die(mysql_error());
                        if(!mysql_num_rows($res)):
                            echo "<div class='error'>No se encontro comentarios</div>";
                        else:
                            $d = mysql_fetch_array($res);
                            ?>
            
                            <form method="post" class="comun">
                                <div>
                                    <div>ID de Comentario</div>
                                    <div><input type="text" name="id" value="<?=$d['post_id']?>" required/></div>
                                </div>
                                <div>
                                    <div>Publicado</div>
                                    <div><input type="text" name="publi" value="<?=$d['publicado']?>" required/></div>
                                </div>
                                 <div>
                                    <div>Fecha en que se publico</div>
                                    <div><input type="text" name="fech" value="<?=$d['fecha']?>" required/></div>
                                </div>
                                 <div>
                                    <div>Nombre del usuario</div>
                                    <div><input type="text" name="nombre" value="<?=$d['name']?>" required/></div>
                                </div>
                                 <div>
                                    <div>Email del usuario</div>
                                    <div><input type="text" name="correo" value="<?=$d['email']?>" required/></div>
                                </div>
                                <div>Comentario</div>
                                    <div><input type="text" name="coment" value="<?=$d['comentarios']?>" required/></div>
                                </div>
                                <div>
                                    <div>Habilitar comentario cambiar a OK</div>
                                    <div><input type="text" name="est" value="<?=$d['estado']?>" required/></div>
                                </div>
                              
                                <div>
                                    <input type="reset" class="buttons" value="Limpiar"/>
                                    <input type="submit" class="buttons" value="Enviar"/>
                                </div>
                                 
                            </form>
                        </section>
                        <nav id="system">
                            <a href="comentarios.php"><img src="images/arrow.png" alt="Atras" title="Atras"></a>
                        </nav>
                        <?php
                        endif;
                    endif;
                endif;
            endif;
            ?>
    </body>
</html>
