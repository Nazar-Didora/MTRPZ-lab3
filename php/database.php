<?php
$host = 'localhost';
$db = 'inspiration';
$user = 'root';
$pass = '123456789q';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

?>
