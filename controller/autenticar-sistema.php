<?php
//ARQUIVO DE AUTENTICAÇÂO DE USUÁRIOS
//Data: 21/09/2023
//Descrição: Verifica se existe usuário tem permissão de acesso no banco.

        //Arquivo de conexão com o banco de dados
        include('config_db.php');
        
        //Verifica se tem informação nos inputs
        if(isset($_POST['username-system']) && isset($_POST['password-system'])){
            //Depois verifica se estão vazios
            if(empty($_POST['username-system'])){
                echo //'<div class="error">Preencha seu usuário</div>';
                    "<script>
                        alert('Preencha seu usuário');
                    </script>";
            } else if (empty($_POST['password-system'])){
                echo //'<div class="error">Preencha sua senha</div>';
                    "<script>
                        alert('Preencha sua senha');
                    </script>";
            } else {
                $nome = $mysqli->real_escape_string($_POST['username-system']);
                $senha = $mysqli->real_escape_string($_POST['password-system']);
                

                $sql_code = "SELECT * FROM cad_users WHERE username = '$nome' AND senha = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);
           
                $count_row = $sql_query->num_rows;

                if($count_row == 1) {
                    $user = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['nome'];
                    $_SESSION['profile'] = $user['perfil'];


                    header("Location: view/painel-system.php?search=");
                } else {
                    echo 
                        "<script>
                            alert('Usuário ou Senha incorretos.');
                        </script>";
                }
                
            }
        }
?>