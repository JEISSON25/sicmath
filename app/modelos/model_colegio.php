<?php
// En desarrollo .
include('comuni.php');
    
    function consul_grado($grado){
       @include '../config.php';
        $sql ="select id from grado where descripcion='".trim($grado)."' ";
        $query=pg_query($conexion, $sql);
        $rows=pg_num_rows($query);
            if($rows)
             return "1";
            else
            return "2";
    }
    function consul_colegio($colegio){
        @include '../config.php';
         $sql ="select id from colegio where descripcion='".trim($colegio)."' ";
         $query=pg_query($conexion, $sql);
         $rows=pg_num_rows($query);
             if($rows)
              return "1";
             else
             return "2";
     }
     function consul_nivel($nivel){
        @include '../config.php';
         $sql ="select id from niveles where descripcion='".trim($nivel)."' ";
         $query=pg_query($conexion, $sql);
         $rows=pg_num_rows($query);
             if($rows)
              return "1";
             else
             return "2";
     }
    function create_grado($grado){ // Crear grado
        @include '../config.php';
        $consul_grado = consul_grado($grado);

            if($consul_grado==2){
                $insert= "insert into grado (descripcion) values('".$grado."') ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
            }else
            return "2";
       
    }

     function editar_grado($grado, $id){ // Crear grado
        @include '../config.php';
        //$consul_colegio = consul_colegio($colegio);

            //if($consul_colegio==1){
                $insert= "update grado SET descripcion='".$grado."' where id='".$id."' ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
            // }else
            // return "2";
       
    }
    function eliminar_grado($id){ // Crear grado
        @include '../config.php';
        //$consul_colegio = consul_colegio($colegio);

            //if($consul_colegio==2){
                $insert= "delete from grado where id='".$id."' ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
          /*  }else
            return "2";*/
       
    }

    function create_colegio($colegio){ // Crear grado
        @include '../config.php';
        $consul_colegio = consul_colegio($colegio);

            if($consul_colegio==2){
                $insert= "insert into colegio (descripcion) values('".$colegio."') ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
            }else
            return "2";
       
    }

    function editar_colegio($colegio, $id){ // Crear grado
        @include '../config.php';
        //$consul_colegio = consul_colegio($colegio);

            //if($consul_colegio==1){
                $insert= "update colegio SET descripcion='".$colegio."' where id='".$id."' ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
            // }else
            // return "2";
       
    }
    function eliminar_colegio($id){ // Crear grado
        @include '../config.php';
        //$consul_colegio = consul_colegio($colegio);

            //if($consul_colegio==2){
                $insert= "delete from colegio where id='".$id."' ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
          /*  }else
            return "2";*/
       
    }

    function create_nivel($nivel, $min, $max){ // Crear nivel
        @include '../config.php';
        $consul_nivel = consul_nivel($nivel);

            if($consul_nivel==2){
                $insert= "insert into niveles (descripcion, min, max) values('".$nivel."', '".$min."', '".$max."') ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
            }else
            return "2";
       
    }

    function editar_nivel($nivel, $max, $min, $id){ // Crear grado
        @include '../config.php';
       // $consul_colegio = consul_colegio($colegio);

            //if($consul_colegio==1){
                $insert= "update niveles SET descripcion='".$nivel."', max='".$max."', min='".$min."' where id='".$id."' ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
            // }else
            // return "2";
       
    }
    function eliminar_nivel($id){ // Crear grado
        @include '../config.php';
      //  $consul_colegio = consul_colegio($colegio);

            //if($consul_colegio==2){
                $insert= "delete from niveles where id='".$id."' ";
                $query = pg_query($conexion, $insert);
                    if($query)
                    return "1";
                    else
                    return "3";
          /*  }else
            return "2";*/
       
    }

    // Visualizaciones

    function ver_colegio(){
        include '../config.php';
        $sql="select * from colegio";
       $query = pg_query($conexion, $sql);

       $tabla = "";
       $i=1;
               while($datos=pg_fetch_assoc($query)){

                   $resp = "";
                $accion= '<a href=\"editar_colegio.php?modo=1&id='.$datos["id"].'&nombre='.($datos['descripcion']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Editar Colegio</p></a> | <a href=\"editar_colegio.php?modo=2&id='.$datos["id"].'&nombre='.($datos['descripcion']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Eliminar Colegio</p></a>';
                    $tabla.='{ 
                                 "#":"'.$i.'",      
                                 "colegio":"'.$datos['descripcion'].'",                                                                   
                                 "accion":"'.$accion.'"
                         },';
                        // $data['data'][] = $tabla;
                         $i++;
                   }
                   //echo json_encode($data);
                   $tabla= substr($tabla,0, strlen($tabla) -1);
                   echo '{"data": ['.$tabla.']}';
    }

    function ver_grado(){
        include '../config.php';
        $sql="select * from grado order by descripcion";
       $query = pg_query($conexion, $sql);

       $tabla = "";
       $i=1;
               while($datos=pg_fetch_assoc($query)){

                   $resp = "";
                $accion= '<a href=\"editar_grado.php?modo=1&id='.$datos["id"].'&nombre='.($datos['descripcion']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Editar Grado</p></a> | <a href=\"editar_grado.php?modo=2&id='.$datos["id"].'&nombre='.($datos['descripcion']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Eliminar Grado</p></a>';
                    $tabla.='{ 
                                 "#":"'.$i.'",      
                                 "grado":"'.$datos['descripcion'].'",                                                                   
                                 "accion":"'.$accion.'"
                         },';
                        // $data['data'][] = $tabla;
                         $i++;
                   }
                   //echo json_encode($data);
                   $tabla= substr($tabla,0, strlen($tabla) -1);
                   echo '{"data": ['.$tabla.']}';
    }
    
    function ver_niveles(){
        include '../config.php';
        $sql="select * from niveles";
       $query = pg_query($conexion, $sql);

       $tabla = "";
       $i=1;
               while($datos=pg_fetch_assoc($query)){

                   $resp = "";
                $accion= '<a href=\"editar_nivel.php?modo=1&id='.$datos["id"].'&nombre='.($datos['descripcion']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Editar Nivel</p></a> | <a href=\"editar_nivel.php?modo=2&id='.$datos["id"].'&nombre='.($datos['descripcion']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Eliminar Nivel</p></a>';
                    $tabla.='{ 
                                 "#":"'.$i.'",      
                                 "nivel":"'.$datos['descripcion'].'",
                                 "min":"'.$datos['min'].'",
                                 "max":"'.$datos['max'].'",                                                                   
                                 "accion":"'.$accion.'"
                         },';
                        // $data['data'][] = $tabla;
                         $i++;
                   }
                   //echo json_encode($data);
                   $tabla= substr($tabla,0, strlen($tabla) -1);
                   echo '{"data": ['.$tabla.']}';
    }

 
?>