<?php
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();

$host="ec2-174-129-33-139.compute-1.amazonaws.com";
$user="fuwmrskfdjvwga";
$pass="ba7ea704a8b3647bb4ba5891ce91791dc14c364453c327dbcfcbf7a53c0e3327";
$dbname="d74vmgmejvsi6p";
$conexion = pg_connect("host=$host dbname=$dbname user=$user password=$pass");