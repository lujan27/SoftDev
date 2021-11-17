<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','softdev');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    //echo "<script>alert('Conexión con exito a la base de datos');</script>";
}catch (PDOException $e){
    echo "<script>alert('error al conectar con la base de datos');</script>";
}

$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$d5 = $_POST['d5'];
$d6 = $_POST['d6'];
$d7 = $_POST['d7'];
$d8 = $_POST['d8'];
$d9 = $_POST['d9'];
$d10 = $_POST['d10'];
$d11 = $_POST['d11'];


$sentencia = $pdo->prepare("INSERT INTO formulario
(idformulario, pregunta, resp1, resp2, resp3, resp4, resp5, resp6, resp7, resp8, numeroFormulario)
VALUES (:idformulario,:pregunta,:resp1,:resp2,:resp3,:resp4,:resp5,:resp6,:resp7,:resp8,:numeroFormulario)");

$sentencia->bindParam(':idformulario',$d1);
$sentencia->bindParam(':pregunta',$d2);
$sentencia->bindParam(':resp1',$d3);
$sentencia->bindParam(':resp2',$d4);
$sentencia->bindParam(':resp3',$d5);
$sentencia->bindParam(':resp4',$d6);
$sentencia->bindParam(':resp5',$d7);
$sentencia->bindParam(':resp6',$d8);
$sentencia->bindParam(':resp7',$d9);
$sentencia->bindParam(':resp8',$d10);
$sentencia->bindParam(':numeroFormulario',$d11);
$sentencia->execute();

?>