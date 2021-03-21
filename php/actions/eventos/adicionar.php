<?php
    require_once("../../../conexao/conexao.php");
    
    
    
    $nome = $_POST['name'];
    $data = $_POST['data']; 
    $horario = $_POST['horario'];
    $descricao = $_POST['descricao'];
    $contato = $_POST['contato'];


    

    $stmt = $conn->prepare("INSERT INTO eventos (nome,data_evento,horario,descricao,contato_participante) 
    values(:nome,:data_evento,:horario,:descricao,:contato)");

    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':data_evento',$data);
    $stmt->bindParam(':horario',$horario);
    $stmt->bindParam(':descricao',$descricao);
    $stmt->bindParam(':contato',$contato);

    $stmt->execute();

    header("Location:../../../events.php");
?>