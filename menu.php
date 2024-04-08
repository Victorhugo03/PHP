<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SENAI - Frequência de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<style>
header{
  background-color: #1b62b7;
  color: white;
}
a{
  margin-left: 10px;
}
body{
  background-color: whitesmoke;
}
</style>
<header>
  <nav class="navbar navbar-expand navbar">
    <div class="container">
      <img src="senai2.png" alt="logosenai">
    </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="btn btn-outline-light" href="index.php">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-light" href="listar.php">Listar Empresas</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-light" href="login.html">Sair</a>
      </li>
      <li>
        <form method="post" action="pesquisar.php" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" name="dado" id="dado" placeholder="Pesquisar por CNPJ" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Pesquisar</button>
        </form>
      </li>
    </ul>
  </div>
  </nav>
</header>

</html>