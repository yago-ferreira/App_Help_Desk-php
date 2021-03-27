<?php

    session_start();

    //montagem do texto
    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);
    // PHP_EOL uma segunda linha é incluida no documento
    $texto = $_SESSION['id'] . '#' . $titulo. '#' . $categoria . '#' . $descricao . PHP_EOL;
    
    //abrindo arquivo
    $arquivo = fopen('script_seguros/arquivo.txt','a');

    //escrevendo o texto 
    fwrite($arquivo, $texto);

    //fechando arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');


?>