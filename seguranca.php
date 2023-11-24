<?php

$nome = 'campo';
?>

<!-- a function addslashes, adiciona uma \ impossibilitando avarias na string 
temos também o htmlentities converte qualquer caracter que pode ser
válido para códigos html -->

<input type="text" name="<?php echo addslashes($nome); ?> />