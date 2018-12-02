<?php 

// Create connection
$pdo = new PDO('mysql:host=localhost;dbname=ayatsu;port=', 'ayatsua695', 'Ayatsu%43211');
if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}