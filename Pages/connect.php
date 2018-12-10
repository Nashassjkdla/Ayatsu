<?php

// Create connection
//$pdo = new PDO('mysql:host=localhost;dbname=ayatsu;port=', 'ayatsua695', 'Ayatsu%43211');
$pdo = new PDO('mysql:host=localhost;dbname=ayatsu_dev', 'root', '');
if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}

// connect and login to FTP server
$ftp_server = "localhost";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, 'admin', 'admin');

