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

if(isset($_POST['enviar'])){
    $cnpj = $_POST['cnpj'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $arquivo = $_FILES['file'];
    $novoarquivo = explode('.', $arquivo['name']);

    if($novoarquivo[sizeof($novoarquivo)-1] != 'pdf'){
        die('<div class=\"alert alert-danger\" role=\"alert\">VOCÊ NÃO PODE FAZER UPLOAD DESSE TIPO DE ARQUIVO</div>');
        header("refresh:2;url=listar.php");
    
    }else{

        $local = "empresas/$cnpj/frequencia_$mes-$ano.pdf";
        move_uploaded_file($arquivo['tmp_name'], $local);
        mysqli_query($conn,"INSERT INTO relatorios (mes, ano, local_arqv, empresa_cnpj) VALUES ('$mes', '$ano', '$local', '$cnpj')");
        echo"<div class=\"alert alert-success\" role=\"alert\">O UPLOAD FOI FEITO COM SUCESSO</div>";
        header("refresh:2;url=listar.php");

    }
}
?>
