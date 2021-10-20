
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Setima questao (g) </title>
    </head>
    <body> 
    <h1>g)Define uma variável $x para 15 ($ x = 15). Em seguida, o loop
while continuará a ser executado, desde que $x seja menor ou
igual a 150 ($x <= 150). $X aumentará em 15 cada vez que o loop
for executado. Deve ser impresso na tela as execuções
intermediárias antes de 150 (15,30,45,...,135).</h1>
        <hr>
        <strong>obs: So ira executar antes dos 150, a condição tera que ser $x < 150 :)</strong><br/>
        <?php
            $x = 15;
            while($x < 150)
            {
                echo $x .' <br/> ';
                $x += 15;
            }
        ?>
    </body>
</html>