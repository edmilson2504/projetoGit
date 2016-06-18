<?php

require 'programacao.php';
//dados dos servicos adicionados
$id =null;
$nome_servico = null;

//formulario

$form = new Zend_Form('servico');
$form->setAction('novosServicos.php');
$form->setMethod('POST');
$form->setView(new Zend_View()); // Importante para imprimir o formul�rio

$element = new Zend_Form_Element_Text('nome_servico');
$element->setValue($nome_servico); // definindo valor padr�o para o campo
$element->setLabel('Nome: ');
$form->addElement($element);



$element = new Zend_Form_Element_Submit('Enviar');
$form->addElement($element);

echo $form;
?>