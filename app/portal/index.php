<?php 
include('../config.php');
//session_destroy();
if(isset($_SESSION['id'])){  
        if($_SESSION['tipouser']==2) {

        ?>
           <script>
                parent.location='index2.php';
           </script> 
        <?php  
        } 
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
        <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
            <!-- Left navbar links -->
        

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
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                    
                        <p>GESTIÓN DE USUARIOS</p>
                    </div>
                    <div class="icon">
                            <i class="ion ion-person-add"></i>
                    
                    </div>
                    <a href="g_usuarios.php" class="small-box-footer">Hazme clic <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <p>GESTIÓN DE PLANTILLAS</p>
                    </div>
                    <div class="icon">
                            <i class="ion ion-bag"></i>
                    
                    </div>
                    <a href="g_plantillas.php" class="small-box-footer">Hazme clic <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                    <div class="inner">
                        

                        <p>GESTIÓN DE NIVELES</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="g_niveles.php" class="small-box-footer">Hazme clic <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                    <div class="inner">
                        

                        <p>GESTIÓN DE RESULTADOS</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="g_resultados.php" class="small-box-footer">Hazme clic <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                    <div class="inner">
                        

                        <p>GESTIÓN DE GRADOS</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="g_grados.php" class="small-box-footer">Hazme clic <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-8">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                    <div class="inner">
                        

                        <p>GESTIÓN DE COLEGIOS</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="g_colegios.php" class="small-box-footer">Hazme clic <i class="fas fa-arrow-circle-right"></i></a>
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
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        </body>
        </html>
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