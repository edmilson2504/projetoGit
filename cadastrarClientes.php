<?php
require 'programacao.php';
//dados do cliente

$nome = null;
$email = null;
$telefone =null;

$form = new Zend_Form('cliente');
$form->setAction('novosClientes.php');
$form->setMethod('POST');
$form->setView(new Zend_View()); // Importante para imprimir o formulário

$element = new Zend_Form_Element_Text('nome');
$element->setValue($nome); // definindo valor padrão para o campo
$element->setLabel('Nome: ');
$form->addElement($element);

$element = new Zend_Form_Element_Text('email');
$element->setLabel('Email: ')->addValidator(new Zend_Validate_EmailAddress());
$element->setValue($email);// definindo valor padrão para o campo


$form->addElement($element);

$element = new Zend_Form_Element_Text('telefone');
$element->setValue($telefone); // definindo valor padrão para o campo
$element->setLabel('Telefone: ');
$form->addElement($element);

$element = new Zend_Form_Element_Submit('Enviar');
$form->addElement($element);

echo $form;
?>