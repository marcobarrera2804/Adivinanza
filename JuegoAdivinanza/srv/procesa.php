<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$adivinanza = recuperaTexto("adivinanza");

// Agregar la verificación con if
if ($adivinanza === "peine") {
    $resultado = "¡Correcto! La respuesta es 'peine'.";
} else {
    $resultado = "Incorrecto. La respuesta no es correcta.";
}

devuelveJson($resultado);
