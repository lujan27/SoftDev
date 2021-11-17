<?php
try{
  $conexion = new PDO('mysql:host=localhost;dbname=softdev', 'root','');
}catch(PDOException $prueba_error){
  echo "Error: " .$prueba_error->getMessage();
}


$consulta = "SELECT * FROM formulario";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuario = $resultado->fetchAll(PDO::FETCH_ASSOC); 
?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
          
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          
        </thead>

        <tbody>
          <?php
            foreach($usuario as $usuario){
          ?>
          <tr>
            <td><?php echo $usuario['pregunta'] ?></td>
            <td><?php echo $usuario['resp1'] ?></td>
            <td><?php echo $usuario['resp2'] ?></td>
            <td><?php echo $usuario['resp3'] ?></td>
            <td><?php echo $usuario['resp4'] ?></td>
            <td><?php echo $usuario['resp5'] ?></td>
            <td><?php echo $usuario['resp6'] ?></td>
            <td><?php echo $usuario['resp7'] ?></td>
            <td><?php echo $usuario['resp8'] ?></td>
            <td><?php echo $usuario['numeroFormulario'] ?></td>
            
            
            <td>
    
    <a href="bajas.php?id=<?php echo $data['id'];?>" class="table__item__link">Eliminar</a>
   </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->