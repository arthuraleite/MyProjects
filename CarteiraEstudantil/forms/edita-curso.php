<?php   require_once("../database/conectandoDB.php");
require_once("../database/banco-curso.php");
require_once("../models/cabecalho.php");

$id = $_GET["id"];
$nome = $_GET["nome"];
$cursos = listarUmCurso($conexao, $id, $nome);

?>

<form method="post" action="../actions/editar-curso.php">
    <?php foreach ($cursos as $curso):?>
        <!-- ID ID ID ID ID -->
        <div class="form-group">
            <label>Identificação:</label>
            <input type="text" class="form-control" name="id" value="<?=$curso['id']?>" readonly>
        </div>

        <!-- NOME NOME NOME -->
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?=$curso['nome']?>">
        </div>

        <div class="div">
            &ensp;
        </div>

        <button type="submit" class="btn btn-primary form-control" name="atualizar">Atualizar</button>

    <?php endforeach;?>
</form>

<?php

require_once("../models/rodape.php");?>
