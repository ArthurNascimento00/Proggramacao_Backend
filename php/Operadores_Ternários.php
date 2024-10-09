<?php

//Exemplo com variável numérica
/*
$idade = 20;
$resultado = ($idade >= 18) ? "Maior de Idade" : "Menor de Idade";
echo $resultado; //Saída: Maior de idade
*/

/*
$nome = "Ana";
$mensagem = ($nome == "Ana") ? "Olá, Ana" : "Olá, visitante";
echo $mensagem; // Saída: Olá, Ana
*/

$is_logged_in = true;

$mensagem = $is_logged_in ? "Bem-vindo de volta!" : "Por favor, faça login";
echo $mensagem;

?>