<?php

session_start();

if(!$_SESSION['usuario']){
  ?><script>
    alert('Inicia sesion para acceder a este sitio');
    window.location='login.php';

  </script><?php

  exit();


} 
?>