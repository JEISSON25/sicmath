<?php 
include('../config.php');
//session_destroy();
if(isset($_SESSION['id'])){  

            $s = "select * from plantilla where cod_estado=1";
            $q =pg_query($conexion, $s);
            $r =pg_num_rows($q);
                if($r){
                    
                    $sal = 0;
                }
                else
                echo $sal = 1;
    
                $_SESSION['id_plantilla']="";
                $_SESSION['n_pregunta']=0;
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
        </head>
        <body class="hold-transition sidebar-mini layout-fixed">
   

        <!-- Navbar -->       
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include ('header.php') ?>

        <!-- Content Wrapper. Contains page content -->
       
                <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">SELECCIONE EXAMEN A VISUALIZAR</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                     
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id='table_id' class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NOMBRE</th>                                             
                                            <th>ACCION</th>
                                        </tr>
                                    </thead>
                                   <!-- <tbody>
                                       <td>1</td>
                                        <td>CUESTIONARIO</td>
                                         <td>MATEMATICAS</td>
                                          <td>PRUEBAS ICFES</td>
                                           <td>ACTIVO</td>
                                            <td>200</td>
                                          <td><a href='crear_preguntas.html'>CREAR PREGUNTAS</a></td> 
                                   </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
            
                </div>
                </div>
                </div>         
            <!-- /.content -->
        </div>           <!-- Modal -->
               
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
            $(document).ready(function(){

                $('#exampleModalCenter').modal('show')

                       $('#table_id').DataTable({           
                                responsive: true,
                                stateSave: true,
                                "ajax": {
                                    "url": "../../app/modelos/funciones.php?listar_examen2=1",
                                    "type": "POST"                
                                },
                                "columns": [

                                    { "data": "#" },                                    
                                    { "data": "nombre" },                                   
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
                
            })
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