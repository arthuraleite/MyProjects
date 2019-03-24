<?php
require_once("../database/conectandoDB.php");
require_once("../database/banco-curso.php");
require_once("../models/cabecalho.php");

$id = $_POST['id'];
$nome = $_POST['nome'];

if(editarCurso($conexao, $id, $nome)){ ?>
    <p>O curso <?=$nome?> foi atualizado com sucesso!</p>
    <p>Para retornar ao menu do Curso <a href="../index/curso.php">Clique aqui</a>.</p>
<?php } else { ?>
    <p>Erro ao atualizar o aluno.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
