<?php

$nome = 'João Barbosa';

/* essa função verifica espera dois parâmetros: uma variável e uma string,
logo, ela verifica se na variável $nome contém a string 'Barbosa', ela retorna
um valor booleano. */

(str_contains($nome, 'Barbosa'));

// Exemplo mais prático

$name = 'Beatriz Oliveira';

$ehDaFamiliaOliveira = (str_contains($name, 'Oliveira'));

if ($ehDaFamiliaOliveira) {
    echo "$name é da família" . PHP_EOL;   
} else {
    echo "$name não é da família" . PHP_EOL;
}

?>
