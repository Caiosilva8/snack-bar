<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>Loja Virtual</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="./login_files/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="./login_files/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="#">
      <img class="mb-4" src="./login_files/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Login</label>
      <input type="text" id="login" name="login" class="form-control" placeholder="Seu Login" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required="">
      <div class="checkbox mb-3">
        <label>
          <?php include "valida.php" ?>
         
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form>
  

</body></html>