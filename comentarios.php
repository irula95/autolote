<!doctype html>
<html>
    <head>
        <title>Turismo en El Salvador</title>
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Comentarios</h1>
        </header>
        <section>
            <?php 
            $con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("autolote",$con);
                if($sisp):
                    $data = mysql_query("SELECT * FROM comentarios")
                        or die(mysql_error());
                    if(mysql_num_rows($data)):
                        ?>
                            <div id="wrapp">
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Post ID</th>
                                      
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                         <th>Email</th>
                                          <th>Comentario</th>
                                           <th>Estado</th>

                                        <th>Action</th>
                            
    
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        while($d = mysql_fetch_array($data)):
                            echo "<tr>";
                                echo "<td>".$d['post_id']."</td>";
                                echo "<td>".$d['fecha']."</td>";
                                echo "<td>".$d['name']."</td>";
                                 echo "<td>".$d['email']."</td>";
                                  echo "<td>".$d['comentarios']."</td>";
                                   echo "<td>".$d['estado']."</td>";
                                echo "<td><a href='eliminarcomentarios.php?id="
                                .$d['post_id']."' >Eliminar</a></td>";
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

        </nav>
    </body>
</html>