<?php

// a) Dado uma palavra, contar o numero de caracteres

    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : null;
    $tamanho_palavra = isset($palavra) ? strlen($palavra) : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Primeira Questao (a) </title>
    </head>
    <body>
        <h1>a)Contar o numero de caracteres dada uma palavra.</h1>
        <hr>
        <form method="post" action="index.php">
            Informe a palavra desejada: <input type="text" name="palavra" />
            <input type="submit" value="Consultar"/> <br />
            A sua palavra digitada foi: <?= $palavra ?> <br />
            Numero de caracteres: <?= $tamanho_palavra ?>
        </form>
    </body>
</html>