<?php 
include "acciones/validarsession.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Animation Utilities</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php
        /**Menu(sidebar)*/
        include "componentes/menu.php"
        ?>
        <!-- End of Sidebar -->
          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <?php
    include "componentes/navbar.php"
    ?>

    <!-- Begin Page Content -->
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                  <div class="row">
                            <div class="col-lg-6 text-center">
                            
                                    <img src="img/utna.png" class=" imagenLogin" >
                                    
                                
                                
                            </div>
                    <div class="col-lg-4">
                        <div class="p-4">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Nuevo usuario</h1>
                            </div>
                            <form action="acciones/insertuser.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="usuario"
                                        placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="clave"
                                        placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"name="permiso"
                                        placeholder="Permiso">
                                </div>
                                <div class="text-center">
                                <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php
include "componentes/footer.php"
?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>