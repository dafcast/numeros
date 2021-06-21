<?php
$numeros = $_POST['numero'];
$numeorsOrd = $numeros;

foreach ($numeros as $numeroRef) {

    $contador = 0;
    foreach ($numeros as $numero) {
        if($numeroRef > $numero){
            $contador++;
        }
    }
    $numeorsOrd[$contador] = $numeroRef;
}


echo "<h1>Numeros ingresados</h1>";
echo "<pre>";
var_dump($numeros);
echo "</pre>";

echo "<h1>Numeros ordenados</h1>";
echo "<pre>";
var_dump($numeorsOrd);
echo "</pre>";