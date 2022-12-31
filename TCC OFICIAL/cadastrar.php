
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style_cad.css" rel="stylesheet">
    <link href="cadastrar.php">

    <title>Senatech</title>
  </head>
  <body class="container-fluid">
    <!-- logo -->
    <div class="row">
        <img id='logo' src="imagens/logo_cadastro.png">
    </div>
    <!-- Cadastro -->
    <div id='entrada_dados' class='container'>
      <h4>Cadastro de Funcionário</h4>
      <div class="box">
        <form class="row g-3" action="salvar_cadastro_funcionario.php" method="POST">
            <div class="col-md-12">
              <label class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome_completo" name="nome_completo" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Endereço</label>
              <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">CPF</label>
              <input type="number" class="form-control" id="CPF" name="CPF" max="99999999999" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Senha</label>
              <input type='password' class="form-control" id="senha" name="senha" max="99999999" placeholder="8 caracteres" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Função</label>
              <input type="text" class="form-control" id="funcao" name="funcao" required>
            </div>
            <div class="col-md-12">
              <div class="text-center">
                <a> 
                  <button type="submit" class="btn">Cadastrar</button>
                </a>
              </div>
            </div>
        </form>
      </div>
    </div>
  </body>
</html>