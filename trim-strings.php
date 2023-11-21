<?php

$csv = ',João, 20, Santista,';

/* quero remover espaços, virgulas, ou seja separadores que estejam no começo e fim da string, logo usamos a function:
ela espera dois parametros, a variável e o que ela tem que "aparar" */

echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL;  // temos como aparar para a esquerda
echo rtrim($csv, ',.') . PHP_EOL;  // como tb para a direita

?>