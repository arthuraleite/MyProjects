<?php   require_once("../database/conectandoDB.php");
        require_once("../database/banco-curso.php");
        require_once("../models/cabecalho.php");

$curso_nome = $_POST['curso_nome'];

if (inserirCurso($conexao, $curso_nome)) { ?>
    <p class="text-sucess">O Curso <?=$nome?> foi cadastrado com sucesso!</p>
    <p>Redirecionando ao menu Curso...</p>
    <?php header('Location: ../index/curso.php');
    exit;?>
<?php } else { ?>
    <p class="text-danger">Erro ao cadastrar o curso!</p>
    <?php mysqli_error($conexao);?>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php }

?>

<?php require_once ("../models/rodape.php");?>
