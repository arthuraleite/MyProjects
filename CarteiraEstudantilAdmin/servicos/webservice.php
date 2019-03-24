<?php
/* prepara o documento para comunicação com o JSON, as duas linhas a seguir são obrigatórias
  para que o PHP saiba que irá se comunicar com o JSON, elas sempre devem estar no ínicio da página */
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=utf-8");?>

<?php
$code_acess = $_GET["code_acess"];

$array = array("matricula" => $code_acess);

// Dados do servidor da Hostinger
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$banco    = 'carteiraestudantil';



try {
    $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
    $conecta->exec("set names utf8");
    $consulta = $conecta->prepare("SELECT A.*, C.nome AS cursoNome, I.nome AS instNome, I.logoID as logo FROM aluno A LEFT JOIN curso C on C.id = A.curso LEFT JOIN instituicao I on I.id = A.instituicao where  A.code_acess = '". $code_acess ."'");
    //$consulta = $conecta->prepare('select * from aluno where matricula = '. $matricula);

    $consulta->execute(array());
    $resultadoDaConsulta = $consulta->fetchAll();
    
    $StringJson = null;
    $StringJson = '{"status":"true",';

    if ( count($resultadoDaConsulta) ) {
        foreach($resultadoDaConsulta as $dados) {

            $StringJson .= '"nome":"' . $dados['nome']  . '",';
            $StringJson .= '"rg":"' . $dados['rg']    . '",';
            $StringJson .= '"matricula":"' . $dados['matricula']    . '",';
            $StringJson .= '"fotoID":"' . $dados['fotoID']    . '",';
            $StringJson .= '"curso":"' . $dados['cursoNome']    . '",';
            $StringJson .= '"instituicao":"' . $dados['instNome']    . '",';
            $StringJson .= '"nascimento":"' . $dados['nascimento']    . '",';
            $StringJson .= '"validade":"' . $dados['validade']    . '",';
            $StringJson .= '"logoID":"' . $dados['logo']    .  '"}';
        }   
        
        echo $StringJson;
    }

    else
    {
        $StringJson = '{"status":"false"}';

        echo $StringJson;
    }

} catch(PDOException $e) {
    $StringJsonError = '{"status":"false"}';
    echo $StringJsoneError;
}
?>