<?php

class Aluno {
    public $nome;
    public $idade;
    public $curso;

    // Construtor para inicializar os atributos da classe
    public function __construct($nome, $idade, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
    }

    // Método para exibir os dados do aluno
    public function exibirDadosAluno() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Curso: " . $this->curso . "<br>";
    }

    // Método para alterar o curso do aluno
    public function alterarCurso($novoCurso) {
        $this->curso = $novoCurso;
    }
}

// Exemplo de uso da classe Aluno
$aluno = new Aluno("João Silva", 20, "Engenharia");
$aluno->exibirDadosAluno();
$aluno->alterarCurso("Medicina");
echo "<br>Após alteração do curso:<br>";
$aluno->exibirDadosAluno();

?>