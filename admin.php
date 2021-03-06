<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Directorio MAN</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="nuevousuario.php"><i class="material-icons left">add</i>Agregar nuevo usuario</a></li>
        <li><a href="close.php">Cerrar sesion</a></li>
        
      </ul>
    </div>
  </nav>
<?php
        require("connection.php");

		
        

        $sql="SELECT * FROM usuario ORDER BY Nombre ";
			  
        $resultado = mysqli_query($link,$sql) or die(mysql_error());
        ?>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="row">
      <div class="col s12">
          <h3 class="black-text , center-align">Bienvenido al directorio de MAN</h3>
        <div class="#ffffff white">
            
          <p class="black-text ">Bienvenido (poner nombre del usuario) este es un directorio digital</p>
            
            <table class="responsive-table bordered">
        <thead>
          <tr class="black-text">
              
              <th data-field="id">Nombre</th>
              <th data-field="name">Area</th>
              <th data-field="phone">Telefono</th>
              <th data-field="cel">Extencion</th>
              <th data-field="mail">Celular</th>
              <th data-field="mail">Email</th>
              <th data-field="mail">Editar</th>
              <th data-field="mail">Eliminar</th>
          </tr>
        </thead>

        <tbody class="black-text">
            <?php
			while($row = mysqli_fetch_array($resultado)):
			
		?>
          <tr >
            <td ><?php  echo $row['Nombre']; ?></td>
            <td><?php  echo $row['area']; ?></td>
            <td><?php  echo $row['telefono']; ?></td>
            <td><?php  echo $row['extencion']; ?></td>
            <td><?php  echo $row['celular']; ?></td>
            <td><?php  echo $row['Correo']; ?></td>
            <td><?php  echo "<a href=actualizar.php?id={$row['id_Usuario']}><i class='material-icons'>mode_edit</i></a>";?></td>
            <td><?php  echo "<a href=beforedelete.php?id={$row['id_Usuario']}><i class='material-icons'>delete</i></a>";?></td>
            
            
          </tr>
          <?php
				endwhile;
            ?>
        </tbody>
      </table>
            
          </div>

      </div>
    </div>
    <div class="parallax"><img src="img/realback.jpg" alt="Unsplashed background img 1"></div>
        </div>
  </div>
    
 </body>

  <footer class="page-footer teal">
    <div >
      <div class="row">
        <div class="col l4 s6">
          <h5 class="white-text">MAN Truck & Bus</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
       
        <div class="col l6 s12">
          <h5 class="white-text">Otros sitios</h5>
          <ul>
            <li><a class="white-text" href="http://192.168.2.90/tickets/" target="_blank">Sistema Tickets</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

 
</html>
