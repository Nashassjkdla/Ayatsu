<?php 

// Create connection
//$pdo = new PDO('mysql:host=localhost;dbname=ayatsu;port=', 'ayatsua695', 'Ayatsu%43211');
$pdo = new PDO('mysql:host=localhost;dbname=ayatsu_dev', 'root', '');
if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}