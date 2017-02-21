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
      <a id="logo-container" href="#" class="brand-logo"><img height="63 px;" src="img/manvector.png"/> </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="admin.php"><i class="material-icons left">perm_identity</i>Menu admin</a></li>
        <li><a href="close.php">Cerrar sesion</a></li>
      </ul>
    </div>
  </nav>
<?php
        require("connection.php");

		
        

        $sql="SELECT * FROM usuario ORDER BY Nombre ";
			  
        $resultado = mysqli_query($link,$sql) or die(mysql_error());
        ?>
  <div class="parallax-container">
      <div class="container">
          <h3 class="black-text , center-align">Bienvenido al directorio de MAN</h3>
        <div class="#ffffff white">
            
          <p class="black-text ">Bienvenido (poner nombre del usuario) al panel de ingresar un nuevo usuario</p>
            <form action="alta.php" method="post">
            <div class="container">
            <div class="row">
                <div class="input-field col s12">
                    <label for="text">Nombre</label>
                    <input id="uname" name="uname" type="text" class="black-text" required>
                </div>
            </div>
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="text">Area</label>
                    <input id="area" name="area" type="text" class="black-text" required>
                </div>
            </div>
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Correo</label>
                    <input id="mail" name="mail" type="email" class="black-text" required>
                </div>
            </div>
              
            <div class="row">    
            <div class="input-field col s12">
                <label>Ubicacion</label>
                    <select class="browser-default black-text" name="lugar" id="lugar">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <option value="FINSA"> FINSA</option>
                        <option value="El Marques"> El Marques</option>
                        <option value="Toluca"> Toluca</option>
                        <option value="Aguascalientes"> Aguascalientes</option>
                        <option value="Guadalajara"> Guadalajara</option>
                        <option value="Celaya"> Celaya</option>
                        <option value="DF (santa fe)"> DF (santa fe)</option>
                        <option value="Leon"> Leon</option>
                    </select>
            </div>
            </div>
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="tel">Telefono</label>
                    <input id="telefono" name="telefono" type="text" class="black-text" required>
                </div>
            </div>    
                
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Extencion</label>
                    <input id="ext" name="ext" type="tel" class="black-text" required>
                </div>
            </div>  
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Celular</label>
                    <input id="cel" name="cel" type="text" class="black-text" required>
                </div>
            </div> 
            
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Alias</label>
                    <input id="alias" name="alias" type="text" class="black-text" required>
                </div>
            </div> 
            
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Contraseña</label>
                    <input id="pass" name="pass" type="password" class="black-text" required>
                </div>
            </div>     
              
            <div class="switch">
                <p class="black-text">Admin</p>
                <label>
                Off
                    <input type="checkbox" name="admin[]" id="admin" value="1">
                    <span class="lever"></span>
                On
                </label>
                
            </div> 
                <div class="row">
                <div class="input-field col s12">
                   
                </div>
            </div> 
                
                <div>
              <input type="submit" id='enviar' value="Agregar usuario" class="waves-effect waves-light btn">  
                </div>
            </div>
            </form>
            <div class="row">
                <div class="input-field col s12">
                   
                </div>
            </div> 
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
