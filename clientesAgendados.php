<?php
require ('programacao.php');
$data = 2016-06-23;

$tabela = new Zend_Db_Table('clientesAgendados'); // mapeando a tabela
     $registros = $tabela->fetchAll(); // senão recupere a linha
     
     ?>
     <!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Clientes Agendados</title>
</head>
<body>
	<h1>Lista Clientes</h1>
	<?php foreach ($registros as $registro) { ?>
	<tr>
			<td><?=$registro->id?></td>
			<td><?=$registro->nome_cliente?></td>
			<td><?=$registro->nome_servico?></td>
			<td><?=$registro->valor_servico?></td>
			<td><?=$registro->data_servico?></td>
			<td><?=$registro->hora_servico?></td>
			</td>
		</tr>
	
		<?php } ?>
		
		
		</body>
</html>
     
         