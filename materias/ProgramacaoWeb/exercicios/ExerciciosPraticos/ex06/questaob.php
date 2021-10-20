<?php

// b) Dado uma frase, contar o numero de palavras

    $frase = isset($_POST['frase']) ? $_POST['frase'] : null;
    $tamanho_da_frase = isset($frase) ? str_word_count($frase) : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Segunda questao (b)</title>
    </head>
    <body>
        <h1>Contar o numero de palavras a partir de uma frase</h1>
        <hr>
        <form method="post" action="index.php">
            <label for="frase">Informe a frase desejada:</label> <br />
            <textarea id="frase" name="frase" rows="3" cols="25"></textarea> <br />
            <input type="submit" value="Consultar"/> <br />
            Frase informada: <?= $frase ?> <br />
            Numero de palavras que ela possui: <?= $tamanho_da_frase ?>
        </form>
    </body>
</html>    