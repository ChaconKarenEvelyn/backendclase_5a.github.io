<?php
//Ejercicio 1:
$numero = 1;

while ($numero<= 9 ){
    echo "$numero. <br>";
    $numero++;
}
echo "<br>";
echo "<br>";

//Ejercicio 2:

$numero = 9;

while ($numero>= 1 ){
    echo "$numero. <br>";
    $numero--;
}
echo "<br>";
echo "<br>";

//Ejercicio 3:

for( $i=1; $i<=20; $i++) {
    if ($i % 2 == 0) {
        echo "el numero:" . $i. " es par <br>";
    }
}
echo "<br>";
echo "<br>";

//Ejercicio 4:
for( $i=1; $i<=20; $i++) {
    if ($i % 2 != 0) {
        echo "el numero:" . $i. " es impar <br>";
    }
}
echo "<br>";
echo "<br>";

//Ejercicio 5:

$numero = 1;
while ($numero < 20){
echo "$numero. <br>";
    $numero++;
}
echo "<br>";
echo "<br>";

//Ejercicio 6:

for( $i=2; $i<=20; $i++) {
    if ($i % 2 == 0) {
        echo " $i. <br>";
    }
}


?>
