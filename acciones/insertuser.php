<?php
    include "conexion.php";
  


    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clavehash = password_hash($clave, PASSWORD_BCRYPT);
    $permiso = $_POST['permiso'];
   
    

    $consulta = "INSERT INTO usuario
    (usuario, contraseña, permiso)
    VALUES
    ('$usuario', '$clavehash', '$permiso')";
    

    $resultado=mysqli_query($mysqli, $consulta);

    if($resultado == true)
	echo '<script language="javascript">
    alert("Datos agregados correctamente");
	window.location.href="../reguser.php";
	      </script>';
		  
else 
	echo '<script language="javascript">
    elert("Imposible realizar la accion..");
	window.location.href="../reguser.php";
	      </script>';
   

    mysqli_close($mysqli);


?>