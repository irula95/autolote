<!doctype html>
<html>
    <head>
        <title>Turismo en El Salvador</title>
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Categorias</h1>
        </header>
        <section>
            <?php 
            $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("autolote",$con);
                if($sisp):
                    $data = mysql_query("SELECT * FROM autocategoria")
                        or die(mysql_error());
                    if(mysql_num_rows($data)):
                        ?>
                            <div id="wrapp">
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Categoria</th>
                                        <th>Nombre</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        while($d = mysql_fetch_array($data)):
                            echo "<tr>";
                                echo "<td>".$d['idCategoria']."</td>";
                                echo "<td>".$d['nombreCategoria']."</td>";
                                echo "<td><a href='modificarcategoria.php?id="
                                .$d['idCategoria']."' >Modificar</a></td>";
                                echo "<td><a href='eliminarcategoria.php?id="
                                .$d['idCategoria']."' >Eliminar</a></td>";
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
            <a href="nuevacategoria.php">
                <img src="images/new.png" alt="Nuevo" title="Nuevo">
            </a>
        </nav>
    </body>
</html>