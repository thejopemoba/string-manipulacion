<?php

/* podemos delimitar uma string utilizando"<<<{qualquer palavra}" 
nesse caso, utilizando a palavra FINAL, logo
na saída não irá mostrar os espaços iniciais dentro da string
decorrente da identação */

// heredoc = ""  |  nowdoc = ''

function geraEmail(string $nome): void
{
    $conteudoEmail = <<<FINAL
    
    Olá, $nome!

    Estou entrando em contato para
    {motivo}

    Att,
    {assinatura}

    FINAL;

    echo $conteudoEmail;
}

geraEmail('João Pedro');


?>