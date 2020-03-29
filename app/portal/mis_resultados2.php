<?php 
include('../config.php');


    $sql = "select * from preguntas where id='".$_GET['id']."'  ";
    $query =pg_query($conexion, $sql);
    $datos4=pg_fetch_assoc($query);


    $sql2 = "select opciones.nombre from opciones, resp_pregunta
    where opciones.id=resp_pregunta.id_opcion and resp_pregunta.id_pregunta='".$_GET['id']."'  ";
    $query2 =pg_query($conexion, $sql2);
    $datos5=pg_fetch_assoc($query2);

    $sql3 = "select opciones.nombre from opciones, resultados
    where opciones.id=resultados.id_opcion and resultados.id_pregunta='".$_GET['id']."' 
    and resultados.id_user='".$_SESSION['id']."'
    ";
    $query3 =pg_query($conexion, $sql3);
    $datos6=pg_fetch_assoc($query3);


    // Obtener el nivel

   $sql2 = "select users.nombre, users.apellidos, users.id, niveles.descripcion as nivel, nivel_users.acertadas
    from  plantilla, users, nivel_users, niveles
    where nivel_users.id_user=users.id and nivel_users.id_nivel=niveles.id 
    and plantilla.id='".$_GET['id']."' and users.id='".$id_user."' ";
    $query2 = pg_query($conexion, $sql2);
    $rows2 = pg_num_rows($query2);
      if($rows2){
        $datos2 =pg_fetch_assoc($query2);
         $nivel = $datos2['nivel'];
      }else
       $nivel="SIN CALIFICAR";
?>

<!DOCTYPE html>
        <html>
        <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SICMATH</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
        <body class="hold-transition sidebar-mini layout-fixed">
   

        <!-- Navbar -->       
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include ('header.php') ?>

    <!-- Sidebar -->
    
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <?php include('resource/button.php'); ?>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $_GET['nombre'] ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="">
                      <div class="">
                       
                         
                      <center><div> <h3><B>CLAVES DE RESPUESTA</B></h3>
                       
                       </center> </div>
                       <div align='justify'>
                          PREGUNTA N° <?php echo $_GET['n'] ?>: <?php echo $datos4['titulo']  ?>
                 
                       </div>
                    <table class='table'>
                    
                         <tr width="60%">
                            <th>COMPETENCIA</th>
                             <td width="30%"><?php echo $datos4['competencia'] ?></td>
                        </tr>
                         <tr>
                           <th>COMPONENTE</th>
                             <td><?php echo $datos4['componente'] ?></td>
                        </tr>
                         <tr>
                           <th>RESPUESTA SELECCIONADA</th>
                           <td width="30%"><?php echo $datos6['nombre'] ?></td>
                        </tr>
                          <tr>
                            <th>RESPUESTA CORRECTA</th>
                            <td width="30%"><?php echo $datos5['nombre'] ?></td>
                        </tr>
                        <tr>
                            <th>PROCEDIMIENTO LÓGICO</th>
                            <td width="30%"><?php echo $datos4['ayuda'] ?></td>
                        </tr>
                     
                      
                    </table>
                         
<br>
<br>

<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
                      </div>
                     <br />
                      <small></small>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="">SICMATH</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
  
</body>
</html>
