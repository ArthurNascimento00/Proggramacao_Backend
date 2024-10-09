<?php

$soma = 0; // Inicializa a soma com 0
echo "Soma de 1 a 100:<br>"; // Mensagem inicial

for ($i = 1; $i <= 100; $i++) {
    $soma += $i; // Adiciona o valor de $i à soma
    echo "$soma + $i = " . ($soma + $i) . "<br>"; // Exibe a soma com o valor atual de $i
}

echo "Resultado final: " . $soma . "<br>"; // Exibe o resultado final da soma
?>