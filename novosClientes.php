<?php
require 'programacao.php';

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone= $_POST['telefone'];		
		
$tabela = new Zend_Db_Table('clientes');
$campos = $tabela->createRow(); // cria uma nova linha

$campos->nome = $nome;
$campos->email = $email;
$campos->telefone = $telefone;

$campos ->save(); 




