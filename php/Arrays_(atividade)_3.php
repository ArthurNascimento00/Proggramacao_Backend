<?php

// Criando a Array CADASTRO
$CADASTRO = [];

// CCriando a Array nome, dentro da Array CADASTRO
$CADASTRO ['nome'] = ['Ricardo', 'Valter', 'Dinele', 'Ione', 'Fábio'];

//  Criando a Array email, dentro da Array CADASTRO
$CADASTRO ['email'] = ['ricardo.caironi@gmail.com', 'valter.santos@gmail.com', 'dinele.damilano@gmail.com', 'ione.senai404@gmail.com', 'fábio.chefe@gmail.com'];

echo '<pre>';
print_r ($CADASTRO);
echo '<pre';

echo $CADASTRO ['nome'] [2];
echo $CADASTRO ['email'] [3];

$CADASTRO ['nome'] [2] = ['Senai'];
$CADASTRO ['email'] [0] = ['aluno@senai.br'];

?>