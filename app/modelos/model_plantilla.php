<?php 
    
    function visual_plantilla($id){
             include '../config.php';

            // Nombre de la plantilla 
            $sql ="select * from plantilla where id='".$id."' ";
            $query=pg_query($conexion, $sql);
            $rows=pg_num_rows($query);
                if($rows){
                        $datos = pg_fetch_assoc($query);
                        // Buscamos si existen preguntas
                        $sql2="select * from preguntas where id_plantilla='".$id."' ";
                        $query2 = pg_query($conexion, $sql2);
                        $rows2=pg_num_rows($query2);
                                if($rows2){
                                    include('plantilla.php'); // Mostramos la plantila con sus preguntas..

                                }else{
                                    return "No existen preguntas formuladas en ésta plantilla "; // NO existen preguntas aún. 
                                }
                }else {
                    return "Ocurrio un problema aquí, comunícate con el administrador"; // PLantilla No existe.
                }


    }
    
    
    function ver_plantillas(){
            include '../config.php';
            $sql="select plantilla.id, plantilla.nombre, plantilla.descripcion, tipo_plantilla.descripcion as tipoplantilla, estado.descripcion as estado, plantilla.cant_preguntas
            from plantilla, tipo_plantilla, estado where plantilla.tipo=tipo_plantilla.id and plantilla.id_estado=estado.id
            ";
            $query = pg_query($conexion, $sql);

            $tabla = "";
            $i=1;
                    while($datos=pg_fetch_assoc($query)){

                         $s="select * from preguntas where id_plantilla='".$datos['id']."' ";
                        $q=pg_query($conexion, $s);
                        $r=pg_num_rows($q);

                        $n_preguntas = $r;
                     $accion= '<a href=\"crear_preguntas.php?id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">CREAR PREGUNTAS </a>| <a href=\"editar_plantilla.php?modo=1&id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">EDITAR  </a> | <a href=\"editar_plantilla.php?modo=2&id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">ELIMINAR </a>';
                     $accion2= '<a target=\"_blank\" href=\"ver_cuestionario.php?modo=1&id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">VISTA PREVIA </a>';
                         $tabla.='{ 
                                      "#":"'.$i.'",
                                      "nombre":"'.($datos['nombre']).'",
                                      "descripcion":"'.($datos['descripcion']).'",
                                      "tipo":"'.$datos['tipoplantilla'].'",
                                      "estado":"'.$datos['estado'].'",
                                      "n_preguntas":"'.$n_preguntas.'",
                                      "cant_preguntas":"'.$datos['cant_preguntas'].'",
                                      "accion":"'.$accion.'",
                                      "accion2":"'.$accion2.'"
                              },';
                             // $data['data'][] = $tabla;
                              $i++;
                        }
                        //echo json_encode($data);
                        $tabla= substr($tabla,0, strlen($tabla) -1);
                        echo '{"data": ['.$tabla.']}';

    }

    function ver_plantillas_estu(){
        include '../config.php';
        $sql="select plantilla.id, plantilla.nombre, plantilla.descripcion, tipo_plantilla.descripcion as tipoplantilla, estado.descripcion as estado, plantilla.cant_preguntas
        from plantilla, tipo_plantilla, estado where plantilla.tipo=tipo_plantilla.id and plantilla.id_estado=estado.id and plantilla.id_estado=1
        ";
        $query = pg_query($conexion, $sql);

        $tabla = "";
        $i=1;
                while($datos=pg_fetch_assoc($query)){

                     $s="select * from preguntas where id_plantilla='".$datos['id']."' ";
                    $q=pg_query($conexion, $s);
                    $r=pg_num_rows($q);

                    $n_preguntas = $r;
                 $accion= '<a href=\"cuestionario.php?id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">REALIZAR EXAMEN';
                     $tabla.='{ 
                                  "#":"'.$i.'",
                                  "nombre":"'.($datos['nombre']).'",
                                  "descripcion":"'.($datos['descripcion']).'",
                                  "accion":"'.$accion.'"
                          },';
                         // $data['data'][] = $tabla;
                          $i++;
                    }
                    //echo json_encode($data);
                    $tabla= substr($tabla,0, strlen($tabla) -1);
                    echo '{"data": ['.$tabla.']}';

}

function ver_plantillas_estu4(){
    include '../config.php';
    $sql="select plantilla.id, plantilla.nombre, plantilla.descripcion, tipo_plantilla.descripcion as tipoplantilla, estado.descripcion as estado, plantilla.cant_preguntas
    from plantilla, tipo_plantilla, estado where plantilla.tipo=tipo_plantilla.id and plantilla.id_estado=estado.id and plantilla.id_estado=1
    ";
    $query = pg_query($conexion, $sql);

    $tabla = "";
    $i=1;
            while($datos=pg_fetch_assoc($query)){

                 $s="select * from preguntas where id_plantilla='".$datos['id']."' ";
                $q=pg_query($conexion, $s);
                $r=pg_num_rows($q);

                $n_preguntas = $r;
             $accion= '<a href=\"mis_resultados1.php?id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">VER RESULTADOS';
                 $tabla.='{ 
                              "#":"'.$i.'",
                              "nombre":"'.($datos['nombre']).'",
                              "descripcion":"'.($datos['descripcion']).'",
                              "accion":"'.$accion.'"
                      },';
                     // $data['data'][] = $tabla;
                      $i++;
                }
                //echo json_encode($data);
                $tabla= substr($tabla,0, strlen($tabla) -1);
                echo '{"data": ['.$tabla.']}';

}
function ver_plantillas_estu2(){
    include '../config.php';
    $sql="select plantilla.id, plantilla.nombre, plantilla.descripcion, tipo_plantilla.descripcion as tipoplantilla, estado.descripcion as estado, plantilla.cant_preguntas
    from plantilla, tipo_plantilla, estado where plantilla.tipo=tipo_plantilla.id and plantilla.id_estado=estado.id and plantilla.id_estado=1
    ";
    $query = pg_query($conexion, $sql);

    $tabla = "";
    $i=1;
            while($datos=pg_fetch_assoc($query)){

                 $s="select * from preguntas where id_plantilla='".$datos['id']."' ";
                $q=pg_query($conexion, $s);
                $r=pg_num_rows($q);

                $n_preguntas = $r;
                $accion= '<a href=\"ver_estu_examen.php?id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">VER ESTUDIANTES';
                $tabla.='{ 
                              "#":"'.$i.'",
                              "nombre":"'.($datos['nombre']).'",
                              "descripcion":"'.($datos['descripcion']).'",
                              "accion":"'.$accion.'"
                      },';
                     // $data['data'][] = $tabla;
                      $i++;
                }
                //echo json_encode($data);
                $tabla= substr($tabla,0, strlen($tabla) -1);
                echo '{"data": ['.$tabla.']}';

}



function ver_plantillas_estu3($id){ // Ver examenes del estudiante realizado
    include '../config.php';
    $sql="select users.nombre, users.apellidos, users.id, niveles.descripcion as nivel, nivel_users.acertadas
    from  plantilla, users, nivel_users, niveles
    where nivel_users.id_user=users.id and nivel_users.id_nivel=niveles.id 
    and plantilla.id='".$id."'
    ";
    $query = pg_query($conexion, $sql);

    $tabla = "";
    $i=1;
            while($datos=pg_fetch_assoc($query)){
                $acertadas = $datos['acertadas']."/45";
                $lupa = '<a href=\"#" title=\"Ver resultado\">Ver resultado</a>';
                $accion= '<a href=\"eliminar_examen.php?id_plantilla='.$id.'&id_user='.($datos['id']).'\"  target=\"_blank\"  tittle=\"Revisar\">ELIMINAR';
                $tabla.='{ 
                            "#":"'.$i.'",
                            "nombre":"'.($datos['nombre']).'",
                            "nivel":"'.$datos['nivel'].' ('.$acertadas.')'. '",
                            "accion":"'.$accion.'"
                },';
                     // $data['data'][] = $tabla;
                      $i++;
                }
                //echo json_encode($data);
                $tabla= substr($tabla,0, strlen($tabla) -1);
                echo '{"data": ['.$tabla.']}';

}

function list_estu_examen(){
    include '../config.php';
    $sql="select plantilla.id, plantilla.nombre, plantilla.descripcion, tipo_plantilla.descripcion as tipoplantilla, estado.descripcion as estado, plantilla.cant_preguntas
    from plantilla, tipo_plantilla, estado where plantilla.tipo=tipo_plantilla.id and plantilla.id_estado=estado.id and plantilla.id_estado=1
    ";
    $query = pg_query($conexion, $sql);

    $tabla = "";
    $i=1;
            while($datos=pg_fetch_assoc($query)){

                 $s="select * from preguntas where id_plantilla='".$datos['id']."' ";
                $q=pg_query($conexion, $s);
                $r=pg_num_rows($q);

                $n_preguntas = $r;
                $accion= '<a href=\"ver_estu_examen.php?id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\">VER ESTUDIANTES';
                $tabla.='{ 
                              "#":"'.$i.'",
                              "nombre":"'.($datos['nombre']).'",
                              "descripcion":"'.($datos['descripcion']).'",
                              "accion":"'.$accion.'"
                      },';
                     // $data['data'][] = $tabla;
                      $i++;
                }
                //echo json_encode($data);
                $tabla= substr($tabla,0, strlen($tabla) -1);
                echo '{"data": ['.$tabla.']}';

}

    function ver_preguntas($id){
        include '../config.php';
            $sql="select preguntas.id, preguntas.id_tipopregunta, preguntas.titulo_plano as titulo, preguntas.nombre, plantilla.nombre as plantilla, estado.descripcion as estado, tipopregunta.nombre as tipopregunta
            from estado, preguntas, plantilla, tipopregunta
            where tipopregunta.id=preguntas.id_tipopregunta and estado.id=preguntas.id_estado and preguntas.id_plantilla=plantilla.id and preguntas.id_tipopregunta=tipopregunta.id
            and preguntas.id_plantilla='".$id."' ";
            $query = pg_query($conexion, $sql);

            $tabla = "";
            $i=1;
                    while($datos=pg_fetch_assoc($query)){

                        $s="select * from opciones where id_pregunta='".$datos['id']."' ";
                        $q=pg_query($conexion, $s);
                        $r=pg_num_rows($q);

                        $s2="select opciones.nombre_plano as nombre from opciones, resp_pregunta where resp_pregunta.id_opcion=opciones.id and resp_pregunta.id_pregunta='".$datos['id']."' ";
                        $q2=pg_query($conexion, $s2);
                        $r2=pg_num_rows($q2);
                            if($r2==0)
                            $resp = "<font color=red><b>NO DISPONIBLE</b></font>";
                            else {
                                $d2 =pg_fetch_assoc($q2);
                                $resp = $d2['nombre'];
                            }

                     $accion= '<a href=\"editar_pregunta.php?modo=1&id='.$datos["id"].'&nombre='.base64_encode($datos['titulo']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Editar</p></a> | <a href=\"editar_pregunta.php?modo=2&id='.$datos["id"].'&nombre='.base64_encode($datos['titulo']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Eliminar</p></a> ';
                     $accion2= '<a href=\"crear_opciones.php?id='.$datos["id"].'&nombre='.base64_encode($datos['titulo']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Crear opciones</p></a> ';
                        
                     $tabla.='{ 
                                      "#":"'.$i.'",
                                      "titulo":"'.rtrim($datos['titulo']).'",
                                      "nombre":"'.($datos['nombre']).'",
                                      "tipo":"'.$datos['tipopregunta'].'",
                                      "estado":"'.$datos['estado'].'",
                                      "respuesta":"'.$resp.'",
                                      "plantilla":"'.$datos['plantilla'].'",
                                      "opciones":"'.$r.'",
                                      "accion":"'.$accion.'",
                                      "accion2":"'.$accion2.'"
                              },';
                             // $data['data'][] = $tabla;
                              $i++;
                        }
                        //echo json_encode($data);
                        $tabla= substr($tabla,0, strlen($tabla) -1);
                        echo '{"data": ['.$tabla.']}';

    }

    function ver_opciones($id){
        include '../config.php';
             $sql="select opciones.id, plantilla.nombre as plantilla, opciones.nombre_plano as nombre, opciones.valor, preguntas.titulo_plano as pregunta
             from opciones, preguntas, plantilla
             where opciones.id_pregunta=preguntas.id and preguntas.id_plantilla=plantilla.id
             and opciones.id_pregunta = '".$id."'
             ";
            $query = pg_query($conexion, $sql);

            $tabla = "";
            $i=1;
                    while($datos=pg_fetch_assoc($query)){

                        $resp = "";
                     $accion= '<a href=\"editar_opcion.php?modo=1&id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Editar opción</p></a> | <a href=\"editar_opcion.php?modo=2&id='.$datos["id"].'&nombre='.($datos['nombre']).'\" tittle=\"Revisar\"><p class=\"icon-note lg\">Eliminar opción</p></a> ';
                         $tabla.='{ 
                                      "#":"'.$i.'",                                      
                                      "nombre":"'.($datos['nombre']).'",
                                      "plantilla":"'.$datos['plantilla'].'",
                                      "valor":"'.$datos['valor'].'",
                                      "pregunta":"'.$datos['pregunta'].'",                                      
                                      "accion":"'.$accion.'"
                              },';
                             // $data['data'][] = $tabla;
                              $i++;
                        }
                        //echo json_encode($data);
                        $tabla= substr($tabla,0, strlen($tabla) -1);
                        echo '{"data": ['.$tabla.']}';

    }
    function consul_plantilla ($nombre, $tipo){
        @include '../config.php';
        $sql = "select * from plantilla where nombre='".($nombre)."' and tipo='".$tipo."' ";
        $query=pg_query($conexion, $sql);
        $rows=pg_num_rows($query);
                if($rows)
                return "1";
                else {
                    return "2";
                }
    }
    function consul_plantilla2 ($id){
        @include '../config.php';
        $sql = "select * from plantilla where id='".$id."' ";
        $query=pg_query($conexion, $sql);
        $rows=pg_num_rows($query);
                if($rows)
                return "1";
                else {
                    return "2";
                }
    }
    function crear_plantilla($nombre, $descripcion, $tipo, $estado, $user, $cant_preguntas){
        @include '../config.php';
        $valida_plant = consul_plantilla($nombre,$tipo);
                if($valida_plant==2){

                    // $in = "insert into plantilla (nombre, descripcion, tipo, id_estado, id_user) 
                     $in = "insert into plantilla (nombre, descripcion, tipo, id_estado, cant_preguntas) 
                    values('".($nombre)."', '".($descripcion)."', '".$tipo."', '".$estado."', '".$cant_preguntas."') ";
                    $qin=pg_query($conexion, $in);

                        if($qin)
                        return "1";
                        else {
                            return "2";
                        }
                }else {
                    return "3"; // Nombre ya existe
                }
    }

    function editar_plantilla($nombre, $descripcion, $tipo, $estado, $cant_preguntas, $id){
          @include '../config.php';
           $valida_plant = consul_plantilla2($id);
             if($valida_plant==1){
                    $up = "update plantilla set nombre='".$nombre."', tipo='".$tipo."', id_estado='".$estado."',
                    descripcion='".$descripcion."', cant_preguntas='".$cant_preguntas."' where id='".$id."' ";
                    $qup=pg_query($conexion, $up);
                        if($qup)
                          return "1";
                        else 
                          return "2";
             }else {
                 return "2"; // Planillta no existe..
             }
    }
    function elim_plantilla($id){
        @include '../config.php';
           //$valida_plant = consul_plantilla($nombre,$tipo);
             //if($valida_plant==1){
                    $up = "delete from plantilla where id='".$id."' ";
                    $qup=pg_query($conexion, $up);
                        if($qup)
                        return "1";
                        else
                        return "2";
            /* }else {
                 return "2"; // Planillta no existe..
             }*/
    }

// --------------------------------------------------------------------------------------------------------
    // Permisos de plantilla
    function permisos_usu($id, $user){
        $sql = "select * from permisos_plant where id_plantilla='".$id."' and id_user='".$user."' ";
        $query=pg_query($conexion, $sql);
        $rows=pg_num_rows($query);
                if($rows) // Usuario ya esta con algun permiso.
                return "1";
                else {
                    return "2";
                }
    }

    function permisos_plant($id, $user, $estado, $nombre, $tipo){
         @include '../config.php';
           $valida_plant = consul_plantilla($nombre,$tipo);
            if($valida_plant==1){

                    $validar_perms_usu = permisos_usu($id,$user);
                        if($validar_perms_usu==1)
                         $up= "update permisos_plant set id_estado='".$estado."' where id_plantilla='".$id."' and id_user='".$user."'  ";
                         else
                         $up = "insert into permisos_plant (id_plantilla, id_user, id_estado) values('".$id."', '".$user."', '".$estado."' ) ";

                        $qup=pg_query($conexion, $up);
               

            }else {
                 return "2"; // Planillta no existe..
            }
    }




    // --------------------------------------------------------------------------------------------------------
    // Preguntas de plantilla

    function consul_pregunta ($id, $tipo, $titulo){
        @include '../config.php';
        $sql = "select * from preguntas where titulo_plano='".($titulo)."' and id_tipopregunta='".$tipo."' and id_plantilla='".$id."' ";
        $query=pg_query($conexion, $sql);
        $rows=pg_num_rows($query);
                if($rows)
                return "2"; // Pregunta existe
                else {
                    return "1";
                }

    }
     function crear_pregunta($id, $tipo, $estado, $titulo, $nombre = '', $ayuda, $competencia, $componente, $plainText){
          @include '../config.php';
         $validar_pregunt = consul_pregunta($id, $tipo, $plainText);
         $validar_pregunt=1; // Quitamos validación
            if($validar_pregunt==1){
                if(isset($_SESSION['id_archivo'])){
                  //  echo "Entró aquí";
                $id_archivo  = $_SESSION['id_archivo'];
                }
                else
                $id_archivo=0; // No tiene archivo adjunto.

                //echo "id_archivo". $id_archivo;

               $in = "insert into preguntas (id_plantilla, id_tipopregunta, id_estado, titulo, nombre, ayuda, competencia, componente, id_archivo, titulo_plano)
                values('".$id."', '".$tipo."', '".$estado."', '".($titulo)."',  '".$nombre."', '".$ayuda."', '".$competencia."', '".$componente."', '".$id_archivo."', '".($plainText)."') ";
                 $qin = pg_query($conexion, $in);

                 if(isset($_SESSION['id_archivo'])){
                    @session_unset($_SESSION['id_archivo']); // Borramos de id para archivos.
                    $_SESSION['id_archivo'] =""; // Borramos de id para archivos.
                 }
                 
                        if($qin)
                        return "1";
                        else {
                            return "2";
                        }
            }else {
                return "3"; // PRegnta ya existe.
            }

     }
     function editar_pregunta($id, $estado, $titulo, $nombre, $ayuda, $competencia, $componente){

        @include '../config.php';
        //$validar_pregunt = consul_pregunta($id, $tipo, $titulo);
          
               if(isset($_SESSION['id_archivo'])){
                 //  echo "Entró aquí";
               $id_archivo  = $_SESSION['id_archivo'];
               }
               else
               $id_archivo=0; // No tiene archivo adjunto.

               //echo "id_archivo". $id_archivo;

              $in = "update preguntas set  id_estado='".$estado."', titulo='".$titulo."', nombre='".$nombre."', ayuda='".$ayuda."', competencia='".$competencia."', componente='".$componente."' where id='".$id."' ";
              $qin = pg_query($conexion, $in);

                if(isset($_SESSION['id_archivo'])){
                   session_unset($_SESSION['id_archivo']); // Borramos de id para archivos.
                   $_SESSION['id_archivo'] =""; // Borramos de id para archivos.
                }
                
                       if($qin)
                       return "1";
                       else {
                           return "2";
                       }
     }
     function elim_pregunta($id){

        @include '../config.php';
        //$validar_pregunt = consul_pregunta($id, $tipo, $titulo);
               //echo "id_archivo". $id_archivo;

            $in = "delete from preguntas where id='".$id."' ";
            $qin = pg_query($conexion, $in);
              if($qin)
                return "1";
               else {
                  return "2";
                }
     }

      // --------------------------------------------------------------------------------------------------------
    // Opciones Preguntas de plantilla
    

    function validar_resp_correcta($id_pregunta){
        @include '../config.php';
        $sql ="select id from resp_pregunta where id_pregunta='".$id_pregunta."' ";
        $query=pg_query($conexion, $sql);
        $rows=pg_num_rows($query);
            if($rows)
            return "1";
            else 
            return "2";

    }

    function resp_correcta($id_pregunta, $id_opcion){ // Insertamos opción de la respuesta correcta a la pregunta
        @include '../config.php';
                $validar = validar_resp_correcta($id_pregunta);
                        if($validar==2){
                    $in = "insert into resp_pregunta (id_pregunta, id_opcion, fecha_registro)
                    values ('".$id_pregunta."', '".$id_opcion."', '".$fecha_registro."') ";
                        }
                        else{
                            $in = "update resp_pregunta set id_opcion='".$id_opcion."' where  id_pregunta='".$id_pregunta."' ";
                        }

                $qin= pg_query($conexion, $in);
            
                

    }
    function validar_opcion ($id, $nombre){
         @include '../config.php';
         $sql ="select * from opciones where id_pregunta='".$id."' and nombre_plano='".$nombre."' ";
         $query=pg_query($conexion, $sql);
          $rows=pg_num_rows($query);
                if($rows)
                return "2"; // Opcion ya existe.
                else
                return "1"; 

    }
    function crear_opcion ($id, $nombre, $valor, $resp_correcta, $plainText){
        @include '../config.php';
        $validar = validar_opcion($id, $plainText);
        $validar=1;
            if($validar==1){  

                if($valor=='')
                $valor =0;

               // echo  "valor de : ".$resp_correcta;

                $in = "insert into opciones (id_pregunta, nombre, valor, fecha_registro, nombre_plano) 
                values('".$id."', '".$nombre."', '".$valor."', '".$fecha_registro."', '".$plainText."') ";
                $qin= pg_query($conexion, $in);

                        if($qin){

                            if($resp_correcta==1) { // Si la opción es sí,, insertamos la respuesta correcta a ésta pregunta.
                                $s = "select max(id) as id from opciones";
                                $q = pg_query($conexion, $s);
                                $r = pg_num_rows($q);
                                    if($r){
                                        $d = pg_fetch_assoc($q);
                                        $in_resp = resp_correcta($id, $d['id']);
                                    }      
                            }
                                 
                            return "1";
                        }
                        else
                        return "2";

            }else {
                return "3"; // Opción ya existe.
            }


    }

     function edit_opcion($id, $nombre, $resp_correcta){
        @include '../config.php';
        $in = "update opciones set nombre='".$nombre."' where id='".$id."' ";
        $qin = pg_query($conexion, $in);
       
        
                if($resp_correcta==1) { // Si la opción es sí,, insertamos la respuesta correcta a ésta pregunta.
                    $s = "select id_pregunta from opciones where id='".$id."' ";
                    $q = pg_query($conexion, $s);
                        $r = pg_num_rows($q);
                        if($r){
                        $d = pg_fetch_assoc($q);
                        $in_resp = resp_correcta($d['id_pregunta'], $id);
                    }      
                }
            if($qin)
                return "1";
            else
            return "2";

     }
     function elim_opcion($id){

        @include '../config.php';
        //$validar_pregunt = consul_pregunta($id, $tipo, $titulo);
               //echo "id_archivo". $id_archivo;
            $in = "delete from opciones where id='".$id."' ";
            $qin = pg_query($conexion, $in);
              if($qin)
                return "1";
               else {
                  return "2";
                }
     }

     function eliminar_examen($id_user, $id_plantilla){
        @include '../config.php';
         $delete ="delete resultados where id_user='".$id_user."' and id_plantilla='".$id_plantilla."' ";
         $query =pg_query($conexion, $delete);
            if($query){
                return "1";
            }
     }
?>