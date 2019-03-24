<?php
require_once("../database/conectandoDB.php");
require_once("../database/banco-aluno.php");
require_once("../models/cabecalho.php");

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$nascimento = $_POST['datanascimento'];
$rg = $_POST['rg'];
$instituicao = $_POST['instituicao'];
$curso = $_POST['curso'];
$fotoID = $_POST['fotoID'];

$validade = date('Y-m-d', strtotime('+1 year'));
$datanascimento = date('Y-m-d', strtotime($nascimento));


$concat = md5($rg.$matricula);
$codigo = $concat;

if(editarAluno($conexao, $nome, $matricula, $codigo, $datanascimento, $rg, $instituicao, $curso, $fotoID, $validade)){ ?>
    <p>O cadastro do Aluno <?=$nome?> foi atualizado com sucesso!</p>
    <p>Para retornar ao menu do Aluno <a href="../index/aluno.php">Clique aqui</a>.</p>
<?php } else { ?>
    <p>Erro ao atualizar o aluno.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
