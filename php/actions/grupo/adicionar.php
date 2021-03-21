<?php
    require_once("../../../conexao/conexao.php");

    $nome = $_POST['nome'];
    

    $stmt = $conn->prepare("INSERT INTO grupos (nome_grupo) 
    values(:nome)");

    $stmt->bindParam(':nome',$nome);
    $stmt->execute();

    header("Location:../../../index.php");
?>