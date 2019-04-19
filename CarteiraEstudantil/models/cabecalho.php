<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
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
            margin-right: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
            <nav class="navbar fixed-top navbar-light bg-light">
            <script>
                document.write('<a class="navbar-brand" href="' + document.referrer + '">Carteira Estudantil</a>');
            </script>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <!--ALUNO-->
                        <a class="nav-link" role="button" href="../index/aluno.php">
                            Aluno
                        </a>

                    <!--CURSO-->
                        <a class="nav-link" role="button" href="../index/curso.php">
                            Curso
                        </a>

                    <!--INSTITUICAO-->
                    <a class="nav-link" role="button" href="../index/instituicao.php">
                        Instituição
                    </a>

                    <!--USUARIO-->
                    <a class="nav-link" role="button" href="../index/usuario.php">
                        Usuário
                    </a>

                    <!--LOGOUT-->
                    <a class="nav-link text-danger" role="button" href="../actions/deslogar.php">
                        Logoff
                    </a>
                </ul>
            </div>


        </nav>
    </div>
    <div class="container container-principal">

