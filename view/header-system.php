<?php include('../controller/protege-sessao.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../src/css-interno/style-header.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark d-flex flex-row justify-content-center" style="z-index: 10; position: fixed; width: 100vw; top:0;">
        
        <div class="container-fluid">
            <span class="text-light fw-bolder text-uppercase d-flex flex-column align-items-center">
                Ministério de Integração
            </span>
            <button class="navbar-toggler bg-light mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          
          
          <div class="collapse navbar-collaps" id="navbarText">
            <ul class="navbar-nav  bg-light me-auto gap-2 p-2 mb-2 mb-lg-0 d-flex flex-row flex-wrap justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../view/painel-system.php?search=" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/painel.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">Painel</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="../model/cad-conversao.php" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/novo-usuario.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">cadastro</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="../view/integrar-conversao.php" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/biblia.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">integrar</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="../view/registros-conversao.php" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/lista.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">Registros</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="../model/cad-users.php" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/seguranca.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">acesso</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="../view/relatorios-system.php" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/clipboard-data-fill.svg" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">relatórios</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="#" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/conformidade.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">logs</p>
                        </div>
                    </div>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " aria-current="page" href="../controller/desconectar-sessao.php" style="width: 30vw; height: 15vh; padding: 0;">
                    <div class="card d-flex flex-column p-4" style="align-items: center; ">
                        <img src="../src/img/desligar.png" class="card-img-top" alt="Painel" style="width: 40%;">
                        <div class="card-body p-0 mt-2">
                          <p class="card-text text-uppercase fw-bolder">sair</p>
                        </div>
                    </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script src="../src/bootstrap/js/bootstrap.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>