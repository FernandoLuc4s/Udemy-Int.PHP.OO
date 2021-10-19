<?php
require_once "Pessoa.php"; // permite que a classe seja carregada uma única vez

$uma_pessoa = new Pessoa;

$uma_pessoa->setNome("Diego");

echo $uma_pessoa->getNome();
