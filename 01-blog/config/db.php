<?php

$db = mysqli_connect("localhost", "root", "", "pruebas");

if(!$db) {
    echo "Error: No se pudo conectar a MySQL";
    exit;
}