<?php

include 'conexion.php';


$id = $_POST["id"];
//DELETE FROM repuestos WHERE id = 26; 

$sql="DELETE FROM repuestos WHERE id = $id;";

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
    echo 'EROOR AL ELIMINAR REPUESTO';
}
?>