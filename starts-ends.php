<?php

$url = 'https://github.com';

/* essa função verifica se uma string começa com uma determinada palavra
ela também retorna um valor booleano */

if (str_starts_with($url, 'https')) { 
    echo "$url é uma URL segura" .PHP_EOL ;
} else {
    echo "$url não é uma URL segura" .PHP_EOL;
}

// assim como tenho uma function para verificar se começa, também tem uma que termina

if (str_ends_with($url, '.com')){
    echo "Termina com domínio de topo" .PHP_EOL;
} else {
    echo "Não termina com domínio de topo" .PHP_EOL; 
}

?>