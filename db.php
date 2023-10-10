<?php
$servername = 'localhost';
$username = 'root';
$password = 'cirera27'; 
$dbname = 'my_database';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die('Could not connect to MySQL server: ' . mysqli_connect_error());
}
?>