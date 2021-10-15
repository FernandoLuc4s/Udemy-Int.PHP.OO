<?php

class Pessoa{
    public $nome;
public $site;
    public function falarNome(){
        echo $this->nome; // a palavra this indica que o nome exibido é o dessa classe
    }
    public function falarSite(){
        echo $this->site; // a palavra this indica que o nome exibido é o dessa classe
    }
}