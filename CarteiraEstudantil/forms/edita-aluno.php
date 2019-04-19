<?php   require_once("../database/conectandoDB.php");
        require_once("../database/banco-aluno.php");
        require_once("../database/banco-instituicao.php");
        require_once("../database/banco-curso.php");
        require_once("../models/cabecalho.php");

        $code_acess = $_GET["code_acess"];
        $dados = dadosAluno($conexao, $code_acess);
        $cursos = listarCurso($conexao);
        $instituicoes = listarInstituicao($conexao);
        
        ?>

    <form method="post" action="../actions/editar-aluno.php">
        <?php foreach ($dados as $dado):?>
        <!-- NOME NOME NOME -->
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?=$dado['nome']?>">
        </div>

        <!-- MATRICULA MATRICULA MATRICULA -->
        <div class="form-group">
            <label>Matrícula:</label>

            <input type="number" class="form-control" name="matricula" value="<?=$dado['matricula']?>" readonly>

        </div>

        <!-- CURSO CURSO CURSO -->
        <div class="form-group">
            <label>Curso:</label>
            <select name="curso" class="form-control">
                <?php foreach ($cursos as $curso): ?>
                    <?php $select = $dado['curso'] == $curso['id'] ? "selected" : ""; ?>
                    <option value="<?=$curso['id']?>" <?=$select?>>
                        <?= $curso['nome']?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>

        <!-- INSTITUICAO INSTITUICAO INSTITUICAO -->
            <div class="form-group">
                <label>Curso:</label>
                <select name="instituicao" class="form-control">
                    <?php foreach ($instituicoes as $instituicao): ?>
                        <?php $select = $dado['instituicao'] == $instituicao['id'] ? "selected" : ""; ?>
                        <option value="<?=$instituicao['id']?>" <?=$select?>>
                            <?= $instituicao['nome']?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>

        <!-- RG RG RG -->
        <div class="form-group">
            <label>RG:</label>
            <input type="number" class="form-control" name="rg" value="<?=$dado['rg']?>">
        </div>

        <!-- NASCIMENTO NASCIMENTO NASCIMENTO -->
        <div class="form-group">
            <label>Data de Nascimento:</label>
            <input type="date" class="form-control" name="datanascimento" value="<?=$dado['nascimento']?>">
        </div>

        <!-- FOTO FOTO FOTO -->
        <div class="form-group">
            <label>Foto ID (Google Docs):</label>
            <input type="text" class="form-control" name="fotoID" value="<?=$dado['fotoID']?>">
        </div>

        <div>
            &ensp;
        </div>
            <button type="submit" class="btn btn-primary form-control" name="atualizar">Atualizar</button>

        <?php endforeach;?>
    </form>

<?php

require_once("../models/rodape.php");?>
