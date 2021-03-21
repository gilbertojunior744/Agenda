<?php
    require_once("../../../conexao/conexao.php");
    $id = $_GET['id'];
    $img = $_POST['image'];
    $nome = $_POST['name'];
    $data = $_POST['data']; 
    $horario = $_POST['horario'];
    $contato = $_POST['contato'];

    

    $stmt = $conn->prepare("UPDATE eventos SET nome =':nome', data_evento = ':data',horario = ':horario',contato = ':contato')"); 

    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':data',$data);
    $stmt->bindParam(':horario',$horario);
    $stmt->bindParam(':contato',$contato);

    $stmt->execute();

    header("Location:../../events.php");

?>