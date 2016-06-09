<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Automoviles</h1>
        </header>
        <section>
            <?php 
            $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("autolote",$con);
                if($sisp):
                    $data = mysql_query("SELECT * FROM autoproducto")
                        or die(mysql_error());
                    if(mysql_num_rows($data)):
                        ?>
                            <div id="wrapp">
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th>ID Marca</th>
                                        <th>ID Categoria</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Año</th>
                                        <th>Estado</th>
                                        <th>Descripción</th>
                                        <th>Kilometros</th>
                                        <th>Transmision</th>
                                        <th>Traccion</th>
                                        <th>Capacidad</th>
                                        <th>Puertas</th>
                                        <th>Combustible</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        while($d = mysql_fetch_array($data)):
                            echo "<tr>";
                                echo "<td>".$d['idProducto']."</td>";
                                echo "<td>".$d['idMarca']."</td>";
                                echo "<td>".$d['idCategoria']."</td>";
                                echo "<td>".$d['nameProducto']."</td>";
                                echo "<td>".$d['precioProducto']."</td>";
                                echo "<td>".$d['anoProducto']."</td>";
                                echo "<td>".$d['estadoProducto']."</td>";
                                echo "<td>".$d['descripcionProducto']."</td>";
                                echo "<td>".$d['kmProducto']."</td>";
                                echo "<td>".$d['transmisionProducto']."</td>";
                                echo "<td>".$d['traccionProducto']."</td>";
                                echo "<td>".$d['capacidadProducto']."</td>";
                                echo "<td>".$d['puertasProducto']."</td>";
                                echo "<td>".$d['gasProducto']."</td>";
                                echo "<td><a href='modificarauto.php?id="
                                .$d['idProducto']."' >Modificar</a></td>";
                                echo "<td><a href='eliminarauto.php?id="
                                .$d['idProducto']."' >Eliminar</a></td>";
                            echo "</tr>";
                        endwhile;
                        echo "</tbody>";
                    echo "</table></div>";
                    endif;
                endif;
            endif;
            ?>
        </section>
        <nav user="system">
            <a href="menu.php">
                <img src="images/arrow.png" alt="Atras" title="Atras">
            </a>
            <a href="nuevoauto.php">
                <img src="images/new.png" alt="Nuevo" title="Nuevo">
            </a>
        </nav>
    </body>
</html>