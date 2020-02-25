<?php 
include '../config.php';
//session_destroy();
if(isset($_SESSION['id'])){  

    @$id = $_GET['id'];
    $query = pg_query ($conexion, "select * from preguntas where id='".$id."' ");
    $datos = pg_fetch_assoc($query);
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
        <?php include('resource/button.php'); ?>
          <!-- ./col -->
          <div class="col-lg-12 col-12">
            <!-- small box -->
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">CREAR PREGUNTAS DE LA PLANTILLA - <?PHP echo $_GET['nombre'] ?></h3>
              </div>
              <div class="card-body">
                               
             <form>                               
                  
                                <label for="email_address">(*) NOMBRE DE LA PREGUNTA</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="titulo" class="form-control"><?php echo $datos['titulo'] ?></textarea>
                                    </div>
                                </div>
            
                                <!-- <label for="email_address">DESCRIPCION DETALLADA DE LA PREGUNTA (OPCIONAL)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                      <textarea id="nombre" class="form-control"  placeholder="INTRODUZCA UNA DESCRIPCION DETALLADA DE LA PREGUNTA "><?php echo $datos['nombre'] ?></textarea>
                                        
                                    </div>
                                </div> -->
                                <label for="email_address">(*) COMPETENCIA</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="competencia" value="<?php echo $datos['competencia'] ?>" class="form-control" placeholder="INTRODUZCA NOMBRE DE COMPONTENCIA">
                                    </div>
                                </div>
                                <label for="email_address">(*) COMPONENTE</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="componente" value="<?php echo $datos['componente'] ?>" class="form-control" placeholder="INTRODUZCA EL NOMBRE DEL COMPONENTE">
                                    </div>
                                </div>
                                <label for="email_address">(*) PROCEDIMIENTO LÓGICO</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <textarea id="ayuda" class="form-control"><?php echo $datos['ayuda'] ?></textarea>
                                    </div>
                                </div>
                                
                                  <!-- <label for="email_address">ARCHIVO (<b>Opcional</b>)</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="file" id="archivo" class="form-control">
                                        </div>
                                    </div> -->

                                <label for="email_address">(*) ESTADO</label>
                                <div class="form-group">
            
                                    <select class='form-control' id='estado'>
                                        <option value="">SELECCIONE</option>
                                        <option value="1" <?php if($datos['id_estado']==1){ ?>selected='selected'<?php } ?>  >HABILITADO</option>
                                        <option value="2" <?php if($datos['id_estado']==2){ ?>selected='selected'<?php } ?>>DESHABILITADO</option>
                                    </select>
            
                                </div>            
                                <br>
                           
                            </form>
              </div>
              
              <?php if($_GET['modo']==1){ ?>               
                                <button class='btn btn-success' id='guardar'>ACTUALIZAR</button>
                                 <?php }else if($_GET['modo']==2){?>   
                                <button class='btn btn-success' id='eliminar'>ELIMINAR</button>
                                 <?php } ?>   
              
                
            
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
    $(document).ready(function () {               
      
       
      $('#titulo').summernote({
                    callbacks: {
                        onImageUpload: function(files) {
                            for(let i=0; i < files.length; i++) {
                                $.upload(files[i]);
                            }
                        }
                    },
                    height: 500,
                });

                $.upload = function (file) {
                    let out = new FormData();
                    out.append('file', file, file.name);

                    $.ajax({
                        method: 'POST',
                        url: 'upload.php',
                        contentType: false,
                        cache: false,
                        processData: false,
                        data: out,
                        success: function (img) {
                            $('#titulo').summernote('insertImage', img);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error(textStatus + " " + errorThrown);
                        }
                    });
                };

                $('#ayuda').summernote({
                    callbacks: {
                        onImageUpload: function(files) {
                            for(let i=0; i < files.length; i++) {
                                $.upload1(files[i]);
                            }
                        }
                    },
                    height: 500,
                });

                $.upload1 = function (file) {
                    let out = new FormData();
                    out.append('file', file, file.name);

                    $.ajax({
                        method: 'POST',
                        url: 'upload.php',
                        contentType: false,
                        cache: false,
                        processData: false,
                        data: out,
                        success: function (img) {
                            $('#ayuda').summernote('insertImage', img);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error(textStatus + " " + errorThrown);
                        }
                    });
                };


                  $("#guardar").click(function(){

                        var nombre = $("#nombre").val();  
                        var estado = $("#estado").val();
                        var titulo = $('#titulo').summernote("code");
                        var id_pregunta = "<?php echo $_GET['id'] ?>";
                        var ayuda = $("#ayuda").summernote("code");
                        var competencia = $("#competencia").val();
                        var componente = $("#componente").val();
                        var user = 2;

                        var datos ='g_plantilla='+1+'&editar_pregunta='+1+'&nombre='+nombre+'&estado='+estado+'&id_pregunta='+id_pregunta+'&ayuda='+ayuda+'&titulo='+titulo
                        +'&competencia='+competencia+'&componente='+componente;

                            if(titulo!="" && estado!=""){

                                    $.ajax({
                                            type:"POST",
                                            url: "../../app/modelos/funciones.php",
                                            data: datos,
                                            success: function(valor){
                                                if(valor==1){
                                                    alert("Pregunta actualizada correctamente");
                                               // swal("", "Pregunta creada correctamente", "success");
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

                $("#eliminar").click(function(){

                       
                        var id_pregunta = "<?php echo $_GET['id'] ?>";                       

                        var datos ='g_plantilla='+1+'&eliminar_pregunta='+1+'&id_pregunta='+id_pregunta;

                            $.ajax({
                              type:"POST",
                              url: "../../app/modelos/funciones.php",
                              data: datos,
                              success: function(valor){
                                  if(valor==1){
                                      alert("Pregunta eliminada correctamente");                                              
                                  }
                                  else if(valor==3)
                                  alert("El nombre de la pregunta ya se encuentra creado, intente con otro")
                                              
                                  else
                                  alert("Ocurrio un problema aquí, comunícate con el administrador");
                           
                              }
                                            
                            });
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