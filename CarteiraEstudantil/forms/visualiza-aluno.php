<?php
require_once("../database/conectandoDB.php");
require_once("../database/banco-aluno.php");
require_once("../database/banco-instituicao.php");
require_once("../database/banco-curso.php");
require_once("../models/cabecalho.php");

$code_acess = $_GET["codigo"];
$dados = dadosAluno($conexao, $code_acess);
$cursos = listarCurso($conexao);
$instituicoes = listarInstituicao($conexao);


?>
<div class="container">
    <div class="container btn_container">
        <button onclick="window.location.href='../../authentication/index.php?codigo=<?=$code_acess?>';" class="btn btn-outline-secondary mybutton">Visualizar Autenticador</button>
        <button onclick="window.location.href='../servicos/webservice.php?code_acess=<?=$code_acess?>';" class="btn btn-outline-secondary mybutton">Visualizar Serviço</button>
    </div>
    <div>
        <br/>
        <br/>
        <br/>
    </div>
    <form>
    <?php foreach ($dados as $dado):?>
            <!-- NOME NOME NOME -->
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome" value="<?=$dado['nome']?>" disabled>
            </div>

            <!-- MATRICULA MATRICULA MATRICULA -->
            <div class="form-group">
                <label>Matrícula:</label>

                <input type="number" class="form-control" name="matricula" value="<?=$dado['matricula']?>" disabled>

            </div>

            <!-- CURSO CURSO CURSO -->
            <div class="form-group">
                <label>Curso:</label>
                <select name="curso" class="form-control"  disabled>
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
                <select name="instituicao" class="form-control"  disabled>
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
                <input type="number" class="form-control" name="rg" value="<?=$dado['rg']?>" disabled>
            </div>

            <!-- NASCIMENTO NASCIMENTO NASCIMENTO -->
            <div class="form-group">
                <label>Data de Nascimento:</label>
                <input type="date" class="form-control" name="datanascimento" value="<?=$dado['nascimento']?>" disabled>
            </div>

            <!-- FOTO FOTO FOTO -->
            <div class="form-group">
                <label>Foto ID (Google Docs):</label>
                <input type="text" class="form-control" name="fotoID" value="<?=$dado['fotoID']?>" disabled>
            </div>
            <?php if($dado['fotoID'] != null){ ?><!-- LOGO LOGO LOGO-->
            <div class="form-group">
                <p>Foto do Aluno:</p>
                <img height="10%" width="10%" src="https://docs.google.com/uc?id=<?=$dado['fotoID']?>" alt="Foto do Aluno"/>
            </div>
            <?php } ?>

            <div>
                &ensp;
            </div>
            <button type="button" class="btn btn-primary" onclick="retornarTela()">Retornar</a></button>

            <?php endforeach;?>
            <script>
                function retornarTela(){
                    window.location.href = "../index/aluno.php";
                }
            </script>
    </form>
</div>
<?php

require_once("../models/rodape.php");?>
