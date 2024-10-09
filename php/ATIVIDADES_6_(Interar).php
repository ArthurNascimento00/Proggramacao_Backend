<?php
// Iterar sobre os números de 1 a 10
for ($numero = 1; $numero <= 10; $numero++) {
    
    // Verificar se o número é par ou ímpar
    $tipo = ($numero % 2 == 0) ? "par" : "ímpar";
    
    // Imprimir o número e se é par ou ímpar
    echo "O número $numero é $tipo.<br>";
}
?>