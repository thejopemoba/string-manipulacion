<?php

$texto = 'Texto com qualquer {palavrão} e {palavrão2}';

/* como substituir strings por *, por exemplo, usamos o str_replace
onde ele espera 3 parametros, podemos pensar dessa forma:
substituir o que? pelo o que? onde? */

// é possível tb no 1° e 2° parametro utilizar um array de strings

echo (str_replace(['{palavrão}', '{palavrão2}'], '****', $texto)). PHP_EOL;

?>
