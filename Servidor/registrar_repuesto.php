<?php

include 'conexion.php';


$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$descripcion = $_POST["descripcion"];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$sql="INSERT INTO repuestos (nombre,marca,precio,cantidad,descripcion,imagen) VALUES('$nombre','$marca','$precio','$cantidad','$descripcion','$imagen')";

$resultado=$mysqli ->query($sql);

if($resultado>0){
   // header("Location:../Vista/vuelos.html");
//alerta de que se agrego el registro
//echo '<script type ="text/JavaScript">';  
//echo 'alert("REGISTRO AGEGADO")';  
//echo '</script>';  

header("Location:../Cliente/Gestion_repuestos/repuestos_administrador.php");

//exit();

}else{
    echo 'EROOR AL AGREGAR REGISTRO';
}
?>