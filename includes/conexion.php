<?php
//conexion
$servidor = 'localhost';
$usuario ='root';
$password ='';
$basededatos = 'calidad';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

//iniciar sesion 
 session_start();


 