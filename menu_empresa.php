<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI - Frequência de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<style>
.container {
    margin: 0;
}
a{
  margin-left: 5px;
}

div.button{
    padding-left: 70%;
}

div.normal{
    padding-left: 45%;
}

header{
    background-color: #1b62b7;
    color: white;
}
body{
    background-color: whitesmoke;
}

.box-user{
    width: 1080px; 
}
</style>


<header>
    <nav class="navbar navbar">
        <div class="container-sm">
            <img src="senai2.png" alt="logosenai">
        </div>
            <div class="navbar navbar">
                <div class="container">
                    <a class="btn btn-outline-light" href="empresa.php">Listar Arquivos</a>
                    <a class="btn btn-outline-light" href="login.html">Sair</a>
                    <form method="post" action="search.php" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" name="dado" id="dado" placeholder="Pesquisar por Mes ou Ano" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Pesquisar</button>
                    </form>
                </div>
        </div>
    </nav>
</header>
</html>