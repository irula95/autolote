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
            <h1>Agregar nueva foto</h1>
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
                       $res = mysql_query("INSERT INTO imgproducto "
                            . "VALUES("
                                . "'".$_POST['idImg']."', "
                                . "'".$_POST['idProducto']."', "
                                . "'".$_POST['urlProducto']."', "
                                . "'".$_POST['descripcionImg']."' "
                            . ")")
                            or die(mysql_error());
                        if($res):
                            echo "<div class='accept'>Datos Guardados Exitosamente</div>";
                        endif;
                    endif;
                endif;
            endif;
            ?>
            
            <form method="post" class="comun" action="nuevafoto.php">
                 <div>
                     <option value= "<?php 
                        $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("autoproducto",$con);
                if($sisp):
                    $data = mysql_query("SELECT idProducto, nameProducto FROM autoProducto")
                        or die(mysql_error());
                    if(mysql_num_rows($data)){
                     echo "<select>";
                        while($row = $data->fetch_assoc()){
                            echo "<option value='".$row["id"]."'>".$row["nameProducto"]."</option>";
                        }
                     echo "</select>";
                    }
                                     ?>"></option>
                     
          <!--          <div>ID de imagen</div>
                    <div><input type="text" name="idImg" required  /></div>
                   -->
                </div> 
                <div>
                    <div>ID de Producto</div>
                    <div><input type="text" name="idProducto"  required /></div>
                   
                </div>
                       <div>
                    <div>url de imagen</div>
                    <div><input type="text" name="urlProducto"  required /></div>
                   
                </div>
                <div>
                    <div>Descripcion de imagen</div>
                    <div><input type="text" name="descripcionImg"  required /></div>
                   
                </div>
                <div>
                    <input type="reset" class="buttons" value="Limpiar"/>
                    <input type="submit" class="buttons" value="Enviar"/>
                </div>
            </form>
        </section>
        <nav id="system">
            <a href="fotos.php"><img src="images/arrow.png" alt="Atras" title="Atras"></a>
        </nav>
    </body>
</html>