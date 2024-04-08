<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI - Frequência de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<style>
header{
    background-color: #1b62b7;
    color: white;
}
img{
    margin-left: -20%;
}

footer{
    background-color: #1b62b7;
    color: white;
}
</style>

<header>
    <nav class="navbar navbar">
            <div class="container">
                <img src="senai2.png" alt="logosenai">
            </div>
            <p class="navbar-brand">Ja tem cadastro &#8594</p>
            <div class="login">
                <form method="post" action="login.html" class="form-inline">
                    <button class="btn btn-outline-light" type="submit">LOGIN</button>
                </form>
            </div>
    </nav>        
</header>

<body>
<h1 style="text-align: center;margin: 30px 0;">CADASTRO DE USUÁRIO</h1>
<div class="row justify-content-center container-fluid">
    <form method="post" action="second.php">
        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <div class="mb-3">
            <input type="hidden" name="instituicao" id="instituicao"  value="escola">
        </div>
        <button class="btn btn-outline-primary" type="submit">Cadastrar</button>
    </form> 
    
</div>                                                                                                                                                                                                               

</body>
<footer>


</footer>
</html>