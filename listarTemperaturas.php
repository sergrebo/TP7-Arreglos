<?php
/**Muestra en pantalla todas las temperaturas depositados en el arreglo parametro formal
 * @param ARRAY $misTemperaturas
 */
function listarTemperaturas($misTemperaturas) {
    //INT $i
    for ($i=0; $i<count($misTemperaturas); $i++) { 
        echo $i.") ". $misTemperaturas[$i]. " °C\n";
    }
}