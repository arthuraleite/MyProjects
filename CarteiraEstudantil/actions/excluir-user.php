<?php
require_once('../models/cabecalho.php');
require_once('../database/conectandoDB.php');
require_once('../database/banco-usuario.php');

$username = $_GET['username'];
$pass = $_GET['pass'];
?>

<?php if(excluirUsuario($conexao, $username, $pass)){ ?>
    <p>O Usuário foi excluído com sucesso!</p>
    <p><a href="../index/usuario.php">Clique aqui</a> para retornar ao menu Usuário.</p>

<?php } else { ?>
    <p>Erro ao excluir o Usuário.</p>
    <script>
        document.write('<a href="' + document.referrer + '">Retornar</a>');
    </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
