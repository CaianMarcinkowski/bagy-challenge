<?php
/**
 * Tarefa 3: Programação Orientada a Objetos (POO)
 * Classe que representa uma pessoa.
 */
class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        return "Meu nome é {$this->nome} e minha idade é {$this->idade} anos.";
    }
}

?>