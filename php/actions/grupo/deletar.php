<?php
    require_once("../../../conexao/conexao.php");

    $id = $_GET['id'];
    
    $stmt = $conn->prepare("DELETE from grupos WHERE id_grupo='$id'");
    $stmt->execute();

    header("Location:../../../index.php");

?>