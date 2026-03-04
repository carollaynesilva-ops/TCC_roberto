<?php
$conn = new mysqli("localhost","root","3307","almafisio");

if($conn->connect_error){
    die("Erro: " . $conn->connect_error);
}
session_start();
?>