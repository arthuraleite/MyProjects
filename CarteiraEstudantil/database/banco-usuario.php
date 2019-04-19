<?php

function inserirUsuario($conexao, $username, $pass){
    $query = "INSERT INTO administracao (username, pass) VALUES ('{$username}', '{$pass}');";
    return mysqli_query($conexao, $query);
}

function listarUsuarios($conexao){
    $query ="SELECT * FROM administracao;";
    return mysqli_query($conexao, $query);
}

function dadosUsuario($conexao, $username, $pass){
    $query = "SELECT * FROM administracao WHERE username = '{$username}' AND pass = '{$pass}';";

    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}

function excluirUsuario($conexao, $username, $pass){
    $query = "DELETE FROM administracao WHERE username = '{$username}' AND pass = '{$pass}';";

    $result = mysqli_query($conexao, $query);
    $rowsaffected = mysqli_affected_rows($conexao);

    if ($result == true && $rowsaffected > 0) {
        return true;
    }else{
        return false;
    }
}