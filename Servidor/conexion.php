<?php

$mysqli = new mysqli("localhost", "danny", "danny", "taller_motos");
//danny es el usuario y contraseña

if(!$mysqli) {
      echo "ERROR AL CONECTAR A LA BASE DE DATOS";
}
else{
 //echo "CONECTADO A LA BASE DE DATOS";
}

