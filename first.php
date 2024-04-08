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
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$instituicao = $_POST["instituicao"];
$botao = $_POST["botao"];

require_once "conexao.php";

if (isset($botao)) {

    $verifica = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario ='$usuario' && senha = '$senha' && instituicao = '$instituicao'");

    if(mysqli_num_rows($verifica)<=0){
        echo"<div class=\"alert alert-danger\" role=\"alert\">ERRO AO INICIAR LOGIN</div>";
        header("refresh:2;url=login.html");
    }else{
        if($instituicao == "empresa"){
            setcookie('cnpj', mysqli_fetch_row(mysqli_query($conn,"SELECT cnpj FROM empresas WHERE usuario ='$usuario' && senha = '$senha'"))[0]);
            echo"<div class=\"alert alert-success\" role=\"alert\">EMPRESA LOGADA COM SUCESSO</div>";
            header("refresh:2;url=empresa.php");
        }else{
            if($instituicao == "escola")

                echo"<div class=\"alert alert-success\" role=\"alert\">ESCOLA LOGADA COM SUCESSO</div>";
                header("refresh:2;url=index.php");
        }
    }
}
?>