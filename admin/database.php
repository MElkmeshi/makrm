<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = 'localhost';
$database = 'php';
$username = 'root';
$password = '';
$con = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
