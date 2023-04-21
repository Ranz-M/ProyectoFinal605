<?php
//generar la tabla de multiplicar utilizando el ciclo while
$numero = 6;
$i = 1;
do{
    echo $numero. " x ". $i. " = ".($i * $numero). "</br>";
    $i ++;
}
while($i <= 50);
?>