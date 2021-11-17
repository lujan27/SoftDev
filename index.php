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

                <title>SB Admin 2 - Dashboard</title>

                <!-- Custom fonts for this template-->
                <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                <link
                    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                    rel="stylesheet">

                <!-- Custom styles for this template-->
                <link href="css/sb-admin-2.min.css" rel="stylesheet">

            </head>

            <body id="page-top">
            <!-- 15-cc5011a 5cd8175wpl -->
                <!-- Page Wrapper -->
                <div id="wrapper">
                
                    <?php
                    /**Menu(sidebar)*/
                    include "componentes/menu.php"
                    
                    ?>
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">
                    
                        <?php
                        /**Barra de busqueda */
                        include "componentes/navbar.php"
                        ?>
                        <?php 
                            include "acciones/conexion.php";
                            $consulta = "SELECT * FROM formulario";
                            $resultado = mysqli_query($mysqli, $consulta) or die(mysqli_error($mysqli));
                            
                        ?>
                        <form action="acciones/respuestas.php" method="POST">
                        <div class="container"><!--Inicio de contenido PREGUNTAS-->
                    <div class="raw">
                        <div class="col-12">

                        <h1 class="text-center">Encuesta de satisfacción al estudiante</h1>  
                    </div>  
                                    
                                <?php 
                                $date = new DateTime('NOW');
                                echo $date->format('c');
                                
                                foreach ($resultado as $opciones):
                                
                                ?>
                                <div class="card"><!--Inicio de CARD PARA PREGUNTAS-->
                                <div class="card-body fw-bold" >
                                    <?php
                                if($opciones['pregunta']==="X"){
                                    ?>
                                    
                                    <div><?php echo $opciones['pregunta'];?></div>

                                <?php
                                }
                                ?>
                                <p class="fw-bolder"><?php echo $opciones['pregunta'];?></P>
                                
                                
                                <div class="form-check">  
                                    <?php
                                    $bandera=0;
                                    for ($i=1; $i<=8;$i++) { 
                                        $append = "resp".$i;
                                        if ($opciones[$append]!=null && $opciones[$append]!='X'){
                                            echo '<input type="radio" class="form-check-input" name="'.$opciones['idformulario'].'" id="'.$opciones['idformulario'].'" value="">'.$opciones[$append]. '<br>';
                                        }else {
                                            $bandera++;
                                        }
                                    }
                                    if ($bandera==8){
                                        echo '<input type="text" class="form-check-input" name="'.$opciones['idformulario'].'" id="'.$opciones['idformulario'].'" value="'.$opciones['idformulario'].'">'.$opciones[$append].'<br><br>'; 
                                    }
                                    
                                    /*echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp1'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp2'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp3'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp4'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp5'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp6'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp7'], '<br>';

                                    echo '<input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">',
                                    $opciones['resp8'], '<br>';
                                    */
                                    ?>
                                    
                                </label>
                                </div>
                                
                                </div>
                                </div>

                                <hr>
                                

                            <?php endforeach;?>
                                <!--AQUI FALTA OBTENER ID USUARIO -->
                                <?php 
                                    include "acciones/conexion.php";
                                    $idUsuario = "SELECT idusuario FROM usuario";
                                    $resultadoid = mysqli_query($mysqli, $idUsuario) or die(mysqli_error($mysqli));
                                    
                                ?>
                                
                            <div class="text-center">
                                        <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
                                </div>

                                </form>
                                        
                            
                                
                        <?php
                        /**Footer*/
                        include "componentes/footer.php"
                        ?>

                        </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

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

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>

            </body>

            </html>