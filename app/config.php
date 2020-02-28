<?php 
//include 'librerias/sesion.php';
include 'librerias/conexion.php';
$fecha_registro = date('Y-m-d H:mm:ss');
$hora = date('H:mm:ss');
//$serv_arch = "https://sicmath.000webhostapp.com";
@$serv_arch = $_SERVER['REMOTE_HOST']."/app";
//include 'modelos/funciones.php'; // Funcionares generales.
