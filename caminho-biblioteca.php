<?php
//obtem os caminhos verificados pela funç~ao require
$caminhos = get_include_path();

//caminho relativo para a pasta do zend
$caminho_zend = "../ZendFramework-1.12.16-minimal/library";

//obtem o caminho absoluto de um caminho relativo
//$zend = realpath($caminho_zend);
$zend = realpath($caminho_zend);

//evita a copia da pasta zend para o projeto
set_include_path($caminhos.PATH_SEPARATOR.$zend);

print "<h1>Caminhos verificados: $caminhos</h1>";
//print "<h2>Caminho zend: $caminho_zend</h2>";
//print "<h3>Zend Absoluto: $zend</h3>";

require('Zend/Loader/Autoloader.php');
Zend_Loader_Autoloader::getInstance();

//criando a conexao com o banco

$veiculos = Zend_Db::factory ('PDO_MYSQL', array (
	'host'=>'localhost',
	'dbname'=>'concessionaria',
	'username'=>'root',
	'password'=>''));

//definindo o adaptador padrao
Zend_Db_Table::setDefaultAdapter($veiculos);


 ?>