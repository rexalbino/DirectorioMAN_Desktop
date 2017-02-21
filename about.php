<?php
session_start();
if (@!$_SESSION['user']) {
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
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons left">perm_identity</i>Menu</a></li>
        <li><a href="close.php">Cerrar sesion</a></li>
      </ul>
    </div>
  </nav>
<?php
        require("connection.php");

		$id=$_GET['id'];
        

        $sql="SELECT login.alias, login.password,usuario.id_Usuario, usuario.Nombre, usuario.area, usuario.Correo, usuario.ubicacion, usuario.telefono, usuario.extencion, usuario.celular FROM usuario INNER JOIN login on login.id_usuario='$id' AND usuario.id_Usuario='$id'";
			  
        $resultado = mysqli_query($link,$sql) or die(mysql_error());
        $row = mysqli_fetch_array($resultado);
        ?>
  <div class="parallax-container">
    
      <div class="container">
          <h3 class="black-text , center-align">Bienvenido al directorio de MAN</h3>
        <div class="#ffffff white">
            
          <p class="black-text ">Seleccionaste el usuario <b><?php echo $row['Nombre'] ?></b></p>
            <form role="form" action="megaupdate.php?id=<?php echo $row['id_Usuario']?>" method="post">
            
            <div class="container">
            <div class="row">
                <div class="input-field col s12">
                    <label for="text">Nombre</label>
                    <input disabled id="uname" name="uname" type="text" class="black-text" value="<?php echo $row['Nombre'] ?>" required>
                </div>
            </div>
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="text">Area</label>
                    <input disabled id="area" name="area" type="text" class="black-text" value="<?php echo $row['area']; ?>" required>
                </div>
            </div>
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Correo</label>
                    <input disabled id="mail" name="mail" type="email" class="black-text" value="<?php echo $row['Correo']; ?>" required>
                </div>
            </div>
              
            <div class="row">
                <div class="input-field col s12">
                    <label for="tel">Ubicacion</label>
                    <input disabled id="telefono" name="telefono" type="text" class="black-text" value="<?php echo $row['ubicacion']; ?>" required>
                </div>
            </div>
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="tel">Telefono</label>
                    <input disabled id="telefono" name="telefono" type="text" class="black-text" value="<?php echo $row['telefono']; ?>" required>
                </div>
            </div>    
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Extencion</label>
                    <input disabled id="ext" name="ext" type="tel" class="black-text" value="<?php echo $row['extencion']; ?>" required>
                </div>
            </div>  
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Celular</label>
                    <input disabled id="cel" name="cel" type="text" class="black-text" value="<?php echo $row['celular']; ?>" required>
                </div>
            </div> 
            
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Alias</label>
                    <input disabled id="alias" name="alias" type="text" class="black-text" value="<?php echo $row['alias']; ?>" required>
                </div>
            </div>      
              
            </div>
            </form>
            
          </div>

      </div>
    </div>
    <div class="parallax"><img src="img/realback.jpg" alt="Unsplashed background img 1"></div>
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
            

        </div>
       
        <div class="col l6 s12">
          <h5 class="white-text">Otros sitios</h5>
          <ul>
            <li><a class="white-text" href="http://192.168.2.90/tickets/" target="_blank">Sistema Tickets</a></li>
            
          </ul>
        </div>
      </div>
    </div>
       <div class="footer-copyright">
            <div class="container">
            Ver 0.7 beta
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
      </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  
</html>
