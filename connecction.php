<?php

$host = "localhost";
$username = "root"; 
$password = "Muhaimin30";   
$database = "lab7";
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}


?>