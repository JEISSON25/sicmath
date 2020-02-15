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
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- DataTables -->
   <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="editor.js"></script>
		<script>
			$(document).ready(function() {
				$("#titulo").Editor();
			});
		</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="editor.css" type="text/css" rel="stylesheet"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success">   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <!-- Sidebar -->
    <?php include ('header.php') ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-12 col-12">
            <!-- small box -->
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">CREAR PREGUNTAS DE LA PLANTILLA - <?PHP echo $_GET['nombre'] ?></h3>
              </div>
              <div class="card-body">
                               
             <form>                               
                                <label for="email_address">(*) TIPO DE PREGUNTA</label>
                                <div class="form-group">
                                
                                    <select class='form-control' id='tipo'>
                                        <option value="" >SELECCIONE</option>
                                        <!--<option value="1" >ABIERTA</option>-->
                                        <option value="3" >OPCIONES</option>
                                        <!--<option value="4" >ARCHIVO</option>-->
                                    </select>
                                
                                </div>
                                <label for="email_address">(*) NOMBRE DE LA PREGUNTA</label>                              
                                	<div id='titulo' width='150' height='150'><p>INTRODUZCA NOMBRE DE LA PREGUNTA</p></div>
                                <label for="email_address">DESCRIPCION DETALLADA DE LA PREGUNTA (OPCIONAL)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                      <textarea id="nombre" class="form-control" placeholder="INTRODUZCA UNA DESCRIPCION DETALLADA DE LA PREGUNTA "></textarea>
                                        
                                    </div>
                                </div>
                                <label for="email_address">(*) COMPETENCIA</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="competencia" class="form-control" placeholder="INTRODUZCA NOMBRE DE COMPONTENCIA">
                                    </div>
                                </div>
                                <label for="email_address">(*) COMPONENTE</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="componente" class="form-control" placeholder="INTRODUZCA EL NOMBRE DEL COMPONENTE">
                                    </div>
                                </div>
                                <label for="email_address">(*) PROCEDIMIENTO LÓGICO</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="ayuda" class="form-control" placeholder="PROCEDIMIENTO LÓGICO">
                                    </div>
                                </div>
                                
                                  <label for="email_address">ARCHIVO (<b>Opcional</b>)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                     <iframe src='subir.php'></iframe>
                                    </div>
                                </div>

                                <label for="email_address">(*) ESTADO</label>
                                <div class="form-group">
            
                                    <select class='form-control' id='estado'>
                                        <option value="">SELECCIONE</option>
                                        <option value="1" >HABILITADO</option>
                                        <option value="2" >DESHABILITADO</option>
                                    </select>
            
                                </div>            
                                <br>
                           
                            </form>
              </div>
              
              <button class='btn btn-success' id='guardar'>GUARDAR</button>
              
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                     
                        <div class="body">
                           <fieldset>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                PREGUNTAS DE LA PLANTILLA
                                            </h2>                                           
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table id='table_id' class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>PLANTILLA</th>
                                                            <th>NOMBRE</th>
                                                            <th>DESCRIPCION</th>
                                                            <th>TIPO</th>
                                                            <th>RESPUESTA</th>
                                                            <th>CANT OPCIONES</th>
                                                            <th>ESTADO</th>
                                                            <th>ACCION</th>
                                                            <th>CREAR OPCIONES</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td>1</td>
                                                        <td>MATEMATICAS</td>
                                                        <td>QUE ES LA GEOMETRIA</td>
                                                        <td>DESCRIBA EL NOMBRE DE LA GE....</td>
                                                        <td>OPCIONES</td>
                                                        <td>B</td>
                                                        <td>4</td>
                                                        <td>ACTIVO</td>
                                                        <td><a href='crear_opciones.html'>CREAR OPCIONES</a></td>
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
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
    $(document).ready(function () {

        $.get = function (key) {
            key = key.replace(/[\[]/, '\\[');
            key = key.replace(/[\]]/, '\\]');
            var pattern = "[\\?&]" + key + "=([^&#]*)";
            var regex = new RegExp(pattern);
            var url = unescape(window.location.href);
            var results = regex.exec(url);
            if (results === null) {
                return null;
            } else {
                return results[1];
            }
        }
        var id = $.get("id");

        $('#table_id').DataTable({
            responsive: true,
            stateSave: true,
            "ajax": {
                "url": "../../app/modelos/funciones.php?listar_preguntas=1&id="+id,
                "type": "POST"
            },
            "columns": [
                
                { "data": "#" },
                { "data": "plantilla" },
                { "data": "titulo" },
                { "data": "nombre" },
                { "data": "tipo" },
                { "data": "respuesta" },
                { "data": "opciones" },
                { "data": "estado" },
                { "data": "accion" },
                { "data": "accion2" }
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


       $('#titulo').summernote();
                 $("#nombre_plan").html($.get("nombre"));

                  $("#guardar").click(function(){

                        var nombre = $("#nombre").val();                     
                        var tipo = $("#tipo").val();
                        var estado = $("#estado").val();
                        var titulo =  $('#titulo').summernote('code');
                        var id_plantilla = id;
                        var ayuda = $("#ayuda").val();
                        var competencia = $("#competencia").val();
                        var componente = $("#componente").val();
                        var user = 2;
                        var plainText = $("#titulo").summernote("code").replace(/<\/p>/gi, "\n")
                .replace(/<br\/?>/gi, "\n")
                .replace(/<\/?[^>]+(>|$)/g, "");
                      //  alert(plainText);

                        var datos ='g_plantilla='+1+'&crear_pregunta='+1+'&nombre='+nombre+'&tipo='+tipo+'&estado='+estado+'&id_plantilla='+id_plantilla+'&ayuda='+ayuda+'&titulo='+titulo
                        +'&competencia='+competencia+'&componente='+componente+'&plainText='+plainText;

                            if(titulo!=""  && tipo!="" && estado!=""){

                                    $.ajax({
                                            type:"POST",
                                            url: "../../app/modelos/funciones.php",
                                            data: datos,
                                            success: function(valor){
                                                if(valor==1){
                                                    alert("Pregunta creada correctamente");
                                               // swal("", "Pregunta creada correctamente", "success");
                                                 $('#table_id').dataTable().fnDestroy();
                                                  $('#table_id').DataTable({
                                                        responsive: true,
                                                        stateSave: true,
                                                        "ajax": {
                                                            "url": "../../app/modelos/funciones.php?listar_preguntas=1&id="+id,
                                                            "type": "POST"
                                                        },
                                                        "columns": [
                                                            
                                                            { "data": "#" },
                                                            { "data": "plantilla" },
                                                            { "data": "titulo" },
                                                            { "data": "nombre" },
                                                            { "data": "tipo" },
                                                            { "data": "respuesta" },
                                                            { "data": "opciones" },
                                                            { "data": "estado" },
                                                            { "data": "accion" },
                                                            { "data": "accion2" }
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
                                                else if(valor==3)
                                                alert("El nombre de la pregunta ya se encuentra creado, intente con otro")
                                               // swal("Ops", "El nombre de la pregunta ya se encuentra creado, intente con otro", "warning");
                                                else
                                                alert("Ocurrio un problema aquí, comunícate con el administrador")
                                                //swal("Ops", "Ocurrio un problema aquí, comunícate con el administrador", "warning");
                                            }
                                            
                                    });

                            }else{
                                alert("Complete el formulario");
                              //  swal("","Ingrese los campos con asterísco(*)","warning");
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