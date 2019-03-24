<?php require_once("../models/cabecalho.php"); ?>

<form method="post" action="../actions/inserir-curso.php">

    <div class="form-group">
        <label>Curso:</label>
        <input type="text" class="form-control" name="curso_nome" placeholder="Curso...">
    </div>

    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>

</form>

<?php require_once("../models/rodape.php"); ?>
