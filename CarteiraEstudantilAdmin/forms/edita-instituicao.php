<?php   require_once("../database/conectandoDB.php");
require_once("../database/banco-instituicao.php");
require_once("../models/cabecalho.php");

$id = $_GET["id"];
$nome = $_GET["nome"];
$instituicaoes = listarUmaInstituicao($conexao, $id, $nome);

?>

<form method="post" action="../actions/editar-instituicao.php">
    <?php foreach ($instituicaoes as $instituicao):?>
        <!-- ID ID ID ID ID -->
        <div class="form-group">
            <label>Identificação:</label>
            <input type="text" class="form-control" name="id" value="<?=$instituicao['id']?>" readonly>
        </div>

        <!-- NOME NOME NOME -->
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?=$instituicao['nome']?>">
        </div>

        <div class="form-group">
            <label>Logo ID (Google Docs):</label>
            <input type="textarea" class="form-control" name="logoID" value="<?=$instituicao['logoID']?>">
        </div>

        <div class="div">
            &ensp;
        </div>

        <button type="submit" class="btn btn-primary form-control" name="atualizar">Atualizar</button>

    <?php endforeach;?>
</form>

<?php

require_once("../models/rodape.php");?>
