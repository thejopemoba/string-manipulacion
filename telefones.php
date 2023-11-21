<?php

$telefones = ['(11) 99741-5892', '(11) 98772-5651', '(11) 95512-4532'];

/* quero transformar esse array de telefones em uma string para poder exibir 
utilizando o echo, logo usaremos a function implode */

echo implode(PHP_EOL, $telefones) . PHP_EOL;

?>