<?php 
    @include '../config.php';
      $delete ="delete resultados where id_user='".$_GET['id_user']."' and id_plantilla='".$_GET['id_plantilla']."' ";
     $query =pg_query($conexion, $delete);
        if($query){
            echo  "EXAMEN ELIMINADO CORRECTAMENTE, CIERRE LA VENTANA Y ACTUALICE LA ANTERIOR";
        }

?>