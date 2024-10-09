<?php
// Cria um array com 10 nomes
$nomes = [
    "Alice",
    "Bruno",
    "Carlos",
    "Daniel",
    "Eduarda",
    "Fernando",
    "Gabriela",
    "Henrique",
    "Isadora",
    "João"
];

// Nome a ser buscado
$nome_para_buscar = "Arthur";

// Usa array_search para encontrar o índice do nome
$indice = array_search($nome_para_buscar, $nomes);

// Verifica se o nome foi encontrado
if ($indice !== false) {
    echo "O nome '{$nome_para_buscar}' foi encontrado no índice: {$indice}.";
} else {
    echo "O nome '{$nome_para_buscar}' não foi encontrado.";
}
?>