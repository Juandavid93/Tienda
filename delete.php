<?php

// 1 coneccio n 
include("database.php");

// 2 get data 
$id = $_get['id'];
$cod = $_get['cod'];

// 3 create sql
$sql = "delete from productos where id = $id";
// execute sql
$conn->query($sql);
echo "< script languaje='javascript'>alert ('producto eliminado satisfactoriamente')</script>";
header ("refresh:0; url=index.php");

?>