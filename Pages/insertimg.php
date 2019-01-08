<?php

require_once('../base.php');
require_once(__ROOT__ . '/pages/connect.php');

$name = $_POST['name'];
$query = 'SELECT 1 from img where name ="' . $name . '"';

if ($result = $pdo->query($query)) {

    if ($result->fetch()) {
        echo 'Name taken';
        return;
    }
} else {
    die('error');
}

$notes = $_POST['notes'];
// upload file
$target_file_sql = './gallery/' . basename($_FILES["file"]["name"]);
$target_file = '.' . $target_file_sql;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 9000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $pdo->query("INSERT INTO img(name, path, articleID, notes) VALUES ('$name','$target_file_sql',1,'$notes')") or print_r($pdo->errorInfo());
        echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// close connection
ftp_close($ftp_conn);
