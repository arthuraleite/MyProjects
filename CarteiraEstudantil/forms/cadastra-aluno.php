<?php   require_once("../database/conectandoDB.php");
        require_once("../database/banco-aluno.php");
        require_once("../database/banco-instituicao.php");
        require_once("../database/banco-curso.php");
        require_once("../models/cabecalho.php");

        $cursos = listarCurso($conexao);
        $instituicoes = listarInstituicao($conexao);
        ?>

    <form method="post" action="../actions/inserir-aluno.php">
        <!-- NOME NOME NOME -->
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome..." maxlength="35">
        </div>

        <!-- MATRICULA MATRICULA MATRICULA -->
        <div class="form-group">
            <label>Matrícula:</label>
            <input type="number" class="form-control" name="matricula" placeholder="Matrícula...">
        </div>

        <!-- CURSO CURSO CURSO -->
        <div class="form-group">
            <label>Curso:</label>
            <select name="curso" class="form-control">
                <?php foreach ($cursos as $curso): ?>
                    <option value="<?=$curso['id']?>">
                        <?= $curso['nome']?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>

        <!-- INSTITUICAO INSTITUICAO INSTITUICAO -->
        <div class="form-group">
            <label>Instituição:</label>
            <select name="instituicao" class="form-control">
                <?php foreach ($instituicoes as $instituicao): ?>
                    <option value="<?=$instituicao['id']?>">
                        <?= $instituicao['nome']?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>

        <!-- RG RG RG -->
        <div class="form-group">
            <label>RG:</label>
            <input type="number" class="form-control" name="rg" placeholder="RG...">
        </div>

        <!-- NASCIMENTO NASCIMENTO NASCIMENTO -->
        <div class="form-group">
            <label>Data de Nascimento:</label>
            <input type="date" class="form-control" name="datanascimento" placeholder="Data de Nascimento...">
        </div>

        <!-- FOTO FOTO FOTO -->
        <div class="form-group">
            <label>Foto ID (Google Docs):</label>
            <input type="text" class="form-control" name="fotoID" placeholder="Foto ID...">
        </div>

        <div>
            &ensp;
        </div>
            <button type="submit" class="btn btn-primary form-control" name="cadastrar">Cadastrar</button>

    </form>

<?php

require_once("../models/rodape.php");?>
