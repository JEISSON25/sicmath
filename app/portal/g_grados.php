<?php 
session_start();
//session_destroy();
if(isset($_SESSION['id'])){  
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

   <!-- DataTables -->
   <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script type="text/javascript" src="../librerias/js/funciones.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include ('header.php') ?>

  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <?php include('resource/button.php'); ?>
          <!-- ./col -->
          <div class="col-lg-12 col-12">
            <!-- small box -->
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">CREAR UN GRADO</h3>
              </div>
              <div class="card-body">
                               
                <form class="needs-validation">                          
                         
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id='grado'  placeholder="Nombre del grado" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        </div>
                                                <br>
                                <button class='btn btn-success' id='guardar'>GUARDAR</button>
                            </form>
              </div>
              
             
              
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GRADOS CREADOS
                            </h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id='table_id' class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>GRADO</th>                                           
                                            <th>ACCION</th>
                                        </tr>
                                    </thead>                                 
                                </table>
                            </div>
                        </div>
                    </div>
            
                </div>
            
            </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
          <!--<div class="col-lg-3 col-6">-->
            <!-- small box -->
          <!--  <div class="small-box bg-danger">-->
          <!--    <div class="inner">-->
          <!--      <h3>65</h3>-->

          <!--      <p>Unique Visitors</p>-->
          <!--    </div>-->
          <!--    <div class="icon">-->
          <!--      <i class="ion ion-pie-graph"></i>-->
          <!--    </div>-->
          <!--    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
          <!--  </div>-->
          <!--</div>-->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('button', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
       <script>

$(document).ready(function () {
        /*$('.js-basic-example').DataTable({
            
        });*/

        //var datos1='g_plantilla='+1+'&listar='+1;
         $('#table_id').DataTable({           
            responsive: true,
            stateSave: true,
            "ajax": {
                "url": "../../app/modelos/funciones.php?listar_grado=1",
                "type": "POST"                
            },
            "columns": [

                { "data": "#" },
                { "data": "grado" },               
                { "data": "accion" }
            ],
            "oLanguage": {
                "sProcessing": "Procesando...",
                "sLengthMenu": 'Mostrar <select>' +
                    '<option value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">Todo</option>' +
                    '</select> registros',
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ning�n dato disponible en esta tabla",
                "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Filtrar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Por favor espere - cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "�ltimo",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },


        });
        
        // // Header
        // $("#header_app").load('../template/header.html');
        // // Menú
        // $("#menu_app").load('../template/menu.html');
        
                $("#guardar").click(function(){
                          var grado = $("#grado").val();  

                              if(grado!=""){
  
                                    var datos='g_colegio='+1+'&crea_grado='+1+'&grado='+grado;
                                     $.ajax({
                                       type: "POST",
                                       data: datos,
                                       url: "../../app/modelos/funciones.php",
                                       success: function (valor){
                                          if(valor==1){
                                             alert("Grado registrado correctamente")
                                                //swal("", "Plantilla creada correctamente", "success");
                                                 $('#table_id').dataTable().fnDestroy();
                                                 $('#table_id').DataTable({
                                                        responsive: true,
                                                        stateSave: true,
                                                        "ajax": {
                                                            "url": "../../app/modelos/funciones.php?listar_grado=1",
                                                            "type": "POST"
                                                        },
                                                        "columns": [

                                                            { "data": "#" },
                                                            { "data": "grado" },
                                                            { "data": "accion" }
                                                        ],
                                                        "oLanguage": {
                                                            "sProcessing": "Procesando...",
                                                            "sLengthMenu": 'Mostrar <select>' +
                                                                '<option value="10">10</option>' +
                                                                '<option value="20">20</option>' +
                                                                '<option value="30">30</option>' +
                                                                '<option value="40">40</option>' +
                                                                '<option value="50">50</option>' +
                                                                '<option value="-1">Todo</option>' +
                                                                '</select> registros',
                                                            "sZeroRecords": "No se encontraron resultados",
                                                            "sEmptyTable": "Ning�n dato disponible en esta tabla",
                                                            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
                                                            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
                                                            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                                                            "sInfoPostFix": "",
                                                            "sSearch": "Filtrar:",
                                                            "sUrl": "",
                                                            "sInfoThousands": ",",
                                                            "sLoadingRecords": "Por favor espere - cargando...",
                                                            "oPaginate": {
                                                                "sFirst": "Primero",
                                                                "sLast": "�ltimo",
                                                                "sNext": "Siguiente",
                                                                "sPrevious": "Anterior"
                                                            },
                                                            "oAria": {
                                                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                                            }
                                                        },
                                                    });
                                                }
                                                else if(valor==2)
                                                alert ("El nombre del grado ya se encuentra creado, intente con otro");
                                                //swal("Ops", "El nombre de la plantilla ya se encuentra creado, intente con otro", "warning");
                                                else
                                                alert("Ocurrio un problema aquí, comunícate con el administrador");
                                               // swal("Ops", "Ocurrio un problema aquí, comunícate con el administrador", "warning");
                                            }
                                            
                                    });

                            }else{
                                alert("Ingrese los campso con asterisco(*)");
                               // swal("","Ingrese los campos con asterísco(*)","warning");
                            }
                });

    });
       </script> 
<?php
}else{
//echo "entró aqui";
?>
  <script>
   parent.location="../../app";
  </script> 
<?php
}
?>