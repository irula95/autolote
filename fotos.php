<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Fotos de autos</h1>
        </header>
        <section>
            <?php 
            $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("autolote",$con);
                if($sisp):
                    $data = mysql_query("SELECT * FROM imgproducto")
                        or die(mysql_error());
                    if(mysql_num_rows($data)):
                        ?>
                            <div id="wrapp">
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                         <th scope="col">Imagen</th>
                                        <th>ID</th>
                                        <th>ID de Producto</th>
                                        <th>url de imagen</th>
                                         <th>Descripcion</th>
                                         <th>Action</th>
                                         <th>Action</th>
                            
    
                                    </tr>
                                </thead>
                                <tbody>
                       
                        <?php
                        while($d = mysql_fetch_array($data)):
                            echo "<tr>";
                                echo "<td><img height='100px'src =".$d['urlProducto']."></img></td>";
                                echo "<td>".$d['idImg']."</td>";
                                echo "<td>".$d['idProducto']."</td>";
                                echo "<td>".$d['urlProducto']."</td>";
                                echo "<td>".$d['descripcionImg']."</td>";
                                echo "<td><a href='modificarauto.php?id="
                                .$d['idProducto']."' >Modificar</a></td>";
                                echo "<td><a href='eliminarfoto.php?id="
                                .$d['idImg']."' >Eliminar</a></td>";
                            echo "</tr>";
                        endwhile;
                        echo "</tbody>";
                    echo "</table></div>";
                    endif;
                endif;
            endif;
            ?>
        </section>
        <nav id="system">
            <a href="menu.php">
                <img src="images/arrow.png" alt="Atras" title="Atras">
            </a>
            <a href="nuevafoto.php">
                <img src="images/new.png" alt="Nuevo" title="Nuevo">
            </a>

        </nav>
    </body>
</html>