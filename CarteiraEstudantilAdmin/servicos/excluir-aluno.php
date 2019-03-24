<?php
/* prepara o documento para comunicação com o JSON, as duas linhas a seguir são obrigatórias
  para que o PHP saiba que irá se comunicar com o JSON, elas sempre devem estar no ínicio da página */
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=utf-8");?>

<?php
require_once("../database/conectandoDB.php");
$codigo = $_GET['codigo'];?>

<?php 
try {
    $query = "DELETE FROM aluno WHERE code_acess = '{$codigo}'";

    $result = mysqli_query($conexao, $query);
    $rowsaffected = mysqli_affected_rows($conexao);

    if ($result == true && $rowsaffected > 0) {
        $StringJson = '{"status":"true"}';
        
        echo $StringJson;
    }else{
        $StringJson = '{"status":"false"}';
        
        echo $StringJson;
    }
} catch(PharException $e) {
    $StringJsonError = '{"status":"false"}';
    echo $StringJsoneError;
}
?>
