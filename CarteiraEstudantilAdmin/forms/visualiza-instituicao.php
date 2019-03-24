<?php
require_once("../database/conectandoDB.php");
require_once("../database/banco-aluno.php");
require_once("../database/banco-instituicao.php");
require_once("../database/banco-curso.php");
require_once("../models/cabecalho.php");


$id = $_GET["id"];
$nome = $_GET["nome"];
$instituicoes = listarUmaInstituicao($conexao, $id, $nome);

?>
<div class="container">
    <form>
        <?php foreach ($instituicoes as $instituicao):?>
            <!-- ID ID ID ID -->
            <div class="form-group">
                <label>Identificação:</label>
                <input type="text" class="form-control" name="instituicao" value="<?=$instituicao['id']?>" disabled/>
            </div>

            <!-- NOME NOME NOME -->
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="nome" value="<?=$instituicao['nome']?>" disabled>
            </div>

            <!-- LOGOBASE64 LOGOBASE64 LOGOBASE64-->
            <div class="form-group">
                <label>Foto ID (Google Docs):</label>
            </div>
                <textarea id="base64string" class="span8 preview form-control" rows="6" placeholder="Foto ID" disabled><?=$instituicao['logoID']?></textarea>

            <?php if($instituicao['logoID'] != null){ ?><!-- LOGO LOGO LOGO-->
            <div class="form-group">
                <p>Logo da Instituição:</p>
                <img height="10%" width="10%" src="https://docs.google.com/uc?id=<?=$instituicao['logoID']?>" alt="Logo da Instituição"/>
            </div>
            <?php } ?>

            <div>
                &ensp;
            </div>

            <button type="button" class="btn btn-primary form-control" onclick="retornarTela()">Retornar</button>
            <script>
                function retornarTela(){
                    window.location.href = "../index/instituicao.php";
                }
            </script>
        <?php endforeach;?>
    </form>
</div>
<?php

require_once("../models/rodape.php");?>
