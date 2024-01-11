<?php
session_start();

$_SESSION["price"] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precio = isset($_POST["precio"]) ? floatval($_POST["precio"]) : 0;
    $descuento = isset($_POST["descuento"]) ? floatval($_POST["descuento"]) : 0;

    if ($precio >= 0 && $descuento >= 0 && is_numeric($precio) && is_numeric($descuento)) {
        if ($descuento >= $precio) {
            array_push($_SESSION["price"], "El descuento no puede ser mayor que el precio original.");
        } else {
            $precio_final = $precio - ($precio * ($descuento / 100));
            if ($precio_final<=0) {
                array_push($_SESSION["price"], "Error.");
            } else {
                array_push($_SESSION["price"], "Precio final: " . $precio_final . "€");
            }
        }
    } else {
        array_push($_SESSION["price"], "Por favor, ingresa valores numéricos positivos.");
    }
}

header("location: index.php");