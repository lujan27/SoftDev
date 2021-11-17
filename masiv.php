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

    <title>SB Admin 2 - Border Utilities</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

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
    include "componentes/navbar.php"
    ?>
                
            
    <div class="col-12">
      
    <script src="js/xlsx.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<script language="JavaScript">
    var oFileIn;
    //Código JQuery
    $(function() {
        oFileIn = document.getElementById('my_file_input');
        if (oFileIn.addEventListener) {
            oFileIn.addEventListener('change', filePicked, false);
        }
    });

    //Método que hace el proceso de importar excel a html
    function filePicked(oEvent) {
        // Obtener el archivo del input
        var oFile = oEvent.target.files[0];
        var sFilename = oFile.name;
        // Crear un Archivo de Lectura HTML5
        var reader = new FileReader();

        // Leyendo los eventos cuando el archivo ha sido seleccionado
        reader.onload = function(e) {
            var data = e.target.result;
            var cfb = XLS.CFB.read(data, {
                type: 'binary'
            });
            var wb = XLS.parse_xlscfb(cfb);
            // Iterando sobre cada sheet
            wb.SheetNames.forEach(function(sheetName) {
                // Obtener la fila actual como CSV
                var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);
                var data = XLS.utils.sheet_to_json(wb.Sheets[sheetName], {
                    header: 1
                });
                $.each(data, function(indexR, valueR) {
                    var sRow = "<tr>";
                    $.each(data[indexR], function(indexC, valueC) {
                        sRow = sRow + "<td>" + valueC + "</td>";
                    });
                    sRow = sRow + "</tr>";
                    $("#my_file_output").append(sRow);
                });
            });
            $("#imgImport"). css("display", "none");
        };


// Llamar al JS Para empezar a leer el archivo .. Se podría retrasar esto si se desea
        reader.readAsBinaryString(oFile);
    }
</script>
<form>
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">Importador de datos</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="file" id="my_file_input" class="form-control" />
                      
                        <br>
                        <div class="table table-responsive">
                            <table id='my_file_output' border=""
                                   class="table table-bordered table-condensed table-striped"></table>
                        </div>
                        <button id="btn_lectura" class="btn btn-info">Registrar Datos</button>
                        <a href="panel.php" class="btn btn-default ">Cancelar</a>
                        <p id="respuesta">

                        </p>
                        <p id="contador">

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</form>

<script>
    $('#btn_lectura').click(function () {
        valores=new Array();
        var contador = 0;
        $('#my_file_output tr').each(function () {

            var d1= $(this).find('td').eq(0).html();
            var d2 = $(this).find('td').eq(1).html();
            var d3 = $(this).find('td').eq(2).html();
            var d4 = $(this).find('td').eq(3).html();
            var d5 = $(this).find('td').eq(4).html();
            var d6 = $(this).find('td').eq(5).html();
            var d7 = $(this).find('td').eq(6).html();
            var d8 = $(this).find('td').eq(7).html();
            var d9 = $(this).find('td').eq(8).html();
            var d10 = $(this).find('td').eq(9).html();
            var d11 = $(this).find('td').eq(10).html();
            valor=new Array(d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11);
            valores.push(valor);
            console.log (valor);
           // alert(valor);
            $.post('acciones/insertarpre.php', {d1:d1, d2:d2, d3:d3, d4:d4, d5:d5, d6:d6, d7:d7, d8:d8, d9:d9, d10:d10, d11:d11}, function (datos) {
                $('#respuesta').html(datos);
            });

            contador = contador + 1;
            $('#contador').html("Se registro "+contador+" registros correctamente.");

        });



    });
</script>
 

            <!-- Footer -->
            <?php
            include "componentes/footer.php"
            ?>
            <!-- End of Footer -->

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

</body>

</html>