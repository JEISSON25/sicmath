<?php 
include '../config.php';
//session_destroy();
if(isset($_SESSION['id'])){  

    @$id = $_GET['id'];
    $query = pg_query ($conexion, "select * from opciones where id='".$id."' ");
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
    <!-- Left navbar links -->
    <!--<ul class="navbar-nav">-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>-->
    <!--  </li>-->
    <!--  <li class="nav-item d-none d-sm-inline-block">-->
    <!--    <a href="index3.html" class="nav-link">Home</a>-->
    <!--  </li>-->
    <!--  <li class="nav-item d-none d-sm-inline-block">-->
    <!--    <a href="#" class="nav-link">Contact</a>-->
    <!--  </li>-->
    <!--</ul>-->

    <!-- SEARCH FORM -->
    <!--<form class="form-inline ml-3">-->
    <!--  <div class="input-group input-group-sm">-->
    <!--    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
    <!--    <div class="input-group-append">-->
    <!--      <button class="btn btn-navbar" type="submit">-->
    <!--        <i class="fas fa-search"></i>-->
    <!--      </button>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</form>-->

    <!-- Right navbar links -->
    <!--<ul class="navbar-nav ml-auto">-->
      <!-- Messages Dropdown Menu -->
    <!--  <li class="nav-item dropdown">-->
    <!--    <a class="nav-link" data-toggle="dropdown" href="#">-->
    <!--      <i class="far fa-comments"></i>-->
    <!--      <span class="badge badge-danger navbar-badge">3</span>-->
    <!--    </a>-->
    <!--    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
    <!--      <a href="#" class="dropdown-item">-->
            <!-- Message Start -->
    <!--        <div class="media">-->
    <!--          <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">-->
    <!--          <div class="media-body">-->
    <!--            <h3 class="dropdown-item-title">-->
    <!--              Brad Diesel-->
    <!--              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
    <!--            </h3>-->
    <!--            <p class="text-sm">Call me whenever you can...</p>-->
    <!--            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
    <!--          </div>-->
    <!--        </div>-->
            <!-- Message End -->
    <!--      </a>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item">-->
            <!-- Message Start -->
    <!--        <div class="media">-->
    <!--          <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
    <!--          <div class="media-body">-->
    <!--            <h3 class="dropdown-item-title">-->
    <!--              John Pierce-->
    <!--              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
    <!--            </h3>-->
    <!--            <p class="text-sm">I got your message bro</p>-->
    <!--            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
    <!--          </div>-->
    <!--        </div>-->
            <!-- Message End -->
    <!--      </a>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item">-->
            <!-- Message Start -->
    <!--        <div class="media">-->
    <!--          <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
    <!--          <div class="media-body">-->
    <!--            <h3 class="dropdown-item-title">-->
    <!--              Nora Silvester-->
    <!--              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
    <!--            </h3>-->
    <!--            <p class="text-sm">The subject goes here</p>-->
    <!--            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
    <!--          </div>-->
    <!--        </div>-->
            <!-- Message End -->
    <!--      </a>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
    <!--    </div>-->
    <!--  </li>-->
      <!-- Notifications Dropdown Menu -->
    <!--  <li class="nav-item dropdown">-->
    <!--    <a class="nav-link" data-toggle="dropdown" href="#">-->
    <!--      <i class="far fa-bell"></i>-->
    <!--      <span class="badge badge-warning navbar-badge">15</span>-->
    <!--    </a>-->
    <!--    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
    <!--      <span class="dropdown-item dropdown-header">15 Notifications</span>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item">-->
    <!--        <i class="fas fa-envelope mr-2"></i> 4 new messages-->
    <!--        <span class="float-right text-muted text-sm">3 mins</span>-->
    <!--      </a>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item">-->
    <!--        <i class="fas fa-users mr-2"></i> 8 friend requests-->
    <!--        <span class="float-right text-muted text-sm">12 hours</span>-->
    <!--      </a>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item">-->
    <!--        <i class="fas fa-file mr-2"></i> 3 new reports-->
    <!--        <span class="float-right text-muted text-sm">2 days</span>-->
    <!--      </a>-->
    <!--      <div class="dropdown-divider"></div>-->
    <!--      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
    <!--    </div>-->
    <!--  </li>-->
    <!--  <li class="nav-item">-->
    <!--    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">-->
    <!--      <i class="fas fa-th-large"></i>-->
    <!--    </a>-->
    <!--  </li>-->
    <!--</ul>-->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include ('header.php') ?>
    <!-- /.content-header -->

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
                <h3 class="card-title">EDITAR OPCIONES DE LA PREGUNTA - <?php echo $_GET['nombre'] ?></h3>
              </div>
              <div class="card-body">
                               
                     <form>     
                                
                                <!-- <div class="form-group">
                                <label for="tipo">(*) TIPO DE OPCIÓN</label>
                                    <select class='form-control' id='tipo'>
                                        <option value="" >SELECCIONE</option>                                       
                    <option value="1" <?php if($datos['id_tipo']==1){ ?>selected<?php } ?>>TEXTO</option>
                    <option value="2" <?php if($datos['id_tipo']==2){ ?>selected<?php } ?>>IMAGEN</option>                                       
                                    </select>                                
                                </div> -->
                                <div class="form-group" id='text_opcion'>
                                   <label for="nombre">(*) NOMBRE LA OPCIÓN</label>
                                    <div class="form-line">
                                       <textarea id="nombre" class="form-control"><?php echo $datos['nombre'] ?></textarea>
                                    </div>
                                </div>

                                <!-- <div class="form-group" id='arch_opcion'>
                                <label for="archivo">ARCHIVO (<b>Opcional</b>)</label>
                                    <div class="form-line">
                                     <input type="file" id="archivo" class="form-control">
                                    </div>
                                </div> -->
                               
                                <div class="form-group">
                                <label for="valor">VALOR (<b>Opcional</b>)</label>
                                    <div class="form-line">
                                        <input type="number" id="valor" value="<?php echo $datos['valor'] ?>" class="form-control" placeholder="INTRODUZCA VALOR">
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                <label for="resp_correcta">¿RESPUESTA CORRECTA?</label>
                                    <div class="form-line">
                                       <select class='form-control' id='resp_correcta'>
                                          <option value=" ">SELECCIONE</option>
                                          <option value="1">SI</option>
                                          <option value="2">NO</option> 
                                       </select>
                                    </div>
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

       
        // // Header
        // $("#header_app").load('../template/header.html');
        // // Menú
        // $("#menu_app").load('../template/menu.html');


            $('#nombre').summernote({
                    callbacks: {
                        onImageUpload: function(files) {
                            for(let i=0; i < files.length; i++) {
                                $.upload(files[i]);
                            }
                        }
                    },
                    toolbar: [
                      
                      ['style', ['bold', 'italic', 'underline', 'clear', 'subscript', 'superscript']],
                      ['color', ['color']],
                      ['group1', ['table', 'picture', 'codeview']],
                      ['para', ['ul', 'ol', 'paragraph']],
                     
                    ],
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
                            $('#nombre').summernote('insertImage', img);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error(textStatus + " " + errorThrown);
                        }
                    });
                };


                 $("#nombre_plan").html($.get("nombre"));

                  $("#guardar").click(function(){

                        var nombre = $("#nombre").summernote("code");                 
                        var valor = $("#valor").val();                      
                        var id_pregunta= id;
                        var user = 2;
                        var resp_correcta = $("#resp_correcta").val();
                        var tipo = $("#tipo").val();
                        var id= "<?php echo $id ?>";

                        var datos ='g_plantilla='+1+'&editar_opcion='+1+'&nombre='+nombre+'&id_pregunta='+id_pregunta+'&valor='+valor+'&resp_correcta='+resp_correcta+'&id='+id;

                            if(tipo !=""){
                                  if(tipo == 1 && nombre==""){
                                       alert("Ingrese los campos con asterísco(*)");
                                       return false;
                                  }
                                
                                    $.ajax({
                                            type:"POST",
                                            url: "../../app/modelos/funciones.php",
                                            data: datos,
                                            success: function(valor){
                                                if(valor==1){
                                                    alert("Opción actualizada correctamente");
                                                //swal("", "Opción creada correctamente", "success");
                                                
                                                }
                                                else if(valor==3)
                                                alert("El nombre de la opción ya se encuentra creado, intente con otro");
                                                //swal("Ops", "El nombre de la opción ya se encuentra creado, intente con otro", "warning");
                                                else
                                                alert("Ocurrio un problema aquí, comunícate con el administrador");
                                                //swal("Ops", "Ocurrio un problema aquí, comunícate con el administrador", "warning");
                                            }
                                            
                                    });

                            }else{
                               alert("Seleccione tipo de opción");
                            }
                });

                $("#eliminar").click(function(){
                       
                        var id= "<?php echo $id ?>";
                        var datos ='g_plantilla='+1+'&elim_opcion='+1+'&id='+id;

                            
                                
                                    $.ajax({
                                            type:"POST",
                                            url: "../../app/modelos/funciones.php",
                                            data: datos,
                                            success: function(valor){
                                                if(valor==1){
                                                    alert("Opción eliminada correctamente");
                                                }
                                                else if(valor==3)
                                                alert("El nombre de la opción ya se encuentra creado, intente con otro");
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