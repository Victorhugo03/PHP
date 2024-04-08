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

<body>
<?php require "menu.php" ?>
    <h1 style="text-align: center;margin: 30px 0;">RELAÇÃO DE EMPRESAS</h1>
        <section style="margin: 50px 0;">
        <center>
            <div class="box-user">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">E-MAIL</th>
                        <th scope="col">TELEFONE</th>
                        <th scope="col">USUARIO</th>
                        <th scope="col" colspan="2" style="text-align: center;">AÇÕES</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "conexao.php"; 
                        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                            $dado = $_POST["dado"];
                            $sql_query = "SELECT * FROM empresas WHERE cnpj = $dado";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $nome = $row["nome"];
                                $cnpj = $row["cnpj"];
                                $email = $row["email"];
                                $telefone = $row["telefone"];
                                $usuario = $row["usuario"];
                        }
                        ?>
                        
                        <tr class="trow">
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $cnpj; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $telefone; ?></td>
                            <td><?php echo $usuario; ?></td>
                            <td>
                                <form action="diretorio.php?cnpj=<?php echo $cnpj; ?>" method="post" enctype="multipart/form-data">
                                    <div class="input-group row g-3">
                                        <input type="text" class="form-control col-md-2" name="cnpj" id="cnpj" value="<?php echo $cnpj; ?>" hidden>
                                        <label class="form-label">MÊS:</label>
                                        <input type="text" class="form-control col-md-2" name="mes" id="mes" placeholder="DD">
                                        <label class="form-label">ANO:</label>
                                        <input type="text" class="form-control col-md-2" name="ano" id="ano" placeholder="AAAA">
                                        <label class="form-label">ARQUIVO:</label>
                                        <input type="file" class="form-control col-md-6" name="file" id="file">
                                        <button class="btn btn-outline-success" type="submit" name="enviar" id="enviar" value="enviar">Enviar</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                        <?php
                                } 
                            }
                        $conn->close(); 
                        ?>
                    </tbody>
                </table>
            </div>
        </center>
    </section>  
</body>

</html>