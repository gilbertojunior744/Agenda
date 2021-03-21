<?php
    require_once("../../../conexao/conexao.php");

    $id = $_GET['id'];
    
    $stmt = $conn->prepare("DELETE from contatos WHERE id_contato='$id'");
    
    $stmt->execute();

    header("Location:../../../index.php");

?>