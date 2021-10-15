<?php
require_once "Pessoa.php"; // permite que a classe seja carregada uma única vez

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Diego";
$uma_pessoa->nome = "FernandoLuc4s.com";

$uma_pessoa->falarNome();
$uma_pessoa->falarSite();