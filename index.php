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
.box-user{
    width: 600px; 
}
</style>


<body>
    <?php 
    require "menu.php" 
    ?>
        <h1 style="text-align: center;margin: 30px 0;">CADASTRO DE EMPRESAS</h1>
        <center>
            <div class="box-user">
                    <form method="post" action="cadastrar.php">
                        <div class="text-center">
                            <div class="mb-3">
                                <label class="form-label">NOME:</label>
                                <input type="text" class="form-control" name="nome" id="nome" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CNPJ:</label>
                                <input type="text" class="form-control" name="cnpj" id="cnpj" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-MAIL DE CONTATO:</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">TELEFONE:</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">USUARIO:</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SENHA</label>
                                <input type="password" class="form-control" name="senha" id="senha" required>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="instituicao" id="instituicao"  value="empresa">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-outline-primary">CADASTRAR</button>
                    </form>
            </div>   
        </center>    
</body>

</html>