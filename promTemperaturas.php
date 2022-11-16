<?php
/**Entra un arreglo formado por temperaturas y retorna
 * @param ARRAY $misTemperaturas
 * @return FLOAT
 */
function promTemperaturas($misTemperaturas) {
    //INT $i FLOAT $promedio, $sumaTemp
    $sumaTemp=0;
    for ($i=0; $i<count($misTemperaturas) ; $i++) { 
        $sumaTemp=$sumaTemp+$misTemperaturas[$i];
    }
    $promedio=$sumaTemp/count($misTemperaturas);
    return $promedio;
}