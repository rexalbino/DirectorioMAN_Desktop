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
        <?php
		session_start();
			require("connection.php");
            

            $user=$_GET['uname'];
            $pass=$_GET['pass'];
        
            $sql="SELECT * FROM login WHERE alias='$user' and password='$pass'";
        
            $resultado = mysqli_query($link,$sql) or die(mysql_error());
            $row = mysqli_fetch_array($resultado);
            
                
            if($row['admin'] == 1)
                {
                    $_SESSION['user']=$row['alias'];
                    $_SESSION['pass']=$row['password'];
				    echo "<script language=javaScript>window.location='admin.php'</script>";
			        
                }
            elseif($row['admin'] == 0){
                    $_SESSION['user']=$row['alias'];
                    $_SESSION['pass']=$row['password'];
                    echo "<script language=javaScript>window.location='index.php'</script>";
            }else{
                echo "<script language=javaScript>alert('Usuario no valido!');</script>";
                echo "<script language=javaScript>window.location='login.php'</script>";
            }
        ?>
    </body>
</html>