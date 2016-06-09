<!doctype html>
<html>
    <head>
        <title>Flores Escobar</title>
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Usuarios</h1>
        </header>
        <section>
            <?php 
            $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("autolote",$con);
                if($sisp):
                    $data = mysql_query("SELECT * FROM usuarios")
                        or die(mysql_error());
                    if(mysql_num_rows($data)):
                        ?>
                            <div id="wrapp">
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th>Usuario</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        while($d = mysql_fetch_array($data)):
                            echo "<tr>";
                                echo "<td>".$d['id']."</td>";
                                echo "<td>".$d['user']."</td>";
                                echo "<td>".$d['pass']."</td>";
                                echo "<td><a href='modificarusuarios.php?id="
                                .$d['user']."' >Modificar</a></td>";
                                echo "<td><a href='eliminarusuarios.php?id="
                                .$d['id']."' >Eliminar</a></td>";
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
            <a href="nuevousuario.php">
                <img src="images/adduser.png" alt="Nuevo" title="Nuevo">
            </a>
        </nav>
    </body>
</html>