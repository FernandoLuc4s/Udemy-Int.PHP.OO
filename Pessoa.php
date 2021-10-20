<?php

class Pessoa{
    // tipos de atributos
    // public -> pode ser acessada por qualquer classe
    // private -> só pode ser acessada por dentro da classe
    // protected -> só pode ser acessado pela classe e por classes que há herdam 
    private $nome;
   
    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }

    public function setNome($novoNome)
    {
         $this->nome=$novoNome; // o metódo set é respnsável por alterar o valor do atributo sem que o usuário faça essa alteração diretamente
    }

    public function getNome()
    {
        return $this->nome;
    }
   
}