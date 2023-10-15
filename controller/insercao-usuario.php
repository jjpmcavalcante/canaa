<?php


    if(isset($_POST['submit']))
        {
            include_once('config_db.php');

            $nomeUsuario = $_POST['nameFull'];
            $phoneUsuario = $_POST['inputPhone'];
            $userName = $_POST['name-user'];
            $senhaUsuario = $_POST['password-user'];
            $congregacao = $_POST['selectIgreja'];
            $perfilUsuario = $_POST['selectPerfil'];
        
            $result = mysqli_query($mysqli,
                "INSERT INTO
                cad_users(nome, telefone, username, senha, congregacao, perfil)
                VALUES
                ('$nomeUsuario', '$phoneUsuario', '$userName', '$senhaUsuario', '$congregacao', '$perfilUsuario')");

            echo 
            "<script>
                alert('Cadastro realizado com sucesso!');
            </script>";
           
            header("Location: ../model/cad-users.php");

        }
            

?>