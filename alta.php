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
        
            if(!empty($_POST['admin'])){
                $admin= "1";
            }else{
                $admin = "0";
            }
            
            
        
            $sql="INSERT INTO `usuario` (`Nombre`, `area`, `Correo`, `ubicacion`, `telefono`, `extencion`, `celular`, `id_Usuario`) VALUES ('$user', '$area', '$correo', '$ubicacion', '$telefono', '$extencion', '$celular', NULL);";
            $resultado = mysqli_query($link,$sql);
        
            $last_id = mysqli_insert_id($link);
        
            $sql2="INSERT INTO `login` (`id_usuario`, `alias`, `password`, `admin`) VALUES ('$last_id', '$alias', '$contrasena', '$admin');";
        
            
            
            $resultado2 = mysqli_query($link,$sql2);
        
        header("location:admin.php");
            
?>
    </body>
</html>