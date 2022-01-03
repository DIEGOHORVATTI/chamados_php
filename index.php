<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <title>Chamados</title>

  <link rel="shortcut icon" href="./logo.png" />

  <?php require_once "cdns.php" ?>

</head>

  <body>

    <?php require_once "header.php" ?>
    
    <div class="margin container">    
        <div class="row" align="center">

          <div class="md-1 mt-1 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center">
            <a class="card_duplex" href="abrir_chamado.php">
              <i class="fas fa-edit"></i><span> Descrever erro</span>
            </a>
          </div>

          <div class="md-1 mt-1 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center">
            <a href="consultar_chamado.php"  class="card_duplex" src="formulario_consultar_chamado.png">
              <i class="fas fa-file"></i><span> Consultar erro</span>
            </a>
          </div>

        </div>
    </div>

  </body>

  <!--js-->
  <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</html>