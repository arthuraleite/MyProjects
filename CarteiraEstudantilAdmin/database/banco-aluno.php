<?php

function inserirAluno($conexao, $nome, $matricula, $codigo, $datanascimento, $rg, $instituicao, $curso, $fotoID, $validade){
    $query = "INSERT INTO aluno(nome, curso, instituicao, nascimento, matricula, rg, validade, code_acess, fotoID) 
                VALUES ('{$nome}',{$curso},{$instituicao},'{$datanascimento}',{$matricula},{$rg},'{$validade}','{$codigo}','{$fotoID}')";
    return mysqli_query($conexao, $query);
}

function editarAluno($conexao, $nome, $matricula, $codigo, $datanascimento, $rg, $instituicao, $curso, $fotoID, $validade){
    $query = "UPDATE aluno SET matricula = {$matricula}, code_acess = '{$codigo}', nome = '{$nome}', nascimento = '{$datanascimento}', rg = {$rg}, fotoID = '{$fotoID}', validade = '{$validade}', curso = {$curso}, instituicao = {$instituicao} WHERE matricula = {$matricula};";
    return mysqli_query($conexao, $query);
}

function listarAlunos($conexao){
    $query ="SELECT A.*, C.nome AS cursoNome, I.nome AS instNome FROM aluno A LEFT JOIN curso C on C.id = A.curso LEFT JOIN instituicao I on I.id = A.instituicao ORDER BY nome ASC";
    return mysqli_query($conexao, $query);
}

function dadosAluno($conexao, $code_acess){
    $alunos = array();

    $query = "SELECT * FROM aluno WHERE code_acess = '{$code_acess}'";

    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}

function excluirAluno($conexao, $codigo){
    $query = "DELETE FROM aluno WHERE code_acess = '{$codigo}'";

    $result = mysqli_query($conexao, $query);
    $rowsaffected = mysqli_affected_rows($conexao);

    if ($result == true && $rowsaffected > 0) {
        return true;
    }else{
        return false;
    }
}