<?php
// Iterar sobre os números de 1 a 10
for ($numero = 1; $numero <= 10; $numero++) {
    
    // Estrutura de classificação simulando switch
    if ($numero >= 1 && $numero <= 3) {
        $categoria = "baixo";
    } elseif ($numero >= 4 && $numero <= 7) {
        $categoria = "médio";
    } elseif ($numero >= 8 && $numero <= 10) {
        $categoria = "alto";
    }
    
    // Imprimir o número e sua categoria
    echo "O número $numero está na categoria $categoria.<br>";
}
?>