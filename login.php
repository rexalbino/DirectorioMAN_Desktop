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
        <li><a href="#">Cerrar sesion</a></li>
      </ul>
    </div>
  </nav>

  <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
         
        <br>
        <div class="container">
             <div align="center" class="row row-centered">
               
        <div class="col  s12 m12">
          <div class="card">
            <div class="card">
              
                    <img class="responsive-img"  src="IMG/user.png" height="" width="100" >     
                  <br>
                
              
                
            </div>
              <br>
                <br>
            <div class="card-content">
              <div class="row">
    <form class="col s12" action="analysis.php" methot="POST">
      
      <div class="row">
        <div class="input-field col s12">
            <label for="email">Nombre usuario</label>
          <input id="uname" name="uname" type="text" class="black-text" required>
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="password">Contraseña</label>
          <input id="pass" name="pass" type="password" class="black-text" required>
          
        </div>
      </div>
        <input type="submit" id='enviar' value="Iniciar sesion" class="waves-effect waves-light btn">
        
        <a href="index.html" class="waves-effect waves-light btn"><i class="material-icons left">restore</i>Cancelar</a>
                     </form>
                </div>
              </div>
            </div>
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
