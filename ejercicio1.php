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
        echo ($i+1).") ". $misTemperaturas[$i]. "\n";
    }
}

/*PROGRAMA PRINCIPAL*/
/*FLOAR $temp ARRAY $arreglo*/
echo "Ingrese la temperatura: ";
$temp=trim(fgets(STDIN));
$arreglo=leerTemperaturas($temp);
listarTemperaturas($arreglo);
echo "\n FIN";