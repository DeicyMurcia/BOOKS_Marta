<?php
//Conexion a la base de datos

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "books";
$conn = new mysqli($servername, $username, $password, $dbname);


//verificar conexión

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}