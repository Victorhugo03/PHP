<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sys_frequencia";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Verifica a conexão
  if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
  }
?>