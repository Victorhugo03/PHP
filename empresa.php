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

<?php require "menu_empresa.php" ?>

<body> 
    <h1 style="text-align: center;margin: 30px 0;">RELATORIOS</h1>
    <section style="margin: 30px 0;">
    <center>
        <div class="box-user">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">MÊS</th>
                    <th scope="col">ANO</th>
                    <th scope="col">DOWLOAD</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conexao.php";
                        $sql_query = "SELECT * FROM relatorios WHERE empresa_cnpj = '" . $_COOKIE['cnpj'] . "'";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['ID'];
                                $mes = $row['mes'];
                                $ano = $row['ano'];
                                $local_arqv = $row['local_arqv'];
                                $cnpj = $row['empresa_cnpj']
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $cnpj; ?></td>
                        <td><?php echo $mes; ?></td>
                        <td><?php echo $ano; ?></td>
                        <td><a class="btn btn-outline-success" href="<?php echo $local_arqv; ?>" download>BAIXAR</a></td>
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