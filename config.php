<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "almafisio";
$port = 3307;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

session_start();
?>
