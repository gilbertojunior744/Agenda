<?php
    require_once("../../../conexao/conexao.php");
    $grupo = $_POST['nome'];
    $participante = $_POST['participante'];
    

    $stmt = $conn->prepare("INSERT INTO participantes (nome_grupo,nome_participante) 
    values(:grupo,:participante)");

    $stmt->bindParam(':nome',$nome);
    $stmt->execute();

    header("Location:../../../index.php");
?>