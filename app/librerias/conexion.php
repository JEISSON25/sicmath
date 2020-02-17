<?php
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();

$host="35.184.251.150";
$user="sicmath";
$pass="YCJTPll$+7qH";
$dbname="sicmath";
$conexion = pg_connect("host=$host dbname=$dbname user=$user password=$pass");