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

/**Muestra en pantalla todas las temperaturas depositados en el arreglo parametro formal
 * @param ARRAY $misTemperaturas
 */
function listarTemperaturas($misTemperaturas) {
    //INT $i
    for ($i=0; $i<count($misTemperaturas); $i++) { 
        echo ($i+1).") ". $misTemperaturas[$i]. " °C\n";
    }
}

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

/*PROGRAMA PRINCIPAL*/
/*FLOAR $temp, $prom ARRAY $arreglo*/
echo "Ingrese la temperatura: ";
$temp=trim(fgets(STDIN));
$arreglo=leerTemperaturas($temp);
listarTemperaturas($arreglo);
$prom=promTemperaturas($arreglo);
echo "Promedio de temperaturas: ". $prom. " °C";
echo "\nFIN";