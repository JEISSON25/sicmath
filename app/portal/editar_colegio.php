<?php 
include '../config.php';
//session_destroy();
if(isset($_SESSION['id'])){  

    @$id = $_GET['id'];
    if (!$id)
    $id = $_SESSION['id'];

    $query = pg_query ($conexion, "select * from colegio where id='".$id."' ");
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
                   
                <h3 class="card-title"><?php if($_GET['modo']==1){ ?> EDITAR <?php }else if($_GET['modo']==2){?> ELIMINAR <?php } ?>    COLEGIO</h3>
              </div>
              <div class="card-body">                               
                                    
                         
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" id='colegio' value="<?php echo  $datos['descripcion'] ?>"  placeholder="Nombre del colegio" >
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                        </div>
                                                <br>
                                 <?php if($_GET['modo']==1){ ?>               
                                <button class='btn btn-success' id='guardar'>ACTUALIZAR</button>
                                 <?php }else if($_GET['modo']==2){?>   
                                <button class='btn btn-success' id='eliminar'>ELIMINAR</button>
                                 <?php } ?>   
                            
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

$(document).ready(function () {
        /*$('.js-basic-example').DataTable({
            
        });*/

        //var datos1='g_plantilla='+1+'&listar='+1;
        
        
        // // Header
        // $("#header_app").load('../template/header.html');
        // // Menú
        // $("#menu_app").load('../template/menu.html');
        
                $("#guardar").click(function(){
                          var colegio = $("#colegio").val();  
                          var id= "<?php echo $id ?>";

                              if(colegio!=""){
  
                                    var datos='g_colegio='+1+'&editar_colegio='+1+'&colegio='+colegio+'&id='+id;
                                     $.ajax({
                                       type: "POST",
                                       data: datos,
                                       url: "../../app/modelos/funciones.php",
                                       success: function (valor){
                                          if(valor==1){
                                                 alert("colegio actualizado correctamente");                                                 
                                                }
                                                else if(valor==2)
                                                alert ("El nombre del colegio ya se encuentra creado, intente con otro");
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

                $("#eliminar").click(function(){
                        
                          var id= "<?php echo $id ?>";
  
                                    var datos='g_colegio='+1+'&eliminar_colegio='+1+'&id='+id;
                                     $.ajax({
                                       type: "POST",
                                       data: datos,
                                       url: "../../app/modelos/funciones.php",
                                       success: function (valor){
                                          if(valor==1){
                                                 alert("colegio eliminado correctamente");                                                 
                                                }
                                                else if(valor==2)
                                                alert ("El nombre del colegio ya se encuentra creado, intente con otro");
                                                //swal("Ops", "El nombre de la plantilla ya se encuentra creado, intente con otro", "warning");
                                                else
                                                alert("No puedes eliminar este colegio, porque se encuentra con usuarios inscritos, deberas primero eliminar los usuarios");
                                               // swal("Ops", "Ocurrio un problema aquí, comunícate con el administrador", "warning");
                                            }
                                            
                                    });

                            // }else{
                            //     alert("Ingrese los campso con asterisco(*)");
                            //    // swal("","Ingrese los campos con asterísco(*)","warning");
                            // }
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