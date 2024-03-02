<?php
// Inicie las variables
$a = 0; // Variable para números impares
$b = 0; // Variable para números pares

for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 == 0) {

        $b += $i;
    } else {
   
        $a += $i;
    }
}

// Resultados
echo "La suma de los números impares es: $a \n";
echo "La suma de los números pares es: $b \n";
?>
