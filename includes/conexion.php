<?php
//Conexión
$servidor = 'localhost:3306';
$usuario = 'root';
$password = 'javi1234';
$basededatos = 'blog_master';

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesión
if(!isset($_SESSION)){
    session_start();
}