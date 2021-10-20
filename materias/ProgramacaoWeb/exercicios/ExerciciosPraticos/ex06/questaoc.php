<?php


// Inverter uma dada string 
    
    $invertestring = isset($_POST['invertestring']) ? $_POST['invertestring'] : null;
    $frase_invertida = isset($invertestring) ? strrev($invertestring) : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Terceira questao (c) </title>
    </head>
    <body>
        <h1>c) Inverter uma string</h1>
        <hr>
        <form method="post" action="index.php">
            Informe a palavra: <input type="text" name="invertestring" />
            <input type="submit" value="Consultar"/> <br />
            Palavra informada: <?= $invertestring ?> <br />
            palavra invertida: <?= $frase_invertida ?>
        </form>
   </body>
</html>