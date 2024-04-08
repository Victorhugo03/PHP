<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI - Frequência de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $instituicao = $_POST["instituicao"];
        

        if($nome != "" && $cnpj != "" && $email != "" && $telefone != "" && $usuario != "" && $senha != "" && $instituicao != ""){
            $query_2 = "INSERT INTO empresas (nome, cnpj, email, telefone, usuario, senha) VALUES ('$nome', '$cnpj','$email','$telefone','$usuario','$senha')";
            $query_3 = "INSERT INTO usuarios (nome, usuario, senha, instituicao) VALUES ('$nome','$usuario','$senha','$instituicao')";
            $insert = mysqli_query($conn,$query_3);
            $insert = mysqli_query($conn,$query_2);
    
            if($insert){

                echo"<div class=\"alert alert-success\" role=\"alert\">EMPRESA CADASTRADA COM SUCESSO!</div>";
                header("refresh:2;url=index.php");

                $dir = ('empresas/'.$cnpj);

                if(!is_dir($dir)){

                    mkdir($dir, 0777, true);

                }else{
                    echo"<div class=\"alert alert-success\" role=\"alert\">A EMPRESA JA FOI CADASTRADA!</div>";
                };

            }else{

            echo "NÃO FOI POSSÍVEL CADASTRAR EMPRESA!";
            header("refresh:2;url=index.php");

            }

        }else{

            echo "NÃO FOI POSSÍVEL CADASTRAR EMPRESA!";
            header("refresh:2;url=index.php");

        }
    }
    $conn->close();
?>