<?php 
include('../config.php');
//session_destroy();
if($_GET['id']){  

            $s = "select preguntas.id, preguntas.id_archivo, preguntas.titulo, preguntas.id_tipopregunta, preguntas.titulo, preguntas.nombre, plantilla.nombre as plantilla, estado.descripcion as estado, tipopregunta.nombre as tipopregunta
            from estado, preguntas, plantilla, tipopregunta
            where tipopregunta.id=preguntas.id_tipopregunta and estado.id=preguntas.id_estado and preguntas.id_plantilla=plantilla.id and preguntas.id_tipopregunta=tipopregunta.id
            and preguntas.id_estado=1 and preguntas.id_plantilla='".$_GET['id']."'  ";
            $q =pg_query($conexion, $s);
            $r =pg_num_rows($q);
            $sal=0;
                   

    // if(isset($_POST['guardar'])){ // Enviamos la otra pregunta aleatoria.

    //  //  $_SESSION['n_pregunta']+=1;
    // }
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

        <!-- Content Wrapper. Contains page content -->
       
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
                    <?php  
                    if($sal==0){
                        $i =1;

                        while($datos = pg_fetch_assoc($q)){
                        
                                // Recuperamos las opciones de la pregunta
                                $sql = "select opciones.id, plantilla.nombre as plantilla, opciones.nombre, opciones.valor, preguntas.nombre as pregunta
                                from opciones, preguntas, plantilla
                                where opciones.id_pregunta=preguntas.id and preguntas.id_plantilla=plantilla.id
                                and opciones.id_pregunta = '".$datos['id']."' ";
                                $queryd = pg_query($conexion, $sql);
                                $rowsd = pg_num_rows($queryd);

                                
                        ?>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-12">
                             <form name="form1" method="post" action="" class='form'>
                             <h4><b>PREGUNTA N° <?php echo $i;  ?></b></h4>
                                <div><?php echo $datos['titulo'] ?></div>                                
                                <?php if($datos['id_archivo']){
                                        $s1 ="select ruta from archivos where id='".$datos['id_archivo']."' ";
                                        $q1 =pg_query($conexion, $s1);
                                        $r1 = pg_num_rows($q1);
                                        $d1 = pg_fetch_assoc($q1);
                                    ?>
                                    <p aling='center'><img src='<?php echo $serv_arch ?>/files/<?php echo $d1['ruta'] ?>' /></p>
                                <?php } ?>
                                <br>
                                <br>  
                                                    
                                    <?php if($rowsd){ 
                                            while($df = pg_fetch_assoc($queryd)){?>
                                  <input name="intereses" type="radio" value="<?= $df['id'] ?>" /><?php echo $df['nombre'] ?>                         
                            
                                    <?php   } 
                                
                                        } ?> 
                            <!-- <input name="intereses" type="radio" value="rbilibros" />B. I y II solamente.
                            
                            <br />
                            <input name="intereses" type="radio" value="rbiinternet" checked="checked" />C. II solamente.
                            <br />
                            <input name="intereses" type="radio" value="rbiinternet" checked="checked" />D. II y III solamente. -->
                     

                <!-- <input type="submit" name='guardar' id='guardar' class="btn btn-success" value="Guardar y continuar" /> -->
                                    </form>
                </div>
                </div>         
            <!-- /.content -->
        </div>
             <?php  
                    $i++;
            }   
        }else{
            echo "Ya puede salir";
        } 
            
            ?>

               <!-- Modal -->
               <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">SICMATH</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        Bienvenidos a SICMATH ( simulacro ICFES matemáticas). <br> A continuación encontrará  45 preguntas  de selección múltiple con única respuesta.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                        
                        </div>
                        </div>
                    </div>
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