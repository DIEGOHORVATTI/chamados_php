<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="./logo.png" />

  <title>abrir chamados</title>


  <link rel="shortcut icon" href="./logo.png" />

  <?php require_once "cdns.php" ?>

</head>

  <body>

  <?php require_once "header.php" ?>


    <div class="container">    
      <div class="row">
        <div class="col-12">

        <div class="card">
          <div class="card-topo">Descreva o erro, obs: não é possivel editar após o envio. revise seu post!</div>
            <div class="card-corpo">


              <form method="post" action="registra_chamado.php">
                <label style="display: inline;">
                  <span>Título</span>
                </label>
                <textarea class="inputs" name="titulo" class="form-control" rows="1" placeholder="Titulo do erro"></textarea>
                  
                  <div class="mt-2 form-group">
                    <label style="display: inline;">Selecione Setor</label>
                    <select class="input_2"  name="categoria" class="form-control">
                      <option class="inputs">Selecione</option>
                      <option><span>Front-end (erro visual)</span></option>
                      <option><span>Back-end (erro funcional)</span></option>
                      <option><span>Digitalitação (erro de digitalização)</span></option>
                      <option><span>Edição (erro de edição)</span></option>
                      <option><span>outros (descreva)</span></option>
                    </select>
                  </div>
                  
                  <div class="mt-2 form-group">
                    <label style="display: inline;">Descrição</label>
                    <textarea class="inputs" name="descricao" class="form-control" rows="10" placeholder="não pule linha! escreva apenas com espaços."></textarea>
                  </div>

                  <div class="row">
                    <hr>
                    <a  class="col-sm-12 col-dm-6 col-lg-6 col-xl-6 btn btn-lg btn-outline-secondary" href="index.php">Voltar</a>
                    <button class="col-sm-12 col-dm-6 col-lg-6 col-xl-6 btn btn-lg btn-outline-success" type="submit">enviar</button>
                  </div>
              </form>

            </div>
          </div>  
        </div>

      </div>
    </div>
      
  </body>

  <!--js-->
  <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</html>