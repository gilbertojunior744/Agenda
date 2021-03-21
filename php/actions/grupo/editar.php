<?php
    require_once("../../../conexao/conexao.php");
    $id = $_GET['id'];
    $img = $_POST['image'];
    $nome = $_POST['name'];
    $sobreNome = $_POST['last']; 
    $cel = $_POST['phone'];
    $email = $_POST['email'];

    

    $stmt = $conn->prepare("UPDATE grupos SET nome =':nome'"); 

    $stmt->bindParam(':nome',$nome);
    $stmt->execute();

    header("Location:../../index.php");

?>