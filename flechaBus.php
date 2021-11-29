<?php

function maletaTest($alto,$ancho,$largo,$peso){
    if($alto < 55.9){
        if($ancho <= 30){
            if($largo <= 15){
                if($peso < 2.150){
                    $aprobacion = true;
                }else{
                    $aprobacion = false;
                }
            }else {
                $aprobacion = false;
            }
        }else{
            $aprobacion = false;
        }
    } else{
        $aprobacion = false;
    }

   
    return ($aprobacion);

}


$altura = trim(fgets(STDIN));
$anchura = trim(fgets(STDIN));
$longitud = trim(fgets(STDIN));
$pesades = trim(fgets(STDIN));
$maleta = maletaTest($altura,$anchura,$longitud,$pesades);


if($maleta == true){
    echo "Aprbada";
} elseif($maleta == false){
    echo "rechazada";
}
