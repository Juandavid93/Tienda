<?php
include("database.php");

$codigo = $_POST["cod_prod"];
$nombre = $_POST["nom_prod"];
$cantidad = $_POST["cantidad"];

$sql ="INSERT INTO productos (codigo_prod,nombre_prod,cantidad) values ('$codigo','$nombre',$cantidad)";

if($conn->query($sql) === true){

    echo "<script language='javascript'>alert('producto registrado satisfactoriamente')</script>";
    //echo "<br><a href='index.php'<Regresar</a>";
header("Refresh:0; url=index.php");

}else{
    echo "Error: ".$sql."<br>".$conn->error;
}
?>