<?php

// Cria um array chamado $frutas contendo três elementos "maça", "banana", e "laranja"
$frutas = array("maça", "banana", "laranja");

// Procura o valor "banana" no array físico e armazena o índice correspondente na variável $indice
$indice = array_search("banana", $frutas);

// Verifica se $indice não é igual a false,, o que significa que "banana" foi encontrada no array
if ($indice !== false) {
    // Se "banana" foi encontrada, exibe a mensagem com o índice onde ela está localizda 
    echo "Banana foi encontrado na posição: ". $indice;
} else {
    // Se "banana" não foi encontrado, exibe uma mensagem indicando isso
    echo "Banana não foi encontrada na lista de frutas";
    
}