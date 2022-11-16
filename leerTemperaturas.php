<?php
/**Solicita al usuario las n temperaturas y las almacena en un arreglo. Retorna el arreglo formados
 * @param FLOAT $temperatura
 * @return ARRAY
 */
function leerTemperaturas($temperatura) {
    //ARRAY $misTemperaturas STRING $otraTemp INT $i
    $i=0;
    $misTemperaturas[0]=$temperatura;
    echo "¿Desea ingresar otra temperatura? s/n: ";
    $otraTemp=trim(fgets(STDIN));
    do {
        $i=$i+1;
        echo "Ingrese la temperatura: ";
        $temperatura=trim(fgets(STDIN));
        $misTemperaturas[$i]=$temperatura;
        echo "¿Desea ingresar otra temperatura? s/n: ";
        $otraTemp=trim(fgets(STDIN));
    }
    while ($otraTemp=="s");
    return $misTemperaturas;
}