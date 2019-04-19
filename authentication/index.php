<?php
require_once("../CarteiraEstudantil/database/conectandoDB.php");
require_once("../CarteiraEstudantil/database/banco-aluno.php");
require_once("../CarteiraEstudantil/database/banco-instituicao.php");
require_once("../CarteiraEstudantil/database/banco-curso.php");

$code_acess = $_GET["codigo"];
$dados = dadosAluno($conexao, $code_acess);
$cursos = listarCurso($conexao);
$instituicoes = listarInstituicao($conexao);

$dataAtual = date("YYYY-mm-dd");

foreach ($dados as $dado):
    if($dado["expirado"] == true)
    {
        $ocultar = "visible";
    }
    else if ($dado["validade"] < $dataAtual)
    {
        $ocultar = "visible";
        $margin = 0;
    }
    else
    {
        $ocultar = "hidden";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Carteira Estudantil - Autenticação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="assets/favicon.ico"/>
    <style type="text/css">
        a {
            text-decoration: none
        }
    </style>
</head>

<body text="#000000" link="#000000" alink="#000000" vlink="#000000">
    <div>
        <nav class="navbar navbar-light" style="background-color: #0F5597;">
            <a class="navbar-brand" href="http://casi.ufpa.br">
                <img src="assets/logo.png" height="30" class="d-inline-block align-top" alt="">
                <span style="font-family: Geometr212 BkCn BT; color: #FFFFFF; font-size: 12pt;">&nbsp;Centro Acadêmico de Sistemas de Informação - UFPA</span>
            </a>
        </nav>
        <nav class="navbar navbar-light" style="background-color: #1272A0; padding: 50px">
            <span style="font-family: Geometr212 BkCn BT; color: #FFFFFF; font-size: 12pt; font-weight: bold">&nbsp;DNE - Documento Nacional do Estudante</span>
        </nav>
    </div>
    <br/><br/>
    <p style="color: #003882; font-size: 18pt; text-align: left; margin-left: 56px; font-weight: bold">Autenticador do Documento</p>
    <p style="color: #003882; font-size: 12pt; text-align: left; margin-left: 56px; margin-top: <?=$margin?>;  visibility:<?=$ocultar?>; font-weight: bold" class="text-danger">Carteira expirada em <?=date('d/m/Y', strtotime($dado["validade"]));?></p>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <table class="jrPage" cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 595px; border-collapse: collapse; background-color: white;">
                    <tr valign="top" style="height:0">
                        <td style="width:25px"></td>
                        <td style="width:425px"></td>
                        <td style="width:145px"></td>
                    </tr>
                    <tr valign="top" style="height:0px">
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr valign="top" style="height:260px">
                        <td>
                        </td>
                        <td>
                            <div style="width: 100%; height: 100%; position: relative;">
                                <div style="position: absolute; overflow: hidden; width: 100%; height: 100%; ">
                                    <table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
                                        <tr valign="top" style="height:0">
                                            <td style="width:425px"></td>
                                        </tr>
                                        <tr valign="top" style="height:260px">
                                            <td style="pointer-events: auto; ">
                                                <img src="assets/background.png" style="width: 425px" alt="" /></td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="position: relative; width: 100%; height: 100%; pointer-events: none; ">
                                    <table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse;">
                                        <tr valign="top" style="height:0">
                                            <td style="width:21px"></td>
                                            <td style="width:3px"></td>
                                            <td style="width:111px"></td>
                                            <td style="width:12px"></td>
                                            <td style="width:1px"></td>
                                            <td style="width:26px"></td>
                                            <td style="width:21px"></td>
                                            <td style="width:19px"></td>
                                            <td style="width:41px"></td>
                                            <td style="width:78px"></td>
                                            <td style="width:1px"></td>
                                            <td style="width:6px"></td>
                                            <td style="width:45px"></td>
                                            <td style="width:1px"></td>
                                            <td style="width:20px"></td>
                                            <td style="width:19px"></td>
                                        </tr>
                                        <tr valign="top" style="height:54px">
                                            <td colspan="16">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:5px">
                                            <td>
                                            </td>
                                            <td colspan="2" rowspan="13" style="pointer-events: auto; ">
                                                <img src="https://docs.google.com/uc?id=<?=$dado['fotoID']?>" style="height: 151px" alt="" /></td>
                                            <td colspan="13">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:16px">
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td colspan="9" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;"><?=$dado["nome"]?></span></td>
                                            <td colspan="3">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:12px">
                                            <td>
                                            </td>
                                            <td colspan="13">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:20px">
                                            <td>
                                            </td>
                                            <td colspan="2">
                                            </td>
                                            <?php foreach($instituicoes as $instituicao):
                                                if($dado["instituicao"] == $instituicao["id"]){
                                                    $nomeInstituicao = $instituicao["nome"];
                                                }
                                            endforeach;?>
                                            <td colspan="9" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;"><?=$nomeInstituicao?></span></td>
                                            <td colspan="2">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:9px">
                                            <td>
                                            </td>
                                            <td colspan="13">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:20px">
                                            <td>
                                            </td>
                                            <td colspan="2">
                                            </td>
                                            <?php foreach($cursos as $curso):
                                                if($dado["curso"] == $curso["id"]){
                                                    $nomeCurso = $curso["nome"];
                                                }
                                            endforeach;?>
                                            <td colspan="9" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;"><?=$nomeCurso?></span></td>
                                            <td colspan="2">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:4px">
                                            <td>
                                            </td>
                                            <td colspan="13">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:6px">
                                            <td>
                                            </td>
                                            <td colspan="9">
                                            </td>
                                            <td colspan="3" rowspan="7" style="pointer-events: auto; background-color: #FFFFFF; ">
                                                <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F10.111.80.74/MyProjects/CarteiraEstudantilAdmin/autenthication/index.php?codigo=<?=$dado["code_acess"]?>%2F&choe=UTF-8" style="height: 66px" alt="" /></td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:20px">
                                            <td>
                                            </td>
                                            <td colspan="4">
                                            </td>
                                            <td colspan="4" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;"><?=$dado["rg"]?></span></td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:1px">
                                            <td>
                                            </td>
                                            <td colspan="9">
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:20px">
                                            <td>
                                            </td>
                                            <td colspan="5">
                                            </td>
                                            <td colspan="2" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;"><?=$dado["matricula"]?></span></td>
                                            <td colspan="2">
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:1px">
                                            <td>
                                            </td>
                                            <td colspan="9">
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:17px">
                                            <td>
                                            </td>
                                            <td colspan="6">
                                            </td>
                                            <td colspan="2" rowspan="3" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;"/><?=date('d/m/Y', strtotime($dado["nascimento"])); ?></span></td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:1px">
                                            <td colspan="9">
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:2px">
                                            <td colspan="9">
                                            </td>
                                            <td colspan="5">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:20px">
                                            <td colspan="16">
                                            </td>
                                        </tr>
                                        <tr valign="top" style="height:20px">
                                            <td colspan="2">
                                            </td>
                                            <td colspan="4" style="pointer-events: auto; text-indent: 0px; text-align: left;">
                                                <span style="font-family: Unimed Sans ExtraBold; color: #333333; font-size: 12px; line-height: 1.0274353;">Validade &nbsp;<?=date('d/m/Y', strtotime($dado["validade"]));?></span></td>
                                        </tr>
                                        <tr valign="top" style="height:12px">
                                            <td colspan="16">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="50%">
            </td>
        </tr>
    </table>
    <!-- <div style="height: 15%">
        <img src="assets/ufpa.png" style="height: 200;width: 20%;margin-bottom: 5%;margin-left: 80%;">
    </div> -->
    <nav class="fixed-bottom navbar-light bg-light">
        <p class="rodape" style="text-align: right; margin-top: 10px"><b>Desenvolvido pelo CASI. &ensp;</b></p>
    </nav>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php endforeach;?>

</html>