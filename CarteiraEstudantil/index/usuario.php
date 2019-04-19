<?php
require_once("../database/banco-usuario.php");
require_once("../database/conectandoDB.php");
require_once("../models/cabecalhoIndex.php");

$resultado = listarUsuarios($conexao);
?>
    <script type="text/javascript" charset="utf8" src="../scripts/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../scripts/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="../scripts/aluno.js"></script>

    <div class="container btn_container">
        <button onclick="window.location.href='../forms/cadastra-user.php';" class="btn btn-outline-secondary mybutton">Cadastrar</button>
    </div>

    <div class="div divison"> </div>
    <div class="div divison"> </div>

    <div class="container">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome de Usuário</td>
                <td>Ações</td>
            </tr>
            </thead>
            <?php
            while($users = mysqli_fetch_array($resultado))
            { ?>
                <tr>
                    <td><?=$users["id"]?></td>
                    <td><?=$users["username"]?></td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="excluir('<?=$users['username']?>', '<?=$users['pass']?>')">Excluir</a></button>
                        <script>
                            function excluir(username, pass){
                                window.location.href = "../actions/excluir-user.php?username=" + username + "&pass=" + pass;
                            }
                        </script>
                        
                       </td>
                   </tr>
            <?php
            }
            ?>
        </table>
    </div>

<?php
require_once("../models/rodapeIndex.php");
?>
