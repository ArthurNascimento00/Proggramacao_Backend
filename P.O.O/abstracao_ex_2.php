<?php

class Livro {
    public $titulo;
    public $autor;
    public $anoPublicacao;

    // Construtor para inicializar os atributos da classe
    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
    }

    // Método para exibir os detalhes do livro
    public function exibirDetalhes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicacao . "<br>";
    }

    // Método para alterar o ano de publicação
    public function alterarAnoPublicacao($novoAno) {
        $this->anoPublicacao = $novoAno;
    }
}

// Exemplo de uso da classe Livro
$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);
$livro->exibirDetalhes();
$livro->alterarAnoPublicacao(2001);
echo "<br>Após alteração do ano de publicação:<br>";
$livro->exibirDetalhes();

?>