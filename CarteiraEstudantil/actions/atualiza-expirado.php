<?php
    require_once("../database/conectandoDB.php");
    $dataAtual = date('Y-m-d');

    $query = "UPDATE aluno SET expirado = true WHERE validade < '{$dataAtual}'";

    mysqli_query($conexao, $query);

    header("Location: ../index/aluno.php");
    exit;
?>