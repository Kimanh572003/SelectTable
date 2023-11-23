<?php
$username = 'root';
$password = '';
$server = 'localhost';
$dbname = 'workmanagement';

$connect = new mysqli($server, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Error to connect!" . $conn->connect_error);
    exit();
}

?>