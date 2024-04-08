<?php
    require_once "conexao.php";

    $cnpj = $_GET["cnpj"];

    $query2 = "DELETE FROM relatorios WHERE empresa_cnpj = '$cnpj'";

    $query = "DELETE FROM empresas WHERE cnpj = '$cnpj'";
    
    if (mysqli_query($conn, $query2 )) {
        
        rmdir('empresas/'.$cnpj);

        if (mysqli_query($conn, $query)) {
            echo "<div class=\"alert alert-success\" role=\"alert\">EMPRESA EXCLUÍDA COM SUCESSO!</div>";
            header("refresh:2;url=listar.php");
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">ERRO AO EXCLUIR EMPRESA!</div>";
            header("refresh:2;url=listar.php");
        }
    }
?>