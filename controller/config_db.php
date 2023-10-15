<?php 
    //ARQUIVO DE CONEXÃO COM O BANCO DE DADOS
    //Data: 
    //Descrição: Arquivo de configuração da conexão do banco de dados.

    //Dados de Autenticação
    $user_db = 'joaopedro';
    $passwordDB = 'chemical@3479';
    $database = 'db_integracao';
    $host = 'db-integracao.mysql.uhserver.com';

    //Objeto que recebe os dados das variáveis acima.
    $mysqli = new mysqli($host, $user_db, $passwordDB, $database);

    //Teste de verificação de conexão com o banco de dados.
    if($mysqli->error){
        die("Erro na conexão com o banco de dados" . $mysqli->error);
    }
?>