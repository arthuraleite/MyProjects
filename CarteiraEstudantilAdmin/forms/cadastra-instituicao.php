<?php require_once("../models/cabecalho.php"); ?>

<form method="post" action="../actions/inserir-instituicao.php">
    <div class="form-group">
        <label>Instituição:</label>
        <input name="instituicao-nome" type="text" class="form-control" placeholder="Instituição...">
        <br/>
        <label>Foto ID (Google Docs):</label>
        <input name="instituicao-logo" type="textarea" class="form-control" placeholder="Foto ID...">
    </div>
    <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
</form>
<?php require_once("../models/rodape.php"); ?>
