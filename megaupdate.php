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
        require("connection.php");
            $user=$_POST['uname'];
            $area=$_POST['area'];
            $correo=$_POST['mail'];
            $ubicacion=$_POST['lugar'];
            $telefono=$_POST['telefono'];
            $extencion=$_POST['ext'];
            $celular=$_POST['cel'];
            $alias=$_POST['alias'];
            $contrasena=$_POST['pass'];
            $id=$_GET['id'];
        
            if(!empty($_POST['admin'])){
                $admin= "1";
            }else{
                $admin = "0";
            }
            
        
            $sql="UPDATE `usuario` SET `Nombre` = '$user', `area` = '$area', `Correo` = '$correo', `ubicacion` = '$ubicacion', `telefono` = '$telefono', `extencion` = '$extencion', `celular` = '$celular' WHERE `usuario`.`id_Usuario` = '$id';";
            
        
            
        
            $sql2="UPDATE `login` SET `alias` = '$alias', `password` = '$contrasena', `admin` = '$admin' WHERE `login`.`id_usuario` = '$id';";
        
            
            $resultado = mysqli_query($link,$sql);
            $resultado2 = mysqli_query($link,$sql2);
        
        if ($resultado==null || $resultado2==null ) {
		
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO updateado")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
            
?>
    </body>
</html>