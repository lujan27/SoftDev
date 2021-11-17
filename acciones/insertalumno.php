<?php
 include "conexion.php";

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $grupo = $_POST['grupo'];
    $grado = $_POST['grado'];
    $matricula = $_POST['matricula'];
    $permiso = $_POST['permiso'];
    

    $consulta = "INSERT INTO usuario
    (nombres, apellidos, grupo, grado, matricula, permiso)
    VALUES
    ('$nombres', '$apellidos', '$grupo','$grado','$matricula','$permiso')";
    

    $resultado=mysqli_query($mysqli, $consulta);

    if($resultado == true)
	echo '<script language="javascript">
    alert("Datos agregados correctamente");
	window.location.href="../regalumno.php";
	      </script>';
		  
else 
	echo '<script language="javascript">
    elert("Imposible realizar la accion..");
	window.location.href="../regalumno.php";
	      </script>';
   

    mysqli_close($conexion);

?>