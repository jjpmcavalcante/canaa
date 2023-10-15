<?php include('header-system.php') ?>
<?php include('../controller/config_db.php');
//INICIO PAGINAÇÃO
$pagina = 1;
if(isset($_GET['pagina']))
  $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
if(!$pagina)
$pagina = 1;

//LIMITE DE ITENS POR PÁGINAÇÂO
$limite = 10;
$inicio = ($pagina * $limite) - $limite;

  $sqlAll = "SELECT COUNT(*) AS total_registros FROM cad_convertidos";
   $resultAll = $mysqli->query($sqlAll);
   $row = $resultAll->fetch_assoc();
   $registros = $row['total_registros'];

   $paginas = ceil($registros / $limite);
//FIM PAGINAÇÃO

  //VERIFICA SE O INPUT DE PESQUISA NÃO ESTA VAZIO
  if(!empty($_GET['search']))
  {
    include_once ('../controller/config_db.php');
    //CASO NÂO ESTEJA FAZ A BUSCA
    $dataItem = $_GET['search'];
    $sql = "SELECT * FROM cad_convertidos WHERE nome LIKE '%$dataItem%' or dt_conv LIKE '%$dataItem%' or bairro LIKE '%$dataItem%' or culto LIKE '%$dataItem%' ORDER BY codigo DESC LIMIT $inicio, $limite;";
    $result = $mysqli->query($sql); 
  }else{
    $sql = "SELECT * FROM cad_convertidos ORDER BY codigo DESC LIMIT $inicio, $limite";
    $result = $mysqli->query($sql); 
  }
  
   
 //FIM DA VERIFICAÇÂO
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>INTEGRAÇÂO</title>
    <link href="../src/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<section class="form-reserva-list container-fluid col-md-5 col-lg-6" style="margin-top: 20%">
        <h1 class="text-center fw-bolder text-uppercase text mb-4 d-flex justify-content-center gap-1"><img src="../src/img/biblia.png" width="10%">Integração</h1>
            

            <div class="input-group mb-3 shadow">
              <!--ÁREA DE PESQUISA-->
              <input type="search" class="form-control text-uppercase bg-light" id="pesquisar-item" name="pesquisar-item" placeholder="nome, bairro, conversão e culto " aria-label="Recipient's username" aria-describedby="button-addon2">
              <button onclick="searchData()" class="btn btn-outline-secondary btn-warning" type="button" id="button-addon2" title="PESQUISAR">
                <img src="../src/img/search.svg" alt="PESQUISAR" width='16' height='16'>
              </button>
            </div>
          
            


        
            <table class="table table-striped-columns table-hover tabela-cadastro">
                <tbody>
                
                    <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo '<tr class="">';
                        echo '<td class="card d-flex flex-row align-items-center mb-3 shadow bg-light">';
                        echo    '<img src="'.($user_data['foto'] == '' ? '../src/img/img-rosto.jpg' : 'base64(data:image/jpeg;base64,'. base64_encode($user_data['foto'])).'" class="card-img" alt="..." style="width: 30%; height: 30%;">';
                        echo    '<div class="card-body d-flex flex-column bg-light" >';
                        echo        '<p class="card-text text-uppercase lh-sm" style="font-size: 80%;">
                                        <strong>Nº: </strong>'
                                            .$user_data['codigo'].'<br>
                                        <strong>Nome: </strong>'
                                            .$user_data['nome'].'<br>
                                        <strong>Bairro: </strong>'
                                            .$user_data['bairro'].'<br>
                                        <strong>Obs.: </strong>'
                                            .$user_data['obs_integracao'].'<br>
                                    </p>';
                        echo    '<div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>';
                        echo    '</div>';
                        echo '</td>';
                        echo '<tr>';
                    }
                    
                    ?>    
                </tbody>  
            </table>

            <!--PAGINAÇÂO DA LISTA-->        
<nav aria-label="..." class="d-flex justify-content-center">
    <ul class="pagination d-flex align-items-center">
      <!--BOTÂO PRIMEIRA PÁGINA-->
        <li class="page-item">
          <a class="page-link bg-dark text-light" href="?pagina=1">
            Primeira
          </a>
        </li>
        <!--BOTÃO VOLTAR-->
        <?php if ($pagina>1 ):?>
          <li class='page-item'>
              <a class='page-link bg-warning text-light' href='?pagina=<?=$pagina-1?>'>
                <img src='../src/img/arrow-left-circle-fill.svg' >
              </a>
          </li>
        <?php endif ?>
        
        <li class="page-item disabled">
          <a class="page-link" >
            <?=$pagina?>
        </a>
        </li>
        <!--BOTÃO AVANÇAR-->
        <?php if ($pagina<$paginas):?>
          <li class="page-item">
            <a class='page-link bg-warning text-light' href='?pagina=<?=$pagina+1?>' >
              <img style="" src="../src/img/arrow-right-circle-fill.svg" width="" height= ''>
            </a>
          </li>
        <?php endif ?>
        <!--BOTÃO ÚLTIMA PÁGINA-->
        <li class="page-item">
          <a class="page-link bg-dark text-light" href="?pagina=<?=$paginas?>">Última</a>
        </li>
    </ul>
</nav>
<!--FIM PAGINAÇÃO-->
</section>

    
</body>
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
      window.location = "registros-conversao.php?search=" + search.value;
    }
</script>
<!--FIM BOTÃO PESQUISAR-->
</html>