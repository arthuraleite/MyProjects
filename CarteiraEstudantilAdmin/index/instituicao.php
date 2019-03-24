<?php
require_once("../database/banco-instituicao.php");
require_once("../database/conectandoDB.php");
require_once("../models/cabecalho.php");

$resultado = listarInstituicoes($conexao);
?>
<script type="text/javascript" charset="utf8" src="../scripts/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../scripts/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../scripts/aluno.js"></script>

<div class="container btn_container">
    <button onclick="window.location.href='../forms/cadastra-instituicao.php';" class="btn btn-outline-secondary mybutton">Cadastrar</button>
</div>

<div class="div divison"> </div>
<div class="div divison"> </div>

<div class="container">
    <table id="employee_data" class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Identificação</td>
            <td>Nome da Instituição</td>
            <td>Ações</td>
        </tr>
        </thead>
        <?php
        while($instituicao = mysqli_fetch_array($resultado))
        { ?>
            <tr>
                <td><?=$instituicao["id"]?></td>
                <td><?=$instituicao["nome"]?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" onclick="visualizarInstituicao(<?=$instituicao['id']?>, '<?=$instituicao['nome']?>')">Visualizar</button>
                        <script>
                            function visualizarInstituicao(id, nome){
                                window.location.href = "../forms/visualiza-instituicao.php?id=" + id + "&nome=" + nome;
                            }
                        </script>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../forms/edita-instituicao.php?id=<?=$instituicao["id"]?>&nome=<?=$instituicao["nome"]?>">Editar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../actions/excluir-instituicao.php?id=<?=$instituicao["id"]?>&nome=<?=$instituicao["nome"]?>">Excluir</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>

<?php require_once("../models/rodape.php"); ?>
