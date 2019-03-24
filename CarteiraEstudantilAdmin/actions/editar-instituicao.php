<?php
require_once("../database/conectandoDB.php");
require_once("../database/banco-instituicao.php");
require_once("../models/cabecalho.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$logoID = $_POST['logoID'];

if(editarInstituicao($conexao, $id, $nome, $logoID)){ ?>
    <p>A Instituição <?=$nome?> foi atualizado com sucesso!</p>
    <p>Para retornar ao menu da Instituição <a href="../index/instituicao.php">Clique aqui</a>.</p>
<?php } else { ?>
    <p>Erro ao atualizar o aluno.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
