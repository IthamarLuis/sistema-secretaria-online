<nav id="menu">
	<ul>
		<li><a href="#">Alunos</a></li>
		<li><a href="#">Responsáveis</a></li>
		<li><a href="#" onclick="document.formSair.submit()">Sair</a></li>
	</ul>

	<form method="POST" action="../../app/routes.php" name="formSair">
		<input type="hidden" name="acao" value="sair">
	</form>

</nav>