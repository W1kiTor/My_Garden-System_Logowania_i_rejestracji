<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "!my_garden";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Oh no. Our data base is down :(" . $conn->connect_error);
} 
?>