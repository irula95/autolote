<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
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
                    if($db):
                         $res = mysql_query("UPDATE autoproducto SET "
                                 . "idProducto = '".$_POST['id']."', "
                                 . "idMarca = '".$_POST['marca']."', "
                                 . "idCategoria = '".$_POST['categoria']."', "
                                 . "nameProducto = '".$_POST['name']."', "
                                 . "precioProducto = '".$_POST['precio']."', "  
                                 . "anoProducto = '".$_POST['ano']."', "   
                                 . "estadoProducto = '".$_POST['estado']."', "
                                 . "descripcionProducto = '".$_POST['descripcion']."', "   
                                 . "kmProducto = '".$_POST['kmProducto']."', "
                                 . "transmisionProducto = '".$_POST['transmision']."', "  
                                 . "traccionProducto = '".$_POST['traccion']."', "   
                                 . "capacidadProducto = '".$_POST['capacidad']."', "
                                 . "puertasProducto = '".$_POST['puertas']."', "   
                                 . "gasProducto = '".$_POST['gas']."' "   
                                 ."WHERE idProducto='".$_GET['id']."'")
                            
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
                    $db = mysql_select_db("autolote", $con)
                        or die(mysql_error());
                    if($db):
                        $res = mysql_query("SELECT * FROM autoproducto WHERE idProducto='".$_GET['id']."'")
                            or die(mysql_error());
                        if(!mysql_num_rows($res)):
                            echo "<div class='error'>No se encontro auto</div>";
                        else:
                            $d = mysql_fetch_array($res);
                            ?>
            
                            <form method="post" class="comun">
                                <div>
                                    <div>ID de Producto</div>
                                    <div><input type="text" name="id" value="<?=$d['idProducto']?>" required/></div>
                                </div>
                                <div>
                                    <div>ID de marca</div>
                                    <div><input type="text" name="marca" value="<?=$d['idMarca']?>" required/></div>
                                    <div>
                                    <div>ID de Categoria</div>
                                    <div><input type="text" name="categoria" value="<?=$d['idCategoria']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Nombre</div>
                                    <div><input type="text" name="name" value="<?=$d['nameProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Precio</div>
                                    <div><input type="text" name="precio" value="<?=$d['precioProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Año</div>
                                    <div><input type="text" name="ano" value="<?=$d['anoProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Estado</div>
                                    <div><input type="text" name="estado" value="<?=$d['estadoProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Descripcion</div>
                                    <div><input type="text" name="descripcion" value="<?=$d['descripcionProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Kilometraje</div>
                                    <div><input type="text" name="kmProducto" value="<?=$d['kmProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Transmision</div>
                                    <div><input type="text" name="transmision" value="<?=$d['transmisionProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Traccion</div>
                                    <div><input type="text" name="traccion" value="<?=$d['traccionProducto']?>" required/></div>
                                </div>
                                    
                                     <div>
                                    <div>Capacidad</div>
                                    <div><input type="text" name="capacidad" value="<?=$d['capacidadProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Puertas</div>
                                    <div><input type="text" name="puertas" value="<?=$d['puertasProducto']?>" required/></div>
                                </div>
                                    
                                    <div>
                                    <div>Tipo de combustible</div>
                                    <div><input type="text" name="gas" value="<?=$d['gasProducto']?>" required/></div>
                                </div>
                                    
                                </div>
                              
                                <div>
                                    <input type="reset" class="buttons" value="Limpiar"/>
                                    <input type="submit" class="buttons" value="Enviar"/>
                                </div>
                                 
                            </form>
                        </section>
                        <nav id="system">
                            <a href="automoviles.php"><img src="images/arrow.png" alt="Atras" title="Atras"></a>
                        </nav>
                        <?php
                        endif;
                    endif;
                endif;
            endif;
            ?>
    </body>
</html>
