<?php
include('../config.php');
// $ftpserver='ftp.mundosoluciones.com.co';
// $login ='archivos@sitmach.mundosoluciones.com.co';
// $pass = 'Pwj&+?R0!]jY';

// $conn_id = ftp_connect($ftpserver);
// ftp_login($conn_id, $login, $pass);
// 	if(ftp_login($conn_id, $login, $pass)){
// 	echo "Conectado";
// 	$con = 1;
// 	}
// 	else{
// 	echo "No conectado";
// 	}
// ftp_pasv($conn_id, true);
		
			?>
	 		<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
			<?php
	// 		// A list of permitted file extensions
			$allowed = array('jpeg', 'jpg', 'png');

				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

					$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

					 if(!in_array(strtolower($extension), $allowed)){
						echo '{"status":"errorextension"}';
								exit;
					 }
							//$ruta=($_FILES['upl']['name']).$fecha_registro;
							
								$nombre_archivo = explode(".", $_FILES['upl']['name'] );
								$nombre_codificado  = base64_encode($nombre_archivo[0]."-".$fecha_registro);
								$dir_subida='../files/';	
									//$ruta=($_FILES['upl']['name']).$fecha_registro;
								$ruta = $nombre_codificado.".".$extension;
								$fichero_subido = $dir_subida . $ruta;
							    $ruta_real ='../files/';
								//$ruta_real ='/clientes/clientes/8caf493fd6b03a3bd91b30f0aae42fbc/Otros documentos';
								           // if(@ftp_chdir($conn_id,$ruta_real))
											//{
												# Subimos el fichero
												if (move_uploaded_file($_FILES["upl"]["tmp_name"], $fichero_subido)) {
											
												//if(@ftp_put($conn_id,$ruta,$_FILES["upl"]["tmp_name"],FTP_BINARY)){
														echo '{"status":"success"}';

															$qry = "insert into archivos (nombre, ruta, fecha_registro) values('".$nombre_archivo[0]."', '".$ruta."', '".$fecha_registro."')";
																//}
																
							
																				$sube=pg_query($conexion,  $qry);
																				if(isset($sube)){
																					$sql = "select max(id) as id from archivos limit 1";
																					$query=pg_query($conexion, $sql);
																					$rows = pg_num_rows($query);
																					$datos = pg_fetch_assoc($query);
																					$_SESSION['id_archivo']=$datos['id'];	
																				}
																				
																				else
																				echo "2";
														
													}else
													echo "No ha sido posible subir el fichero";																		
							//ftp_close($conn_id);			
						}else{

								echo '{"status":"error"}';
								exit;
						}