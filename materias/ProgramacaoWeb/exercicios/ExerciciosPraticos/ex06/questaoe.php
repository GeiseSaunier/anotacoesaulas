<?php

 // e)substituir um texto dentro de uma sequencia de caracteres
 $Textoini = 'geise#saunier#albuquerque';
 $textofina = str_replace('#', ' ', $Textoini);



?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Quinta questao (e) </title>
    </head>
    <body>
        <h1>e)Substituir texto dentro de uma sequencia de caracteres.</h1>
        <hr>
        <h2>Frase: geise#saunier#albuquerque </h1>
        <form method="post" action="index.php">
            Substituir valor # por ' ' (espaço)<br>
            saida: <?= $textofina ?> 
        </form>
    </body>
</html>   

    