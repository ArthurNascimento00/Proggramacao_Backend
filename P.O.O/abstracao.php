<?php

// Modelo -> Entidade
class Funcionario {
    // Atributos -> Características
    public $nome = null;
    public $telefone = null;
    public $numFilhos = 2;

    // Método -> Ações
    function resumirCadFun() {
        return "$this->nome possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($Filhos) {
        // Afeta um atributo de objeto
        $this->numFilhos = $Filhos;
    }

    function modificarnome($Alterarnome) {
        // Modifica o atributo nome
        $this->nome = $Alterarnome;
    }
}

// Objeto -> Identidade
$y = new Funcionario();
$y->modificarnome("Carlos");
echo $y->resumirCadFun();
echo "<hr>";

$x = new Funcionario();
$x->modificarNumFilhos(3);
$x->modificarnome("Ana");
echo $x->resumirCadFun();

?>