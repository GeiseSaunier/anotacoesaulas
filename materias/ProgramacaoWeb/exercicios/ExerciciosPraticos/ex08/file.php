<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    //texto que sera enviado para o arquivo
    $texto = $nome . '#' . $email . '#' . $telefone;

    //fopen - abre o arquivo
    $file = fopen('arquivo.txt', 'arquivo');

    //fwrite - escreve 
    fwrite($file, $str);
    
    //fclose - fecha o arquivo
    fclose($file);
?>
