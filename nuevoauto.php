<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/forms.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Agregar nuevo automovil</h1>
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
                       $res = mysql_query("INSERT INTO autoproducto "
                            . "VALUES("
                                . "'".$_POST['id']."', "
                                . "'".$_POST['marca']."', "
                                . "'".$_POST['categoria']."', "
                                . "'".$_POST['name']."', "
                                . "'".$_POST['precio']."', "
                                . "'".$_POST['ano']."', "
                                . "'".$_POST['estado']."', "
                                . "'".$_POST['descripcion']."', "
                                . "'".$_POST['kmProducto']."', "
                                . "'".$_POST['transmision']."', "
                                . "'".$_POST['traccion']."', "
                                . "'".$_POST['capacidad']."', "
                                . "'".$_POST['puertas']."', "
                                . "'".$_POST['gas']."' "
                            . ")")
                            or die(mysql_error());
                        if($res):
                            echo "<div class='accept'>Datos Guardados Exitosamente</div>";
                        endif;
                    endif;
                endif;
            endif;
            ?>
            
            <form method="post" class="comun" action="nuevoauto.php">
                 <div>
                    <div>ID Producto</div>
                    <div><input type="text" name="id" required  /></div>
                   
                </div>
                <div>
                    <div>ID de marca</div>
                    <div><input type="text" name="marca"  required /></div>
                   
                </div>
                       <div>
                    <div>ID de Categoria</div>
                    <div><input type="text" name="categoria"  required /></div>
                   
                </div>
                       <div>
                    <div>Nombre de Auto</div>
                    <div><input type="text" name="name"  required /></div>
                   
                </div>
                       <div>
                    <div>Precio de Auto</div>
                    <div><input type="text" name="precio"  required /></div>
                   
                </div>
                       <div>
                    <div>Año de auto</div>
                    <div><input type="text" name="ano"  required /></div>
                   
                </div>
                    
                     <div>
                    <div>Estado del auto (venta, reparacion, aduanas)</div>
                    <div><input type="text" name="estado"  required /></div>
                   
                </div>
                
                     <div>
                    <div>Descripcion</div>
                    <div><input type="text" name="descripcion"  required /></div>
                   
                </div>
                
                     <div>
                    <div>Kilometraje del auto</div>
                    <div><input type="text" name="kmProducto"  required /></div>
                   
                </div>
                
                   <div>
                    <div>Tipo de transmision</div>
                    <div><input type="text" name="transmision"  required /></div>
                   
                </div>
             
                   <div>
                    <div>Traccion del auto</div>
                    <div><input type="text" name="traccion"  required /></div>
                   
                </div>
             
                   <div>
                    <div>Capacidad del auto(# de personas)</div>
                    <div><input type="text" name="capacidad"  required /></div>
                   
                </div>
                
                     <div>
                    <div>Puertas del auto</div>
                    <div><input type="text" name="puertas"  required /></div>
                   
                </div>
                
                     <div>
                    <div>Tipo de combustible</div>
                    <div><input type="text" name="gas"  required /></div>
                   
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
    </body>
</html>
