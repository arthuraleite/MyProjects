<?php

function inserirCurso($conexao, $nome){
    $query = "insert into curso (nome) values ('{$nome}')";

    return mysqli_query($conexao, $query);
}

function listarCurso($conexao){
    $cursos = array();

    $query = "select * from curso";

    $resultado = mysqli_query($conexao, $query);

    while($curso = mysqli_fetch_assoc($resultado)){
        array_push($cursos, $curso);
    }

    return $cursos;
}

function listarCursos($conexao){
    $query ="SELECT * FROM curso ORDER BY nome ASC";
    return mysqli_query($conexao, $query);
}


function listarUmCurso($conexao, $id, $nome){
    $cursos = array();

    $query = "select * from curso WHERE id = '{$id}' AND nome = '{$nome}' ";

    $resultado = mysqli_query($conexao, $query);

    while($curso = mysqli_fetch_assoc($resultado)){
        array_push($cursos, $curso);
    }

    return $cursos;
}

function editarCurso($conexao, $id, $nome){
    $query = "UPDATE curso SET nome = '{$nome}' WHERE id = {$id};";
    return mysqli_query($conexao, $query);
}

function excluirCurso($conexao, $id, $nome){
    $query = "DELETE FROM curso WHERE id = {$id} AND nome = '{$nome}'";

    return mysqli_query($conexao, $query);
}
