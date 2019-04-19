<?php   require_once("../database/conectandoDB.php");
require_once("../database/banco-instituicao.php");
require_once("../models/cabecalho.php");

$instituicao_nome = $_POST['instituicao-nome'];
$instituicao_logo = $_POST['instituicao-logo'];

if (inserirInstituicao($conexao, $instituicao_nome, $instituicao_logo)) { ?>
    <p class="text-sucess">A instituicao <?=$instituicao_nome?> foi cadastrada com sucesso!</p>
    <p>Redirecionando ao menu Instituicao...</p>
    <?php header('Location: ../index/instituicao.php');
        exit;?>
    <?php } else { ?>
    <p class="text-danger">Erro ao cadastrar o curso!</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php }

?>

<?php require_once ("../models/rodape.php");?>
