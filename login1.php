<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>
<header>
        <nav class="navbar navbar-expand-lg navbar bg">
                <a class="navbar-brand" href="login1.php">Ainda não tem cadastro? &#8594</a>
                    <div class="login">
                        <form method="post" action="cadastro1.php" class="form-inline">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cadastrar-se</button>
                        </form>
                    </div>
        </nav>        
</header>
<body>
<h2 style="text-align: center;margin: 40px 0;">LOGIN DE USUÁRIO</h2>
<div class="row justify-content-center container-fluid">
        <div class="card" style="width: 28rem;">
            <div class="container">
                <form method="post" action="first.php">
                    <div class="mb-3">
                        <label class="form-label">Usuario:</label>
                        <input type="text" name="usuario" id="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha:</label>
                        <input type="text" name="senha" id="senha" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Instituição:</label>
                        <input type="radio" name="empresa" id="empresa" value="empresa" required> Empresa
                        <input type="radio" name="escola" id="escola" value="escola" required> Escola
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>      
</div>

</body>

</html>