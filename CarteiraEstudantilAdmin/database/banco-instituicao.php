<?php

function inserirInstituicao($conexao, $nome, $logo){
    if($nome == null || $logo == null){
        return false;
    }
    else {
        $query = "INSERT INTO instituicao (nome, logoID) VALuES ('{$nome}', '{$logo}')";
        return mysqli_query($conexao, $query);
    }
}
    
function listarInstituicao($conexao){
    $instituicoes = array();

    $query = "select * from instituicao";

    $resultado = mysqli_query($conexao, $query);

    while($instituicao = mysqli_fetch_assoc($resultado)){
        array_push($instituicoes, $instituicao);
    }

    return $instituicoes;
}

function listarInstituicoes($conexao){
    $query ="SELECT * FROM instituicao ORDER BY nome ASC";
    return mysqli_query($conexao, $query);
}

function listarUmaInstituicao($conexao, $id, $nome){
    $instituicoes = array();

    $query = "select * from instituicao WHERE id = '{$id}' AND nome = '{$nome}' ";

    $resultado = mysqli_query($conexao, $query);

    while($instituicao = mysqli_fetch_assoc($resultado)){
        array_push($instituicoes, $instituicao);
    }

    return $instituicoes;
}

function editarInstituicao($conexao, $id, $nome, $logoID){
    $query = "UPDATE instituicao SET nome = '{$nome}', logoID = '{$logoID}' WHERE id = {$id};";

    return mysqli_query($conexao, $query);

}

function excluirInstituicao($conexao, $id, $nome){
    $query = "DELETE FROM instituicao WHERE id = {$id} AND nome = '{$nome}'";

    return mysqli_query($conexao, $query);
}
