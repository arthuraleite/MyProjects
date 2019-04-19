<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/style.css"><link/>
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
        input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

    </style>
</head>
<body>
        <div class="container">
                <nav class="navbar fixed-top navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Carteira Estudantil</a>
                </nav>
        </div>
        <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
            <img src="assets/user.png" id="icon" alt="User Icon" style="height: 45px; width: 45px; margin-top: 30px; margin-bottom: 20px;"/>
            </div>

            <!-- Login Form -->
            <form method="post" action="actions/logar.php">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuário">
                <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Acessar">
            </form>

        </div>
        </div>
    <nav class="fixed-bottom navbar-light bg-light">
        <p class="rodape" style="text-align: center"><b>Desenvolvido pelo CASI.</b></p>
    </nav>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>