<?php
// 1. Criando o array 'numeracao' com números de 1 a 10
$numeracao = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Exibindo o array criado
echo "Array inicial: <br>";
print_r($numeracao);
echo "<br><br>";

// 2. Alterando os valores nas posições específicas
$numeracao[0] = 100; // Posição 0: Alterando para 100
$numeracao[4] = 500; // Posição 4: Alterando para 500
$numeracao[9] = 1000; // Posição 9: Alterando para 1000

// Exibindo o array completo após as alterações
echo "Array após alterações: <br>";
print_r($numeracao);
?>