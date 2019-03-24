    <?php
require_once("../database/banco-curso.php");
require_once("../database/conectandoDB.php");
require_once("../models/cabecalho.php");

$resultado = listarCursos($conexao);
?>
<script type="text/javascript" charset="utf8" src="../scripts/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../scripts/DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../scripts/aluno.js"></script>

<div class="container btn_container">
    <button onclick="window.location.href='../forms/cadastra-curso.php';" class="btn btn-outline-secondary mybutton">Cadastrar</button>
</div>

<div class="div divison"> </div>
<div class="div divison"> </div>

<div class="container">
    <table id="employee_data" class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Identificação</td>
            <td>Nome do Curso</td>
            <td>Ações</td>
        </tr>
        </thead>
        <?php
        while($curso = mysqli_fetch_array($resultado))
        { ?>
            <tr>
                <td><?=$curso["id"]?></td>
                <td><?=$curso["nome"]?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" onclick="editarCurso(<?=$curso['id']?>, '<?=$curso['nome']?>')">Editar</button>
                        <script>
                            function editarCurso(id, nome){
                                window.location.href = "../forms/edita-curso.php?id=" + id + "&nome=" + nome;
                            }
                        </script>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../actions/excluir-curso.php?id=<?=$curso["id"]?>&nome=<?=$curso["nome"]?>">Excluir</a>
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
