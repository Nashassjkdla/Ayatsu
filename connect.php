<?php 

// Create connection
$pdo = new PDO('mysql:host=localhost;dbname=ayatsu_dev', 'root', '');
if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}