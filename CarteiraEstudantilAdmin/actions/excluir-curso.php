<?php
require_once('../models/cabecalho.php');
require_once('../database/conectandoDB.php');
require_once('../database/banco-curso.php');

$nome = $_GET['nome'];
$id = $_GET['id'];

if(excluirCurso($conexao, $id, $nome)){ ?>
    <p>O Curso foi excluído com sucesso!</p>
    <p>Para retornar ao menu Curso <a href="../index/curso.php">clique aqui</a>.</p>
<?php } else { ?>
    <p>Erro ao excluir o curso.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
