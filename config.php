<?php 

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = 'root';
    $dbName = 'db_cafeteria';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    // $validacao = $conexao -> $connect_errno: 'Erro' ? 'Sucesso';

    // echo ($validacao);

    if($conexao -> connect_errno){
      echo"Erro!";
   }
   else{
      echo"Conexão com sucesso!";
   }
?>