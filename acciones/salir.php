<?php 
session_start();

session_destroy();

echo '<script language= "javascript">
alert("Cerrando sesión");
window.location.href="../login.php";
</script>'
?>