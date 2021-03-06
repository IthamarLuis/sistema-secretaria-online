<?php 

	function verificarLoginCoordenador($email, $senha)
	{

		$conn = iniciarConexao();
		$stmt = $conn->prepare("SELECT * FROM coordenadores WHERE email = ?");
		$stmt->bindParam(1, $email);

		if($stmt->execute() && $stmt->rowCount() > 0){
			$row = $stmt->fetch(PDO::FETCH_OBJ);

			if(crypt($senha, $row->senha) == $row->senha){
				$_SESSION['usuario_logado']['nv_acesso'] = "coordenador";
				$_SESSION['usuario_logado']['dados'] = $row;
				return true;
			}
		}
		
	}

	function verificarEmailCoordenador($email)
	{

		$conn = iniciarConexao();
		$stmt = $conn->prepare("SELECT * FROM coordenadores WHERE email = ?");
		$stmt->bindParam(1, $email);

		if($stmt->execute() && $stmt->rowCount() > 0)
			return true;
	}