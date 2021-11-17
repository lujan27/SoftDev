<?php
include "conexion.php";

$usuario = $_POST["txtusuario"];
$pass = $_POST["txtpass"];

$passHash = password_hash($pass, PASSWORD_BCRYPT);
$consulta = "SELECT contraseña from usuario WHERE usuario = '".$usuario."'";
$obtenercontra = mysqli_query($mysqli, $consulta);
$passEnc = $obtenercontra->fetch_assoc();

if(password_verify($pass, $passEnc['contraseña'])){
    session_start();
    $_SESSION['usuario'] = $usuario;
    echo '<script language="javascript">
    alert("Ingresando");
	window.location.href="../index.php";
	      </script>';
		  
}else{
    echo '<script language="javascript">
    alert("Datos incorrectos");
	window.location.href="../login.php";
	      </script>';
		  
}

?>

