<?php
// Loop de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    // Calcula a raiz quadrada do número
    $raizQuadrada = sqrt($i);
    
    // Exibe o resultado
    echo "A raiz quadrada de $i é " . round($raizQuadrada, 2) . "<br>";
}
?>