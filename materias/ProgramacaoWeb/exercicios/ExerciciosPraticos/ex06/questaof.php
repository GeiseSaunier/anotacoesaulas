<?php

// mostrar os horarios de manha, tarde e noite
    $horarios = date('d/m/Y \à\s H:i:s');
   
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Sexta questao (f) </title>
    </head>
    <body>
        <h1>f)Retornar a saída "Tenha uma boa manhã!" Se a hora atual for
inferior a 10:00, e "Tenha um bom dia!" Se a hora atual for menor
que 20:00. Caso contrário, a saída será “Tenha uma boa noite!".</h1>
        <hr>
        resultado: <?= $horarios?>
   </body>
</html>