<?php

/**
 * .retorna el puntaje (TEXTO ESCRITO DESDE WEB GIT)
 * @param int 
 * @param string
 * @return int
 */
function puntaje($numPrueba, $tipoPrueba)
{
    $resultado = $numPrueba % 4;
    
    if ($tipoPrueba == "Tecnica") {
        $puntaje = 23;
    } elseif ($tipoPrueba == "Decorativa") {
        $puntaje = 35;
        $puntaje = $puntaje + $resultado;
    }
    
    return (int)($puntaje);
}

/**
 * .retorna los minutos extra
 * @param int 
 * @return int
 */
function timepoExtra ($puntaje){
    if($puntaje < 24){
        $minutosExtra = 3;
    } elseif($puntaje >= 24 && $puntaje < 29){
        $minutosExtra = 4;
    } elseif($puntaje >= 29 && $puntaje < 36){
        $minutosExtra = 5;
    } elseif($puntaje >= 36){
        $minutosExtra = 6;
    }
    return (int)($minutosExtra);
}

//programa principal
echo "ingrese el numero de prueba: ";
(int)$numeroDePrueba = trim(fgets(STDIN));
echo "ingrese el tipo de prueba(Tecnica/Decorativa): ";
$tipoDePrueba = trim(fgets(STDIN));
$puntaje = puntaje($numeroDePrueba, $tipoDePrueba);
$minutosExtra = timepoExtra($puntaje);
echo ("Su puntaje es: ".$puntaje.". Y sus minutos extras son: ".$minutosExtra);
