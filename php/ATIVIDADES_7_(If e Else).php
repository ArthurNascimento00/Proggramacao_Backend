<?php
// Iterar sobre os números de 1 a 10
for ($numero = 1; $numero <= 10; $numero++) {
    
    // Estrutura de classificação (simulando switch)
    if ($numero >= 1 && $numero <= 3) {
        $categoria = "baixo";
    } elseif ($numero >= 4 && $numero <= 7) {
        $categoria = "médio";
    } elseif ($numero >= 8 && $numero <= 10) {
        $categoria = "alto";
    }

    // Verificar se o número é par ou ímpar usando operador ternário
    $tipo = ($numero % 2 == 0) ? "par" : "ímpar";
    
    // Imprimir a mensagem
    echo "O número $numero é $tipo e está na categoria $categoria.<br>";
}
?>