<?php   require_once("../database/conectandoDB.php");
        require_once("../models/cabecalho.php");
        ?>

    <form method="post" action="../actions/inserir-usuario.php">
        <!-- NOME NOME NOME -->
        <div class="form-group">
            <label>Nome de Usuário:</label>
            <input type="text" class="form-control" name="username" placeholder="Nome de Usuário..." maxlength="20">
        </div>

        <!-- PASS PASS PASS -->
        <div class="form-group">
            <label>Senha (Anote sua senha, pois não será possível recuperá-la):</label>
            <input type="password" class="form-control" name="pass" placeholder="Senha...">
        </div>

        <!-- PASS CONFIRM PASS CONFIRM PASS CONFIRM -->
        <!-- <div class="form-group">
            <label>Senha:</label>
            <input type="password" class="form-control" name="passconfirm" placeholder="Confirmação de Senha...">
        </div>
        <script>
            if(passconfirm == )
        </script> -->
        <div>
            &ensp;
        </div>
            <button type="submit" class="btn btn-primary form-control" name="cadastrar">Cadastrar</button>

    </form>

<?php

require_once("../models/rodape.php");?>
