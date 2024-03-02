<?php
// Ciclo for que inicia en 0 y se incrementa de 3 en 3
for ($i = 0; $i <= 30; $i += 3) {
    
    if ($i > 30 && $i % 2 != 0) {
       
        echo "El primer número impar después de 30 es: " . $i;
        break;
    }
}
?>
