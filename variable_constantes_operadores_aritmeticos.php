<?php
// declarar una variable $ + identificador + asignacion del tipo de dato o valor
$Variable = 45;
$Mensaje = "El valor de la variable es: ";
$Numero1 = 10; $Numero2 = 20; $Numero3 = 30;
$Suma = $Numero1 + $Numero2 + $Numero3;
$Resta = $Numero1 - $Numero2 - $Numero3;
$Multiplicacion  = $Numero1 * $Numero2 * $Numero3;
$Division  = $Numero1 / $Numero2 / $Numero3;
$Radio = 2;
define('Pi','3.1416');
$Decremento = 10;
$Incremento = 10;
echo "La suma de " .$Numero1." + ".$Numero2." + ".$Numero3. " es: ".$Suma."<br>";
echo "La resta de " .$Numero1." - ".$Numero2." - ".$Numero3. " es: ".$Resta."<br>";
echo "La multiplicacion de " .$Numero1." * ".$Numero2." * ".$Numero3. " es: ".$Multiplicacion."<br>";
echo "La division de ".$Numero1." / ".$Numero2." / ".$Numero3. " es: ".$Division."<br>";
// echo var_dump(constant('Hora'))."<br>";
// echo var_dump($Suma);
// echo $Mensaje, $Variable;
// area de un circulo;
$Ejemplo = Pi * $Radio * $Radio;
$Mensaje2 = "El area del circulo con el radio de: ".$Radio." por el valor de Pi es:".pi." el resultado es:".$Ejemplo;
echo $Mensaje2."<br>";
echo var_dump(constant('Pi'))."<br>";
echo "El valor de Decremento es: ".--$Decremento."<br>";
echo "El valor de Incremento es: ".++$Incremento."<br>";
?>