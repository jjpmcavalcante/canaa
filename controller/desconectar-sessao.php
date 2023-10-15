<?php
    //Arquivo de Logout
    //Data: 11/07/2023 às 08:50
    //Descrição: Desconecta o usuário da sessão.

    //Verifica se tem alguma sessão, caso não tenha, inicia a sessão
    if(!isset($_SESSION)){
        session_start();
    }
    //Desconecta as sessões
    session_destroy();

    //Após Logoff leva pra página de login
    header("Location: ../index.php");
?>
