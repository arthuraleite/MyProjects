<?php require_once('../views/cabecalho.php');
?>
<form action="webservice.php" method="get">
	<input type="text" name="code_acess" placeholder="Código de Acesso">
	<input type="submit" name="Gerar JSON">
	
</form>
<?php require_once('../views/rodape.php');
?>