<?php
require_once("../database/banco-aluno.php");
require_once("../database/conectandoDB.php");
require_once("../models/cabecalho.php");

$resultado = listarAlunos($conexao);
?>
    <script type="text/javascript" charset="utf8" src="../scripts/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../scripts/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="../scripts/aluno.js"></script>

    <div class="container btn_container">
        <button onclick="window.location.href='../forms/cadastra-aluno.php';" class="btn btn-outline-secondary mybutton">Cadastrar</button>
    </div>

    <div class="div divison"> </div>
    <div class="div divison"> </div>

    <div class="container">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Matrícula</td>
                <td>Nome</td>
                <td>Instituição</td>
                <td>Curso</td>
                <td>Ações</td>
            </tr>
            </thead>
            <?php
            while($aluno = mysqli_fetch_array($resultado))
            { ?>
                   <tr>
                        <td><?=$aluno["matricula"]?></td>
                        <td><?=$aluno["nome"]?></td>
                        <td><?=$aluno["instNome"]?></td>
                        <td><?=$aluno["cursoNome"]?></td>
                       <td>
                           <div class="btn-group">
                               <button type="button" class="btn btn-primary" onclick="visualizarAluno('<?=$aluno['code_acess']?>')">Visualizar</a></button>
                               <script>
                                   function visualizarAluno(codigo){
                                       window.location.href = "../forms/visualiza-aluno.php?codigo=" + codigo;
                                   }
                               </script>
                               <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               </button>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="../forms/edita-aluno.php?code_acess=<?=$aluno["code_acess"]?>">Editar</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="../actions/excluir-aluno.php?codigo=<?=$aluno["code_acess"]?>">Excluir</a>
                               </div>
                           </div>
                       </td>
                   </tr>
            <?php
            }
            ?>
        </table>
    </div>

<?php
require_once("../models/rodape.php");
?>
