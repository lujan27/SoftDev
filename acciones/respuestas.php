<?php
include "conexion.php";

//idusuario = $_POST['idusuario'];

$respuesta = [];

//$aux = $_POST['1'];
//$aux2 = $_POST['2'];


for ($i=1; $i<=56;$i++){
      //falta if vacio
      $respuesta[$i] = $_POST[$i];
      $query = "INSERT INTO `respuesta`(`respuesta`, `idformulario`, `idusuario`) VALUES ('$respuesta[$i]' , '$i', '2')";
      echo  $query.'<br>';
      mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
      
} 

//echo $aux;
//echo $aux2;

/*
$consulta = "INSERT INTO respuesta
(idrespuesta, respuesta, idformulario, idusuario)
VALUES
('$idrespuesta', '$respuesta', '$idformulario', '$idusuario')";


echo $consulta;


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

*/

?>