<?php
    require_once("../../../conexao/conexao.php");

    $id = $_GET['id'];
    
    $stmt = $conn->query("DELETE from eventos WHERE id='$id'");
    $stmt->execute();

    header("Location:../../events.php");

?>