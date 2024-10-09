<?php

// Cria um array chamado $frutas contendo três elementos: "maça", "banana" e "laranja"
$frutas = array("maça", "uva", "laranja");

// Cria uma variável
$valor = "uva";

// Verifica se "banana" está presente no array $frutas
if (in_array($valor, $frutas)) {
    // Se "banana" estiver no array, exibe a mensagem "Banana está na lista de frutas"
    echo "$valor está na lista de frutas";
} else {
    // Se banana não estiver no array, exibe a mensagem "Banana não está na lista de frutas"
    echo "$valor não está na lista de frutas";
}

?>