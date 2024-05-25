<?php
$host = 'db'; 
$db = 'inspiration';
$user = 'mysql';
$pass = '123456789q';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>
