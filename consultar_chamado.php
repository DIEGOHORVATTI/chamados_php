<?php require_once "validador_acesso.php" ?>

<?php

  //chamados
  $chamados = array();

  //abrir o arquivo.hd
  $arquivo = fopen('./arquivo.hd', 'r');

  //enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { //testa pelo fim de um arquivo
    //linhas  
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  //fechar o arquivo aberto
  fclose($arquivo);
  
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>Consultar chamado</title>

  <link rel="shortcut icon" href="./logo.png" />

  <?php require_once "cdns.php" ?>

</head>

  <body>

    <?php require_once "header.php" ?>

    <div class="container">    
      <div class="row">

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
              <?php foreach($chamados as $chamado) { ?>
              
                <?php

                  $chamado_dados = explode('#', $chamado);

                  //
                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $chamado_dados[0]) {
                      continue;
                    }
                  }

                  if(count($chamado_dados) < 3) {
                    continue;
                  }

                ?>

                <div class="card-consultar-erros mb-4">
                  <div class="card">
                    <div class="card-topo"><?=$chamado_dados[1]?></div>
                    
                    <div class="card-corpo">
                      
                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                    <p class="card-text"><?=$chamado_dados[3]?></p>
                
                      
                    </div>
                  </div>
                </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-12">
                  <a class="btn btn-lg btn btn-lg btn-outline-secondary btn-block" href="/index.php">Voltar</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>