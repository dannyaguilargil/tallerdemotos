<?php

include 'conexion.php';


//$nombre = $_POST["nombre"];
$dato = $_POST["dato"];
$id = $_POST["id"];
$dato_nuevo = $_POST["dato_nuevo"];

//para datos string 
//update repuestos SET nombre='casco' where id = 18;

$sql="UPDATE repuestos SET $dato='$dato_nuevo' WHERE id = $id;";

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
    echo 'EROOR AL ACTUALIZAR REPUESTO';
}
?>