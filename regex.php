<?php

/* expressão regular é um conjunto de caracteres utilizando
uma sintaxe predefinida que pode ser aplicado a um texto
ou uma string. */

$telefones = ['(11) 99741-5892', '(11) 98772-5651', '(11) 95512-4532'];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/',
        $telefone
    );
    if ($telefoneValido) {
        echo 'Telefone válido'. PHP_EOL;
    } else {
        echo 'Telefone inválido'. PHP_EOL;
    }
}

?>