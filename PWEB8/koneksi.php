<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "foto";
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>