<?php
/*
FUNCIONES:
Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que pueden reutilizarse solamente invocando a la función tantas veces como
queramos.

function nombreDeMiFuncion($parametro){
	// BLOQUE / CONJUNTO DE INSTRUCCIONES
}

nombreDeMiFuncion($mi_parametro);
nombreDeMiFuncion($mi_parametro);
*/

// Ejemplo 1
function muestraNombres(){
    echo "Víctor  <br/>";
    echo "Antonio  <br/>";
    echo "Miguel  <br/>";
    echo "Jesus  <br/>";
    echo "<hr/>";
}

// Invocar funcion

muestraNombres();

function obtenerTabla($numero)
{
    echo "<h4> Tabla de multiplicar del numero: $numero </h4>";
    for($i=1;$i<=10;$i++)
    {
        $dato=$numero*$i;
        echo "$numero x $i = $dato </br>" ;
    }
    // funciones predefinidas
    var_dump($numero);
}
obtenerTabla(10);

function getVersionPhp()
{
    return PHP_VERSION;
}
 echo getVersionPhp();
echo "</br>funciones predefinidas </br>" ;

echo  date("y-m-d");
echo " </br>" ;
echo time();
echo " </br>" ;
echo sqrt(3);
echo " </br>" ;
echo rand(20,30);
echo " </br>" ;
echo round(2,2);
echo " </br>" ;
$cadena= "<h4> Tabla de multiplicar del numero:o </h4>";

echo mb_strtoupper($cadena);
echo mb_strtolower($cadena);