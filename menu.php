<?php
session_start();
echo $_SESSION['user'];
?>
<!doctype html>
<html>

	<head>
		<a href="index.html"> <img  src="images/logout.png" alt="" title="" border="0"  width="32" height="32" align="right" /></a>
	</head>
	<body background="images/bg2.jpg">
    <header><h1>Bienvenido al Sistema</h1></header>
                <form action="index.html" method="post">
			<!--<input type="submit" value="Cerrar Session" />-->


            
		</form>

        </body>
<html>
    <head>
        <title>Administrador</title>
        <link href="css/menu.css" rel="stylesheet" media="screen" />
    </head>
    <body>
       
            <h1>Administracion de Base de datos</h1>
        <nav>
            <ul>
            <li>
                    <a href="usuarios.php">
                        <img src="images/user.png" alt="Usuarios" title="Usuarios"/>
                    </a>
                    <div>Usuarios</div>
                </li>
                <li>
                    <a href="categoria.php">
                        <img src="images/category.png" alt="Categorias" title="Categorias"/>
                    </a>
                    <div>Tipos de autos</div>
                </li>
                <li>
                    <a href="automoviles.php">
                        <img src="images/car.png" alt="automoviles" title="sitios"/>
                    </a>
                    <div>Automoviles</div>
                </li>
         
                <li>
                    <a href="comentarios.php">
                        <img src="images/comentarios.png" alt="Comentarios" title="Comentarios"/>
                    </a>
                    <div>Comentarios</div>
                </li>
                <li>
                    <a href="fotos.php">
                        <img src="images/photo.png" alt="Comentarios" title="Comentarios"/>
                    </a>
                    <div>Fotos de autos</div>
                </li>
          
          
            </ul>
        </nav>
        <section>
        <?php
        $con = mysql_connect("localhost", "root", "") or die(mysql_error());
        if($con):
            if(!mysql_select_db("autolote", $con)):
            ?>
                <a href="sql/schema.php">Crear Base de Datos</a>
            <?php
            endif;
        endif;
        ?>
        </section>
    </body>
</html>
</html>