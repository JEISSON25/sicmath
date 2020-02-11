<?php
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();

$host="35.184.251.150";
$user="sicmath";
$pass="cbg8b7eIIKL2GIx2";
$dbname="sicmath";
$conexion = pg_connect("host=$host dbname=$dbname user=$user password=$pass");