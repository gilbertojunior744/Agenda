<?php
    require_once("../../../conexao/conexao.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome']; 
    $cel = $_POST['celular'];
    $email = $_POST['email'];
      

   $stmt = $conn->prepare("INSERT INTO contatos (nome,sobrenome,celular,email)
   values(:nome,:sobrenome,:celular,:email)");
    
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':sobrenome',$sobrenome);
    $stmt->bindParam(':celular',$cel);
    $stmt->bindParam(':email',$email);

    $stmt->execute();

    header("Location:../../../index.php");
?>