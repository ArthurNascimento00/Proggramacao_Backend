<?php
// Define a variável para o número cuja tabuada será calculada
$numero = 7;

// Exibe um cabeçalho para a tabuada
echo "Tabuada do $numero:<br/>";

// Loop de 1 a 10 para calcular e exibir a tabuada
for ($i = 1; $i <= 10; $i++) {
    // Calcula o resultado da multiplicação
    $resultado = $numero * $i;
    
    // Exibe o resultado no formato "? x i = resultado"
    echo "$numero x $i = $resultado<br/>";
    
    // Pula uma linha
    echo "<br/>";
}
?>