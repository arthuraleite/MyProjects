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
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Carteira Estudantil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                        <!--ALUNO-->
                                <a class="nav-link" role="button" href="index/aluno.php">
                                Aluno
                                </a>

                        <!--CURSO-->
                                <a class="nav-link" role="button" href="index/curso.php">
                                Curso
                                </a>

                        <!--INSTITUICAO-->
                        <a class="nav-link" role="button" href="index/instituicao.php">
                                Instituição
                        </a>
                        </ul>
                </div>


                </nav>
        </div>
        <div class="container container-principal">

                <h1>&ensp;Seja Bem Vindo!</h1>
        </div>
    <nav class="fixed-bottom navbar-light bg-light">
        <p class="rodape" style="text-align: right"><b>Desenvolvido pelo CASI. &ensp;</b></p>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>