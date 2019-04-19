<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['login'];
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

    <style>
        .container-principal{
            padding: 80px 20px 65px 20px;
        }

        .rodape{
            margin: 5px;
            padding: 5px;
        }
        .form-aluno-column{
            width: 40%;
        }
        .divison{
            padding: 2%;
        }
        .mybutton{
            float:left;
        }

    </style>
</head>
<body>
        <div class="container">
                <nav class="navbar fixed-top navbar-light bg-light">
                <a class="navbar-brand" href="start.php">Carteira Estudantil</a>
                <a href="actions/deslogar.php" class="text-danger">Logout</a>
                </nav>
        </div>
        <div class="container container-principal">

                <h1 style="text-align: center;">Seja Bem Vindo ao Carteira Estudantil - Administrador</h1>
                <br/>
                <h2 style="text-align: center;">Selecione uma das opções:</h2>
                <br/>

                <div>
                    <button onclick="toMenuAluno()" type="button" class="btn btn-default btn-lg" style="width: 30%; background: #eaebec; margin-right: 2%; margin-left: 2%">
                        <img src="assets/alunos.png" style="width: 60%;">
                        <br/>
                        <b>Menu<br/>Aluno</b>
                    </button>
                    
                    <button onclick="toMenuCurso()" type="button" class="btn btn-default btn-lg" style="width: 30%; background: #eaebec; margin-right: 2%;">
                        <img src="assets/cursos.png" style="width: 60%;">
                        <br/>
                       <b>Menu<br/>Curso</b>
                    </button>

                    <button onclick="toMenuInstituicao()" type="button" class="btn btn-default btn-lg" style="width: 30%; background: #eaebec;  margin-right: 2%;">
                        <img src="assets/instituicoes.png" style="width: 60%;">
                        <br/>
                        <b>Menu<br/>Instituição</b>
                    </button>
                    <br/><br/>
                    <button onclick="toMenuUsuario()" type="button" class="btn btn-default btn-lg" style="width: 95%; background: #eaebec; margin-left: 2%; margin-right: 2%;">
                        <b>Menu Usuário</b>
                    </button>

                    <script>
                        function toMenuAluno(){
                            window.location.href = "index/aluno.php";
                        }

                        function toMenuCurso(){
                            window.location.href = "index/curso.php";
                        }

                        function toMenuInstituicao(){
                            window.location.href = "index/instituicao.php";
                        }

                        function toMenuUsuario(){
                            window.location.href = "index/usuario.php";
                        }
                    </script>
                </div>
        </div>
    <nav class="fixed-bottom navbar-light bg-light">
        <p class="rodape" style="text-align: center"><b>Desenvolvido pelo CASI.</b></p>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>