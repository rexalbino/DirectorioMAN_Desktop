<?php
      require("connection.php");
            

            $id=$_GET['id'];
            
			
            $sql="DELETE FROM usuario WHERE id_Usuario='$id'";
            $sql2="DELETE FROM login WHERE id_usuario='$id'";
            
        
            $resultado = mysqli_query($link,$sql);
            $resultado2 = mysqli_query($link,$sql2);	
      
      if ($resultado==null) {
		
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE BORRO ")</script> ';
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO borradetion ;P")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
  ?>