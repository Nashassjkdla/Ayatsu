<?php

require_once('../base.php');
require_once(__ROOT__ . '/pages/connect.php');

$name = $_POST['name'];
$query = 'SELECT 1 from article where name ="' . $name . '"';

if ($result = $pdo->query($query)) {

    if ($result->fetch()) {
        echo 'Name taken';
        return;
    }
} else {
    die('error');
}

$notes = $_POST['notes'];
$pdo->query("INSERT INTO article(name, notes) VALUES ('$name','$notes')") or print_r($pdo->errorInfo());

header("Location: ./upload.php");
exit;

