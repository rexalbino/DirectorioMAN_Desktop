<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location:login.php");
}
?>
echo"<!DOCTYPE html>";
echo"<html lang="en">";
echo"<head>";
echo"  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>";
echo"  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>";
echo"  <title>Directorio MAN</title>";
echo"  <!-- CSS  -->";
echo"    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >";
echo"  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">";
echo"  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>";
echo"  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>";
echo"</head>";
echo"<body>";
echo"  <nav class="white" role="navigation">";
echo"    <div class="nav-wrapper container">";
echo"      <a id="logo-container" href="#" class="brand-logo">Logo</a>";
echo"      <ul class="right hide-on-med-and-down">";
echo"          <li><a href="admin.php"><i class="material-icons left">perm_identity</i>Menu admin</a></li>";
echo"        <li><a href="nuevousuario.php"><i class="material-icons left">add</i>Agregar nuevo usuario</a></li>";
echo"        <li><a href="close.php">Cerrar sesion</a></li>";
echo"      </ul>";
echo"    </div>";
echo"  </nav>";
<?php
        require("connection.php");
            $name=$_POST['search'];
        $sql="SELECT * FROM usuario WHERE usuario.Nombre LIKE '%$name%'";
        $resultado = mysqli_query($link,$sql) or die(mysql_error());
        //$row2 = mysqli_fetch_array($resultado);
        ?>
echo"  <div id="index-banner" class="parallax-container">";
echo"    <div class="section no-pad-bot">";
echo"        <div class="row">";
echo"      <div class="col s12">";
echo"          <h3 class="black-text , center-align">Bienvenido al directorio de MAN</h3>";
echo"        <div class="#ffffff white">";
echo"            <table class="responsive-table bordered">";
echo"        <thead>";
echo"          <tr class="black-text">";
echo"              ";
echo"              <th data-field="id">Nombre</th>";
echo"              <th data-field="name">Area</th>";
echo"              <th data-field="phone">Telefono</th>";
echo"              <th data-field="cel">Extencion</th>";
echo"              <th data-field="mail">Celular</th>";
echo"              <th data-field="mail">Email</th>";
echo"          </tr>";
echo"        </thead>";
echo"        <tbody class="black-text">";
            <?php
            while($row2 = mysqli_fetch_array($resultado)):
            ?>
echo"          <tr >";
echo"            <td ><?php  echo $row2['Nombre']; ?></td>";
echo"            <td><?php  echo $row2['area']; ?></td>";
echo"            <td><?php  echo $row2['telefono']; ?></td>";
echo"            <td><?php  echo $row2['extencion']; ?></td>";
echo"            <td><?php  echo $row2['celular']; ?></td>";
echo"            <td><?php  echo $row2['Correo']; ?></td>";
echo"          </tr>
                <?php
                endwhile;
                ?>
echo"        </tbody>";
echo"      </table>";
echo"          </div>";
echo"      </div>";
echo"    </div>";
echo"    <div class="parallax"><img src="img/realback.jpg" alt="Unsplashed background img 1"></div>";
echo"        </div>";
echo"  </div>";
echo" </body>";
echo"  <footer class="page-footer teal">";
echo"    <div >";
echo"      <div class="row">";
echo"        <div class="col l6 s12">";
echo"          <h5 class="white-text">MAN Truck & Bus</h5>";
echo"          <p class="grey-text text-lighten-4">Bienvenidos a el directorio de MAN que está diseñado para hacer más fácil e buscar gente y";
echo"            por el cual estamos muy contentos esperamos que les agrade tanto como a nosotros";
echo"            cualquier comentario referente a este hablar con el equipo de IT</p>";
echo"            <p class="grey-text text-lighten-4">Ver 0.3 beta</p>";
echo"        </div>";
echo"        <div class="col l6 s12">";
echo"          <h5 class="white-text">Otros sitios</h5>";
echo"          <ul>";
echo"            <li><a class="white-text" href="http://192.168.2.90/tickets/" target="_blank">Sistema Tickets</a></li>";
echo"          </ul>";
echo"        </div>";
echo"      </div>";
echo"    </div>";
echo"      </footer>";
echo"  <!--  Scripts-->";
echo"  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>";
echo"  <script src="js/materialize.js"></script>";
echo"  <script src="js/init.js"></script> ";
echo"</html>";