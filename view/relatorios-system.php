<?php
    include '../controller/protege-sessao.php';
    include '../controller/config_db.php';
    include 'header-system.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELATÓRIOS</title>
</head>
<body>
<section class="form-reserva-list container-fluid col-md-5 col-lg-6" style="margin-top: 20%">
        <h1 class="text-center fw-bolder text-uppercase text mb-4 d-flex justify-content-center gap-1"><img src="../src/img/clipboard-data-fill.svg" width="10%">relatórios</h1>
        <div class="mb-3 col-12 d-flex justify-content-center flex-column gap-1 border border-warning-subtle rounded p-2">
            <div class="col-12">
                <h6 class="text-uppercase text-center">Período</h6>
            </div>
            <div class="col-12 d-flex justify-content-center gap-3">
                <div class="col-5">
                    <select class="form-select bg-light" aria-label="Default select example">
                        <option selected>MÊS</option>
                        <option value="01">JANEIRO</option>
                        <option value="02">FEVEREIRO</option>
                        <option value="03">MARÇO</option>
                        <option value="04">ABRIL</option>
                        <option value="05">MAIO</option>
                        <option value="06">JUNHO</option>
                        <option value="07">JULHO</option>
                        <option value="08">AGOSTO</option>
                        <option value="09">SETEMBRO</option>
                        <option value="10">OUTUBRO</option>
                        <option value="11">NOVEMBRO</option>
                        <option value="12">DEZEMBRO</option>
                    </select>
                </div>
                <div class="col-5">
                    <input type="number" class="form-control bg-light" id="formGroupExampleInput2" placeholder="ANO" min="2000" max="2300" minlenght="4" maxlenght="4">
                </div>
            </div>
        </div>
        <div class="mb-3 col-12 d-flex justify-content-center flex-column gap-1 border border-warning-subtle rounded p-2">
            <div class="col-12">
                <h6 class="text-uppercase text-center">localidade</h6>
            </div>
            <div class="col-12 d-flex justify-content-center gap-1">
                <div class="col-11">
                    <select type="search" id="pesquisar-item" name="pesquisar-item" class="form-control select_ticket bg-light text-uppercase form-select form-select" aria-label="Large select example">
                        <option value="" selected>todos</option>    
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
                </div>
            </div>
        </div>
        <div class="mb-3 col-12 d-flex justify-content-center flex-column gap-1 border border-warning-subtle rounded p-2">
            <div class="col-12">
                <h6 class="text-uppercase text-center">integração</h6>
            </div>
            <div class="col-12 d-flex justify-content-center gap-3">
                <div class="col-11">
                    <select type="search" id="pesquisar-item" name="pesquisar-item" class="form-control select_ticket bg-light text-uppercase form-select form-select" aria-label="Large select example">
                        <option value="todos" selected>todos</option>    
                        <option value="finalizados">Finalizados</option>
                        <option value="pendentes">Pendentes</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-4 col-12 d-flex justify-content-center flex-column gap-1 border border-warning-subtle rounded p-2">
            <div class="col-12">
                <h6 class="text-uppercase text-center">tipo do relatório</h6>
            </div>
            <div class="col-12 d-flex justify-content-center gap-3">
                <div class="col-11">
                    <select type="search" id="pesquisar-item" name="pesquisar-item" class="form-control select_ticket bg-light text-uppercase form-select form-select" aria-label="Large select example">
                        <option value="todos" selected>simplificado</option>    
                        <option value="finalizados">detalhado</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="button" class="btn fw-bolder btn-warning text-uppercase col-12 d-flex shadow justify-content-center align-items-center gap-1"><img src="../src/img/floppy-fill.svg">gerar</button>

        
</section>
    
</body>
</html>