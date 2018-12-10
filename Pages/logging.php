<?php

require_once('../base.php');
require_once(__ROOT__ . '/pages/connect.php');

$username = $_POST['username'];
//  $hash = password_hash( $_POST['pass'] , PASSWORD_DEFAULT );
//echo $hash;
$stmt = $pdo->query('SELECT password from users where login ="' . $username . '"') or die(mysql_error());

foreach ($stmt as $row) {
    $passt = $row['password'];
}

echo $passt . "<br>";
echo $_POST['pass'] . "<br>";
if (password_verify($_POST['pass'], $passt)) {
    echo "succes";
} else {
    echo "haslo bledne";
}