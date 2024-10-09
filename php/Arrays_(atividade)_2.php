<?php
// Função para criar o cadastro
function criarCadastro() {
    return array(
        "usuario" => array("João", "Maria", "Pedro"),
        "senha" => array(1234, "abcd", 5678)
    );
}

// Função para alterar valores no cadastro
function alterarCadastro(&$cadastro, $usuarioIndex, $novoUsuario, $senhaIndex, $novaSenha) {
    if (isset($cadastro["usuario"][$usuarioIndex])) {
        $cadastro["usuario"][$usuarioIndex] = $novoUsuario;
    }
    if (isset($cadastro["senha"][$senhaIndex])) {
        $cadastro["senha"][$senhaIndex] = $novaSenha;
    }
}

// Criar o cadastro
$Cadastro = criarCadastro();

// Alterar valores específicos
alterarCadastro($Cadastro, 1, "Ana", 1, "efgh");

// Exibir a array completa
echo "<pre>";
print_r($Cadastro);
echo "</pre>";
?>