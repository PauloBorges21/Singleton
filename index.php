<?php
spl_autoload_register(function ($class) {

    if (file_exists('classes/' . $class . '.php')) {
        require 'classes/' . $class . '.php';
    }

});


$cara = Pessoa::getInstance();

$cara->setNome("Paulo");

echo "NOME: ".$cara->getNome();


$cara2 = Pessoa::getInstance();

$cara2->setIdade(90);

echo "</br> Idade: " .$cara->getIdade();
