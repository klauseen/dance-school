<?php
$host = "localhost";
$user = "root";
$password = "";
$database ="dance-school";

$conn = mysqli_connect($host , $user , $password , $database);

if(!$conn){
    die("Connection error: " . mysqli_connect_error());
}
?>