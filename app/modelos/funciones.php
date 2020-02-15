<?php 
include('model_plantilla.php');
include('model_user.php'); // Modelos de usuario
include('model_colegio.php'); // Modelo de institución
    // Genramos la interfaz inical de la APP


        if (isset($_POST['login'])){

            echo $autenticar = autenticar($_POST['usuario'], $_POST['clave']);            

        }
        if(isset($_POST['password_reset'])){
            echo $forgot_password = forgot_password($_POST['usuario'], $_POST['pregunta'], $_POST['respuesta']);
        }

        if(isset($_POST['g_users'])){ // Gestor resolución de examen
           // echo "entro aquí";
                // Crear usuario
            if(isset($_POST['crea_user'])){
                    

                if(empty($_POST['pregunta']) && empty($_POST['respuesta'])){
                  $_POST['pregunta']='';
                  $_POST['respuesta']='';
                }
               // echo "entro acá también";
                 echo $crear_user = crear_usuario ($_POST['id_usuario'], $_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['clave'], $_POST['nom_usuario'], $_POST['grado'], $_POST['colegio'], $_POST['tipo'], $_POST['pregunta'], $_POST['respuesta']);

            }
            if(isset($_POST['edita_user'])){
                    
                 echo $crear_user = edita_usuario ($_POST['id_usuario'], $_POST['nombre'], $_POST['apellidos'], $_POST['email'], $_POST['clave'], $_POST['nom_usuario'], $_POST['id']);
 
             }
             if(isset($_POST['elimina_user'])){
                    
                echo $crear_user = elimina_usuario ($_POST['id']);

            }

        }



        if(isset($_POST['vista_app'])){ // Generamos la vista 
                //echo "jeisson";
                if($_POST['menu']){
                    include ('../app/template/menu.html');
                }

                if(isset($_POST['plantilla'])){ // Constructor de plantilla
                            $visualizar = visual_plantilla($_POST['id']);                                
                                echo $visualizar;

                }
        }

         if(isset($_GET['listar'])){ // Ver plantillas
                ver_plantillas();
         }
         if(isset($_GET['listar_examen'])){ // Ver plantillas estudiante.
            ver_plantillas_estu();
         }
         if(isset($_GET['listar_examen2'])){ // Ver plantillas estudiante.
            ver_plantillas_estu2();
         }
         if(isset($_GET['listar_preguntas'])){ // Ver plantillas
                ver_preguntas($_GET['id']);
         }

         if(isset($_GET['listar_opciones'])){ // Ver opciones
                ver_opciones($_GET['id']);
         }
         if(isset($_GET['listar_users'])){ // Listar usuarios
                 ver_usuarios();
         }
         if(isset($_GET['listar_colegio'])){ // Listar Colegios
                 ver_colegio();
         }
         if(isset($_GET['listar_grado'])){ // Listar grados
                 ver_grado();
         }
         if(isset($_GET['listar_nivel'])){ // Listar niveles
                 ver_niveles();
         }
         
        if(isset($_POST['g_plantilla'])){ // Gestor de plantillas
           
            if(isset($_POST['crear'])){ // Crear plantilla

                $crear = crear_plantilla($_POST['nombre'], $_POST['descripcion'], $_POST['tipo'], $_POST['estado'], $_POST['user'], $_POST['cant_preguntas']);
                echo $crear;
            }           
            if(isset($_POST['crear_pregunta'])){
                $crear = crear_pregunta($_POST['id_plantilla'], $_POST['tipo'], $_POST['estado'], $_POST['titulo'],
                 $_POST['nombre'], $_POST['ayuda'], $_POST['competencia'], $_POST['componente'], $_POST['plainText']);
                 echo $crear;
            }
            if(isset($_POST['editar_pregunta'])){
                $crear = editar_pregunta($_POST['id_pregunta'], $_POST['estado'], $_POST['titulo'],
                 $_POST['nombre'], $_POST['ayuda'], $_POST['competencia'], $_POST['componente']);
                 echo $crear;
            }
            if(isset($_POST['eliminar_pregunta'])){
                $crear = elim_pregunta($_POST['id_pregunta']);
                 echo $crear;
            }
            if(isset($_POST['crear_opcion'])){
             //  ($id, $nombre, $valor)
                $crear = crear_opcion ($_POST['id_pregunta'], $_POST['nombre'], $_POST['valor'], $_POST['resp_correcta']);
                echo $crear;

            }
            if(isset($_POST['editar_opcion'])){
                //  ($id, $nombre, $valor)
                   $crear = edit_opcion($_POST['id'], $_POST['nombre'], $_POST['resp_correcta']);
                   echo $crear;   
            }
            if(isset($_POST['elim_opcion'])){
                //  ($id, $nombre, $valor)
                   $crear = elim_opcion ($_POST['id']);
                   echo $crear;   
            }
            if(isset($_POST['editar'])){ // editar plantilla

                $crear = editar_plantilla($_POST['nombre'], $_POST['descripcion'], $_POST['tipo'], $_POST['estado'], $_POST['cant_preguntas'],$_POST['id']);
                echo $crear;
            }
            if(isset($_POST['eliminar_plant'])){ // Eliminar plantilla

                $crear = elim_plantilla($_POST['id']);
                echo $crear;
            }
        }

        if(isset($_POST['g_colegio'])){ // Gestor de colegio

            if(isset($_POST['crea_colegio'])){ // Crear  colegio

                $crear = create_colegio($_POST['colegio']);
                echo $crear;
            }
            if(isset($_POST['editar_colegio'])){ // Editar  colegio

                $crear = editar_colegio($_POST['colegio'], $_POST['id']);
                echo $crear;
            }
            if(isset($_POST['eliminar_colegio'])){ // Eliminar  colegio

                $crear = eliminar_colegio($_POST['id']);
                echo $crear;
            }
           
            if(isset($_POST['crea_grado'])){ // Crear grado

                $crear = create_grado($_POST['grado']);
                echo $crear;
            }

            if(isset($_POST['eliminar_grado'])){ // Crear grado

                $crear = eliminar_grado($_POST['id']);
                echo $crear;
            }
            if(isset($_POST['editar_grado'])){ // Editar grado

                $crear = editar_grado($_POST['grado'], $_POST['id']);
                echo $crear;
            }
            if(isset($_POST['crea_nivel'])){ // Crear nivel

                $crear = create_nivel($_POST['nivel'], $_POST['min'], $_POST['max']);
                echo $crear;
            }            

        }
        
        
?>