<?php

$nome = 'Joao Pedro';
$email = 'joaopedro@gmail.com';

$posicaodoArroba = strpos($email, '@');

substr($email, 0, $posicaodoArroba);
$usuario = substr($email, 0, $posicaodoArroba);

// função para função ir de letras minusculas para letras maiusculas, ela retorna outra string, não alterando a variável $usuario.

echo strtoupper($usuario) . PHP_EOL;

// temos o contrário também, com o strtolower, porém essas funções só lidam com caracteres simples.

echo strtolower($usuario) . PHP_EOL;

// função para separar a string $nome em duas partes

var_dump(explode(' ', $nome));

list($nome, $sobrenome) = (explode(' ', $nome));

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

?>
