<?php

$servername = "localhost";
$username = "root";
$password ="";
$dbname ="tienda1";

// create connection to database

$conn = new mysqli($servername,$username,$password,$dbname);

// cheking

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}else{
    //echo " I am connected to tienda";
}


?>