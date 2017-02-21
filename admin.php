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
    <link rel="shortcut icon" href="img/man.ico" type="image/x-icon" >
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img height="63 px;" src="img/manvector.png"/> </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="nuevousuario.php"><i class="material-icons left">add</i>Agregar nuevo usuario</a></li>
        <li><a href="close.php">Cerrar sesion</a></li>
        
      </ul>
    </div>
  </nav>
      <nav>
    <div class="nav-wrapper">
      <form action="showsearchadmin.php" method="post">
        <div class="input-field">
          <input id="search" name="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
<?php
        require("connection.php");


        $sql="SELECT * FROM usuario ORDER BY Nombre ";
			  
        $resultado1 = mysqli_query($link,$sql) or die(mysql_error());
        ?>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="row">
      <div class="col s12">
          <h3 class="black-text , center-align">Bienvenido al directorio MTB MAN</h3>
        <div class="#ffffff white">
            
          
            
            <table class="responsive-table bordered">
        <thead>
          <tr class="black-text">
              
              <th data-field="id">Nombre</th>
              <th data-field="name">Area</th>
              <th data-field="phone">Telefono</th>
              <th data-field="cel">Ext.</th>
              <th data-field="mail">Celular</th>
              <th data-field="mail">Email</th>
              <th data-field="mail">Editar</th>
              <th data-field="mail">Eliminar</th>
          </tr>
        </thead>

        <tbody class="black-text">
            <?php
			while($row = mysqli_fetch_array($resultado1)):
			
		?>
          <tr >
            <td><?php  echo $row['id_Usuario'];?></td>
            <td><?php  echo $row['area']; ?></td>
            <td><?php  echo $row['telefono']; ?></td>
            <td><?php  echo $row['extencion']; ?></td>
            <td><?php  echo $row['celular']; ?></td>
            <td><?php  echo strtolower($row['Correo']); ?></td>
            <td><?php  echo "<a href=actualizar.php?id={$row['id_Usuario']}><i class='material-icons'>mode_edit</i></a>";?></td>
            <td><?php  echo "<a href=beforedelete.php?id={$row['id_Usuario']}><i class='material-icons'>delete</i></a>";?></td>
            
            
          </tr>
          <?php
				endwhile;
            ?>
        </tbody>
      </table>
           <?php /*
            $name=$_GET['search'];
            if($name !='algo' ){
            echo"<!DOCTYPE html>";
                echo"<html lang='en'>";
                echo"<head>";
                echo"  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>";
                echo"  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no'/>";
                echo"  <title>Directorio MAN</title>";
                echo"  <!-- CSS  -->";
                echo"    <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon' >";
                echo"  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='styleshee'>";
                echo"  <link href='css/materialize.css' type='text/css' rel='stylesheet' media='screen,projection'/>";
                echo"  <link href='css/style.css' type='text/css' rel='stylesheet' media='screen,projection'/>";
                echo"</head>";
                echo"<body>";
                echo"  <nav class='white' role='navigation'>";
                echo"    <div class='nav-wrapper container'>";
                echo"      <a id='logo-container' href='#' class='brand-logo'>Logo</a>";
                    echo"      <ul class='right hide-on-med-and-down'>";
                echo"          <li><a href='admin.php'><i class='material-icons left'>perm_identity</i>Menu admin</a></li>";
                echo"        <li><a href='nuevousuario.php'><i class='material-icons left'>add</i>Agregar nuevo usuario</a></li>";
                echo"        <li><a href='close.php'>Cerrar sesion</a></li>";
                echo"      </ul>";
                echo"    </div>";
                echo"  </nav>";

            
        $sql2="SELECT * FROM usuario WHERE usuario.Nombre LIKE '%$name%'";
        $resultado2 = mysqli_query($link,$sql2) or die(mysql_error());
        //$row2 = mysqli_fetch_array($resultado);
                echo"  <div id='index-banner' class='parallax-container'>";
                echo"    <div class='section no-pad-bot'>";
                echo"        <div class='row'>";
                echo"      <div class'col s12'>";
                echo"          <h3 class='black-text , center-align'>Bienvenido al directorio de MAN</h3>";
                echo"        <div class='#ffffff white'>";
                    echo"            <table class='responsive-table bordered'>";
                echo"        <thead>";
                echo"          <tr class='black-text'>";
                echo"              ";
                echo"              <th data-field='i'>Nombre</th>";
                echo"              <th data-field='name'>Area</th>";
                echo"              <th data-field='phone'>Telefono</th>";
                echo"              <th data-field='cel'>Extencion</th>";
                echo"              <th data-field='mail'>Celular</th>";
                echo"              <th data-field='mail'>Email</th>";
                echo"          </tr>";
                echo"        </thead>";
                echo"        <tbody class='black-text'>";
            
            while($row2 = mysqli_fetch_array($resultado2)):
            
                echo"          <tr >";
                echo"            <td >"; echo $row2['Nombre']; echo"</td>";
                echo"            <td>"; echo $row2['area']; echo"</td>";
                echo"            <td>"; echo $row2['telefono']; echo"</td>";
                echo"            <td>"; echo $row2['extencion']; echo"</td>";
                echo"            <td>"; echo $row2['celular']; echo"</td>";
                echo"            <td>"; echo $row2['Correo']; echo"</td>";
                echo"          </tr>";
                
                endwhile;
                
                echo"        </tbody>";
                echo"      </table>";
                echo"          </div>";
                echo"      </div>";
                echo"    </div>";
                echo"    <div class='parallax'><img src='img/realback.jpg' alt='Unsplashed background img 1'></div>";
                echo"        </div>";
                echo"  </div>";
                echo" </body>";
                echo"  <footer class='page-footer teal'>";
                echo"    <div >";
                echo"      <div class='row'>";
                echo"        <div class='col l6 s12'>";
                echo"          <h5 class='white-text'>MAN Truck & Bus</h5>";
                echo"          <p class='grey-text text-lighten-4'>Bienvenidos a el directorio de MAN que está diseñado para hacer más fácil e buscar gente y";
                echo"            por el cual estamos muy contentos esperamos que les agrade tanto como a nosotros";
                echo"            cualquier comentario referente a este hablar con el equipo de IT</p>";
                echo"            <p class='grey-text text-lighten-4'>Ver 0.3 beta</p>";
                echo"        </div>";
                echo"        <div class='col l6 s12'>";
                echo"          <h5 class='white-text'>Otros sitios</h5>";
                echo"          <ul>";
                echo"            <li><a class='white-text' href='http://192.168.2.90/tickets/' target='_blank'>Sistema Tickets</a></li>";
                echo"          </ul>";
                echo"        </div>";
                echo"      </div>";
                echo"    </div>";
                echo"      </footer>";
                echo"  <!--  Scripts-->";
                echo"  <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>";
                echo"  <script src='js/materialize.j'></script>'";
                echo"  <script src='js/init.j'></script> '";
                echo"</html>";    
            }*/
            ?>
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
        <div class="col l6 s12">
          <h5 class="white-text">MAN Truck & Bus</h5>
          <p class="grey-text text-lighten-4">Bienvenidos a el directorio de MAN que está diseñado para hacer más fácil e buscar gente y
            por el cual estamos muy contentos esperamos que les agrade tanto como a nosotros
            cualquier comentario referente a este hablar con el equipo de IT</p>
            <p class="grey-text text-lighten-4">Ver 0.5 beta</p>

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
