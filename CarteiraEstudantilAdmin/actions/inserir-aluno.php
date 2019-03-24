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

    $concat = $rg.$matricula;
    $codigo = md5($concat);
    

    if(inserirAluno($conexao, $nome, $matricula, $codigo, $datanascimento, $rg, $instituicao, $curso, $fotoID, $validade)){ ?>
        <p class="text-sucess">O Aluno <?=$nome?> foi cadastrado com sucesso!</p>
        <p>Redirecionando ao menu Aluno...</p>
        <?php header('Location: ../index/aluno.php');
           exit;?>
    <?php } else { ?>
        <p class="text-danger">Erro ao cadastrar o aluno.</p>
        <script>
            document.write('<a href="' + document.referrer + '">Retornar</a>');
        </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
