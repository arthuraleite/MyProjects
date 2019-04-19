<?php
require_once('../models/cabecalho.php');
require_once('../database/conectandoDB.php');
require_once('../database/banco-aluno.php');

$codigo = $_GET['codigo'];?>

<?php if(excluirAluno($conexao, $codigo)){ ?>
    <p>O Aluno foi excluído com sucesso!</p>
    <p><a href="../index/aluno.php">Clique aqui</a> para retornar ao menu Aluno.</p>

<?php } else { ?>
    <p>Erro ao excluir o aluno.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
