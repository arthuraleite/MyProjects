<?php
    require_once("../database/conectandoDB.php");
    require_once("../database/banco-usuario.php");
    require_once("../models/cabecalho.php");

    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $passMD5 = md5($pass);
    if(inserirUsuario($conexao, $username, $passMD5)){ ?>
        <p class="text-sucess">O Usuário foi cadastrado com sucesso!</p>
        <p>Redirecionando ao menu Usuário...</p>
        <?php header('Location: ../index/usuario.php');
           exit;?>
    <?php } else { ?>
        <p class="text-danger">Erro ao cadastrar o Usuário.</p>
        <script>
            document.write('<a href="' + document.referrer + '">Retornar</a>');
        </script>
<?php } ?>

<?php require_once("../models/rodape.php");?>
