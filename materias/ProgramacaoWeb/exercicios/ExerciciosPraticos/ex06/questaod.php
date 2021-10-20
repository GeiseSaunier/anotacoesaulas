<?php

    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : null;
    $texto = 'Vamos estudar? Estou aguardando voce.';
    
    if (strpos($texto, $palavra) !== false) {
        $respo = 'string encontrada';
    } else {
        $respo = 'string não encontrada';
    }
    
    $respo = isset($respo) ? $respo : '';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Quarta questao (d) </title>
    </head>
    <body>
        <h1>d)Pesquisar um texto específico na String.</h1>
        <hr>
        <h2>Frase: Vamos estudar? Estou aguardando voce. </h1>
        <form method="post" action="index.php">
            Escreva uma palavra da frase acima: <input type="text" name="d" />
            <input type="submit" value="Consultar"/> <br />
            Valor consultado: <?= $palavra ?> <br />
            resultado: <?= $respo ?>
    </form>
