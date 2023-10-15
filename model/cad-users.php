<?php include "../view/header-system.php"?>
<?php include '../controller/insercao-usuario.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
<body>
    <section class="d-flex justify-content-center">
        <form class="row g-3 mt-5 container-fluid" action="../controller/insercao-usuario.php" method="POST">
                <h3 class="text-uppercase text-center fw-bolder d-flex justify-content-center gap-1"><img src="../src/img/seguranca.png" width="10%">cadastro usuário</h3>
                <div class="">
                    <label for="nameFull" class="form-label text-uppercase fw-bolder">nome <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control text-uppercase bg-light" name="nameFull" id="nameFull" autocomplete="off" required>
                </div>
                <div class="">
                    <label for="inputPhone" class="form-label text-uppercase fw-bolder">Telefone</label>
                    <input type="text" class="form-control bg-light" name="inputPhone" id="inputPhone" placeholder="(00) 00000-0000" autocomplete="off">
                </div>
                <div class="">
                    <label for="name-user" class="form-label text-uppercase fw-bolder">usuário <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control text-uppercase bg-light" name="name-user" id="name-user" autocomplete="off" required>
                </div>
                <div class="mb-2">
                    <label for="password-user" class="form-label text-uppercase fw-bolder">senha <strong class="text-danger">*</strong></label>
                    <input type="password" class="form-control text-uppercase bg-light" name="password-user" id="password-user" autocomplete="off" required>
                </div>
                <div class="mb-2">
                    <select name="selectIgreja" id="selectIgreja" class="form-select bg-light text-uppercase" required>
                        <option selected class="text-uppercase fw-bolder">congregação</option>    
                        <option value="recife">Canaã - Recife</option>
                        <option value="cabo">Canaã - Cabo</option>
                    </select>
                </div>
                <div class="">
                    <select name="selectPerfil" id="selectPerfil" class="form-select bg-light text-uppercase" required>
                        <option selected class="text-uppercase fw-bolder">perfil</option>
                        <option value="administrador">Administrador</option>
                        <option value="usuario-gi">Usuário GI</option>
                        <option value="usuario-mi">Usuário MI</option>
                    </select>
                </div>
                <p class="text-uppercase text-center">Os campos com <strong class="text-danger">*</strong> são obrigatórios</p>
                <div class=" d-flex gap-3 justify-content-center">
                    <button type="submit" name="submit" id="submit" class="btn shadow btn-success text-uppercase" style="width: 40%;">cadastrar</button>
                    <button type="reset" class="btn shadow btn-warning text-uppercase" style="width: 40%;">Limpar</button>
                </div>
            </form>
    </section> 
</body>
</html>