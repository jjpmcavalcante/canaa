<!--FIM ESTILO ERRO DE LOGIN-->
<link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../src/style/style_aviso.css" rel="stylesheet">

<?php
//ARQUIVO DE PROTEÇÃO DE SESSÃO
//Data: 11/07/2023 às 08:50
//Evita que alguém sem ter logado acesse ao painel.

//Verifica se tem sessão, Se caso NÃO TENHA, inicia a sessão
if(!isset($_SESSION)) {
     session_start();
}

//Verifica se tem uma sessão do ID, caso NÃO TENHA, exibe a mensagem abaixo
if(!isset($_SESSION['id'])){
    //die('<div class="body-aviso"><div class="erro-sem-login bg-dark"><img class="img-fluid" src="../src/img/logo_viva.png" width="30%" alt="Logo Vivá"><p class="fs-5">Você não pode acessar esta página pois não esta logado.</p><p><a class="btn btn-sm btn-warning mt-4 mb-4 p-2" href="../index.php">ENTRAR</a></p><p class="text-description">Caso não tenha login de acesso, por favor entrar em contato com o Departamento de TI.</p></div></div>');
    header('Location: ../view/erro-sem-sessao.php');
}



?>