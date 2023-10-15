<!--
    Atualização: 15/10/2023 às 14:32
    Editor: João Pedro

    Obs.: Verificação se já existe telefone cadastrado
-->
<?php


    if(isset($_POST['submit']))
        {
            include_once('config_db.php');

            $nomeConvertido = $_POST['inputName'];
            $endConvertido = $_POST['inputAddress'];
            $bairroConvertido = $_POST['selectBairro'];
            $nascConvertido = $_POST['inpuDtNasc'];
            $dataConversao = $_POST['inpuDtConv'];
            $cultoConversao = $_POST['selectCulto'];
            $ativoConversao = $_POST['SelectAtivo'];
            $tipoConversao = $_POST['selectModo'];
            $obsConversao = $_POST['observacao'];
            //Aulas Integração
            $aulaIntegracao = 'A1, A2, A3, A4, A5, A6,A7, A8, A9, A10, A11, A12';
            
            $phoneConvertido = $_POST['inputPhone'];
            //verifica a existência de um mesmo número de telefone
            $sqlPhone = "SELECT COUNT(*) AS registroPhone FROM cad_convertidos WHERE telefone = $phoneConvertido";
            $resultPhone = $mysqli->query($sqlPhone);
            $row = $resultPhone->fetch_assoc();
            $totalRegistros = $row['registroPhone'];
            
            if($totalRegistros != 0){
                echo
                '<script>
                     swal("Atenção!", "Telefone cadastrado em nosso sistema!", "error");
                </script>';
            
            
            }else{
                $result = mysqli_query($mysqli,
                "INSERT INTO
                cad_convertidos(nome, endereco, bairro, telefone, dt_nasc, dt_conv, culto, ativo, tipo, observacao, aulas_integracao)
                VALUES
                ('$nomeConvertido', '$endConvertido', '$bairroConvertido', '$phoneConvertido', '$nascConvertido', '$dataConversao', '$cultoConversao',
                '$ativoConversao', '$tipoConversao', '$obsConversao', '$aulaIntegracao')");

                echo 
                '<script>
                     swal("Sucesso!", "Cadastro realizado!", "success");
                </script>';

            }

        }
        


?>