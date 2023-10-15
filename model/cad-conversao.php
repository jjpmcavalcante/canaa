<?php include "../view/header-system.php"?>
<?php include '../controller/insercao-conversao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Conversão</title>
    <link rel="stylesheet" href="../src/css-interno/style-cadastros.css" class="">
    
</head>
<body class="">
    <section class="form-reserva-list container-fluid col-md-5 col-lg-6" style="margin-top: 20%">
        <form action="cad-conversao.php" class="container-fluid row g-3 mt-5" style="" method="POST">
                <h3 class="text-uppercase text-center fw-bolder d-flex justify-content-center gap-1"><img src="../src/img/novo-usuario.png" width="10%">cadastro conversão</h3>
                <div class="col-md-6">
                    <label for="inputName" class="form-label text-uppercase fw-bolder">nome <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control text-uppercase bg-light" name="inputName" id="inputName" placeholder="nome" autocomplete="off" required>
                </div>
                <div class="col-md-10 d-flex gap-3 flex-row">
                    <div class="">
                        <label for="selectAddress" class="form-label text-uppercase fw-bolder">endereço</label>
                        <input type="text" class="form-control text-uppercase bg-light" name="inputAddress" id="inputAddress" placeholder="endereço" autocomplete="off">
                    </div>
                    <div class="">
                        <label for="selectBairro" class="form-label text-uppercase fw-bolder">bairro <strong class="text-danger">*</strong></label>
                        <select name="selectBairro" id="selectBairro" class="form-select bg-light text-uppercase">
                            <option selected value="cohab">Cohab</option>
                            <option selected value="cabo">Cabo - Centro</option>
                            <option selected value="charneca">Charneca</option>
                            <option selected value="garapu">Garapu</option>
                            <option selected value="ponte dos carvalhos">Ponte dos Carvalhos</option>
                            <option selected value="pontezinha">Pontezinha</option>
                            <option selected value="pirapama">Pirapama</option>
                            <option selected value="praias">Praias</option>
                            <option selected value="novo horizonte">Novo Horizonte</option>
                            <option selected value="Outros">Outros</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPhone" class="form-label text-uppercase fw-bolder">Telefone <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control bg-light" name="inputPhone" id="inputPhone" placeholder="(00) 00000-0000" autocomplete="off" required>
                </div>
                <div class="col-md-12 d-flex gap-3">
                    <div class="">
                        <label for="inputDtNasc" class="form-label text-uppercase fw-bolder">Data Nascimento <strong class="text-danger">*</strong></label>
                        <input type="date" class="form-control bg-light" name="inpuDtNasc" id="inpuDtNasc" required>
                    </div>
                    <div class="">
                        <label for="inputDtConv" class="form-label text-uppercase fw-bolder">Data Conversão <strong class="text-danger">*</strong></label>
                        <input type="date" class="form-control bg-light" name="inpuDtConv" id="inpuDtConv" required>
                    </div>
                    </div>
                <div class="col-md-12">
                    <label for="selectCulto" class="form-label text-uppercase fw-bolder">Culto <strong class="text-danger">*</strong></label>
                    <select name="selectCulto" id="selectCulto" class="form-select bg-light text-uppercase">
                        <option selected value="renovo">Renovo</option>
                        <option selected value="domingo 10hrs">Domingo 10hrs</option>
                        <option selected value="domingo 17hrs">Domingo 17hrs</option>
                        <option selected value="domingo 19hrs">Domingo 19hrs</option>
                        <option selected value="jaboque">Jaboque</option>
                        <option selected value="eleva">Eleva</option>
                        <option selected value="ceia">Ceia</option>
                    </select>
                </div>
                <div class="col-md-12 d-flex gap-3">
                    <div class="col-4">
                        <label for="SelectAtivo" class="form-label text-uppercase fw-bolder">Ativo <strong class="text-danger">*</strong></label>
                        <select name="SelectAtivo" id="SelectAtivo" class="form-select bg-light text-uppercase">
                            <option selected>Sim</option>
                            <option selected>Não</option>
                        </select>
                    </div>
                    <div class="col-8">
                        <label for="selectModo" class="form-label text-uppercase fw-bolder">Tipo <strong class="text-danger">*</strong></label>
                        <select name="selectModo" id="selectModo" class="form-select bg-light text-uppercase">
                            <option selected value="conversao">Conversão</option>
                            <option selected value="reconciliacao">Reconciliação</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control bg-light text-uppercase" placeholder="observações" name="observacao" id="observacao" style="height: 100px" autocomplete="off"></textarea>
                </div>
                <!--
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="photoConvertido" id="photoConvertido">
                    <label class="shadow input-group-text p-2 d-flex justify-content-center bg-info rounded" for="photoConvertido"><img src="../src/img/camera-fill.svg" width="10%" class=""></label>
                </div>
                -->
                <p class="text-uppercase text-center">Os campos com <strong class="text-danger">*</strong> são obrigatórios</p>

                <div class="col-12 d-flex gap-2 justify-content-center">
                    <button type="submit" name="submit" id="submit" class="shadow btn btn-success text-uppercase" style="width: 50%;">cadastrar</button>
                    <button type="reset" class="shadow btn btn-warning text-uppercase" style="width: 50%;">Limpar</button>
                </div>
            </form>
        </section>
    
        </body>
</html>