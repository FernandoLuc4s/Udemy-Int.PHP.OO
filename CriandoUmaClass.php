<?php
require_once "Pessoa.php"; // permite que a classe seja carregada uma única vez

$pessoa = new Pessoa("Diego");

echo $pessoa->getNome();
