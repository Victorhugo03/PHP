<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI - Frequência de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
</html>

<?php
require_once "conexao.php";

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$instituicao = $_POST["instituicao"];

$db = mysqli_select_db($conn,"sys_frequencia");

    $query_0 = "INSERT INTO usuarios (nome, usuario, senha, instituicao) VALUES ('$nome', '$usuario', '$senha', '$instituicao')";
    $insert = mysqli_query($conn,$query_0);

    if($insert){
        echo"<div class=\"alert alert-success\"role=\"alert\">USUÁRIO CADASTRADO COM SUCESSO!</div>";
        header("refresh:2;url=login.html");
    }else{
    echo "<div class=\"alert alert-danger\"role=\"alert\">NÃO FOI POSSÍVEL CADASTRAR USUÁRIO!</div>";
    header("refresh:2;url=login.html");
    }
?>