<?php
require_once('../models/cabecalho.php');
require_once('../database/conectandoDB.php');
require_once('../database/banco-instituicao.php');

$nome = $_GET['nome'];
$id = $_GET['id'];

if(excluirInstituicao($conexao, $id, $nome)){ ?>
    <p>A Instituição foi excluída com sucesso!</p>
    <p>Para retornar ao menu de Instituições <a href="../index/instituicao.php">Clique aqui</a>.</p>
<?php } else { ?>
    <p>Erro ao excluir a instituição.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
