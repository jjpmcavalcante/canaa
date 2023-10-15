<?php
    include '../controller/protege-sessao.php';
    include '../controller/config_db.php';
    include 'header-system.php';

    if(empty($_GET['search']))
    {
     
     $sqlAll = "SELECT COUNT(*) AS total_registros FROM cad_convertidos";
     $resultAll = $mysqli->query($sqlAll);
     $row = $resultAll->fetch_assoc();
     $totalRegistros = $row['total_registros'];

     $sqlAtivo = "SELECT COUNT(*) AS total_ativos FROM cad_convertidos WHERE ativo LIKE 'sim'";
     $resultAtivo = $mysqli->query($sqlAtivo);
     $rowAtivo = $resultAtivo->fetch_assoc();
     $totalAtivo = $rowAtivo['total_ativos'];

     $sqlIntegra = "SELECT COUNT(*) AS total_Integra FROM cad_convertidos WHERE aulas_integracao LIKE ''";
     $resultIntegra = $mysqli->query($sqlIntegra);
     $rowIntegra = $resultIntegra->fetch_assoc();
     $totalIntegra = $rowIntegra['total_Integra'];

     $sqlConv = "SELECT COUNT(*) AS total_conv FROM cad_convertidos WHERE tipo = 'conversao'";
     $resultConv = $mysqli->query($sqlConv);
     $rowConv = $resultConv->fetch_assoc();
     $totalConv = $rowConv['total_conv'];

     $sqlRecon = "SELECT COUNT(*) AS total_recon FROM cad_convertidos WHERE tipo = 'reconciliacao'";
     $resultRecon = $mysqli->query($sqlRecon);
     $rowRecon = $resultRecon->fetch_assoc();
     $totalRecon = $rowRecon['total_recon'];

    }else{
        
     $dataItem = $_GET['search'];
     $sqlAll = "SELECT COUNT(*) AS total_registros FROM cad_convertidos WHERE bairro like '%$dataItem%'";
     $resultAll = $mysqli->query($sqlAll);
     $rowAll = $resultAll->fetch_assoc();
     $totalRegistros = $rowAll['total_registros'];

     $sqlAtivo = "SELECT COUNT(*) AS total_ativos FROM cad_convertidos WHERE bairro like '%$dataItem%' and ativo like 'sim'";
     $resultAtivo = $mysqli->query($sqlAtivo);
     $rowAtivo = $resultAtivo->fetch_assoc();
     $totalAtivo = $rowAtivo['total_ativos'];

     $sqlIntegra = "SELECT COUNT(*) AS total_Integra FROM cad_convertidos WHERE bairro like '%$dataItem%' and aulas_integracao = ''";
     $resultIntegra = $mysqli->query($sqlIntegra);
     $rowIntegra = $resultIntegra->fetch_assoc();
     $totalIntegra = $rowIntegra['total_Integra'];

     $sqlConv = "SELECT COUNT(*) AS total_conv FROM cad_convertidos WHERE bairro like '%$dataItem%' and tipo = 'conversao'";
     $resultConv = $mysqli->query($sqlConv);
     $rowConv = $resultConv->fetch_assoc();
     $totalConv = $rowConv['total_conv'];

     $sqlRecon = "SELECT COUNT(*) AS total_recon FROM cad_convertidos WHERE bairro like '%$dataItem%' and tipo = 'reconciliacao'";
     $resultRecon = $mysqli->query($sqlRecon);
     $rowRecon = $resultRecon->fetch_assoc();
     $totalRecon = $rowRecon['total_recon'];
     
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Painel</title>

</head>
<body>
    <section class="container-fluid d-flex justify-content-center align-items-center flex-column"   style="z-index:0; margin-top: 30%">
        <form class="input-group form-group d-flex jusify-content-center">
            <select type="search" id="pesquisar-item" name="pesquisar-item" class="form-control select_ticket bg-dark text-light text-uppercase form-select form-select-lg mb-3" aria-label="Large select example">
                <option value="" selected>Bairros</option>    
                <option value="cohab">Cohab</option>
                <option value="cabo">Cabo - Centro</option>
                <option value="charneca">Charneca</option>
                <option value="garapu">Garapu</option>
                <option value="ponte dos carvalhos">Ponte dos Carvalhos</option>
                <option value="pontezinha">Pontezinha</option>
                <option value="pirapama">Pirapama</option>
                <option value="praias">Praias</option>
                <option value="novo horizonte">Novo Horizonte</option>
                <option value="outros">Outros</option>
            </select>
              <!--ÁREA DE PESQUISA-->
              <button onclick="searchData()" class=" btn btn-outline-secondary btn-warning" type="button" id="button-addon2" title="PESQUISAR" style="height: 48px;">
                <img src="../src/img/search.svg" alt="PESQUISAR" width="" height="" >
              </button>
            
        </form>
        <!-- Registros de todas Conversões -->
        <div class="card bg-light shadow mb-3 d-flex align-items-center" style="width: 100%; height: 30vh;">
            <div class="card-body d-flex align-content-center flex-column justify-content-center">
            <?php
                echo '<h5 class="card-title text-uppercase text-center fw-bolder">conversões de '.($_GET['search']).'</h5>';
                echo '<h1 class="text-center" style="font-size: 5rem">'.($totalRegistros).'</h1>';
                ?>   
                <p class="text-center text-uppercase" >Pessoas</p>
            </div>
        </div>
        


        <!-- Conversões Ativas -->
        <div class="card bg-secondary shadow mb-3" style="width: 100%; height: 30vh;">
        <div class="card-body d-flex align-content-center flex-column justify-content-center">
                <h5 class="card-title text-uppercase text-light text-center fw-bolder">ativos</h5>
                <?php
                echo '<h1 class="text-center text-light" style="font-size: 5rem">'.($totalAtivo).'</h1>';
                ?>   
                <p class="text-center text-uppercase text-light" >Pessoas</p>
            </div>
        </div>

        <!-- Integrações Concluídas -->
        <div class="card bg-light shadow mb-3" style="width: 100%; height: 30vh;">
            <div class="card-body d-flex align-content-center flex-column justify-content-center">
            <h5 class="card-title text-uppercase text-center fw-bolder">Integrações</h5>
                <?php
                echo '<h1 class="text-center" style="font-size: 5rem">'.($totalIntegra).'</h1>';
                ?>   
                <p class="text-center text-uppercase" >Concluídas</p>
            </div>
        </div>

        <!-- Registro Primeira Conversão -->
        <div class="card bg-secondary shadow mb-3 text-light" style="width: 100%; height: 30vh;">
            <div class="card-body d-flex align-content-center flex-column justify-content-center">
                <h5 class="card-title text-uppercase text-center fw-bolder">Primeira Conversão</h5>
                <?php
                echo '<h1 class="text-center" style="font-size: 5rem">'.($totalConv).'</h1>';
                ?>   
                <p class="text-center text-uppercase" >Pessoas</p>
            </div>
        </div>

        <!-- Registro Reconciliações -->
        <div class="card bg-light shadow mb-5" style="width: 100%; height: 30vh;">
            <div class="card-body d-flex align-content-center flex-column justify-content-center">
                <h5 class="card-title text-uppercase text-center fw-bolder">Reconciliações</h5>
                <?php
                echo '<h1 class="text-center" style="font-size: 5rem">'.($totalRecon).'</h1>';
                ?>   
                <p class="text-center text-uppercase" >Pessoas</p>
            </div>
        </div>


       

    </section>
    <!--SCRIPT BOTÔES DE PESQUISA-->
<script>
    var search = document.getElementById('pesquisar-item');

    //PEGA AÇÂO DE DAR O ENTER NO INPUT
    search.addEventListener("keydown", function(event){
        if (event.key === "Enter"){
          searchData();
        }
    });
    //INSERE O AÇÂO NO BOTÂO PESQUISAR
    function searchData(){
      window.location = "painel-system.php?search=" + search.value;
    }
</script>
<!--FIM BOTÃO PESQUISAR-->
</body>
</html>