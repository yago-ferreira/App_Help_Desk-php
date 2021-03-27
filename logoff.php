<?php 
    //pegando a sessão
    session_start();
   
    //destruindo a sessão ao clicar em SAIR
    session_destroy();

    //redirecionando para página index
    header('Location: index.php');

   
?>