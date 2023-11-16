<?php

$email = 'joao@gmail.com';

/* quero extrair um pedaço da string da variável $email, denominada substring, 
logo utilizaremos a função subtr(), onde ela pede 3 parâmetros: a variável que vou extrair a subtring, 
a primeira posição e a última posição dos caracteres, logo: */

echo substr($email, 0, 4) . PHP_EOL;

// caso eu não informe a última posição, a função retorna da primeira posição até o final da string.

echo substr($email, 5) . PHP_EOL;

/* porém, dessa forma fica inviável, pois alguns nome tem diferentes números de caracteres, logo
vamos criar uma variável contendo a posição do @, utilizando a funcao strpos() e colocar dentro da nossa função substr */

$posicaoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoArroba) .PHP_EOL;

// como anteriormente eu quis exibir o restante, após o @, então adiciono +1 na posicaoArroba:

echo substr($email, $posicaoArroba + 1) .PHP_EOL;

/* como saber o tamanho de uma string? por exemplo o tamanho de uma senha, para isso usamos:
porém, essa função retorna o tamanho da string em bytes, logo caso tenha um caracter especial 
como por exemplo um "ã", ela retornaria o número 2, pois o caracter "ã" ocupa 2 bytes na memória.*/

$senha = '123456r';                             
if (strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

?>
