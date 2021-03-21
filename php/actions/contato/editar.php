<?php
    require_once("../../../conexao/conexao.php");
    $id = $_GET['id'];
    $img = $_POST['image'];
    $nome = $_POST['name'];
    $sobreNome = $_POST['last']; 
    $cel = $_POST['phone'];
    $email = $_POST['email'];

    

    $stmt = $conn->prepare("UPDATE contatos SET nome =':nome', sobrenome = ':sobrenome',celular = ':celular',email = ':email')"); 

    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':sobrenome',$sobreNome,);
    $stmt->bindParam(':celular',$cel);
    $stmt->bindParam(':email',$email);

    $stmt->execute();

    header("Location:../../index.php");

?>