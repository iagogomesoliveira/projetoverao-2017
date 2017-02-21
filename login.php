<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador da loja</title>
</head>
<body>
		<?php
			
			include 'conecta_mysql.inc';


			$username = $_POST["nome"];
			$senha = $_POST["senha"];

				$sql = "SELECT * FROM usuario WHERE nome = '$username' AND senha = '$senha'";
				$resultado = mysqli_query($conect,$sql);		
					if($aux = mysqli_num_rows($resultado) == 0)
						{echo "Erro: usuario ou senha incorreto";
						 header('location: index.php')}
					else{	
							$data = date("d/m/Y",time());
							$aux2 = mysqli_fetch_assoc($resultado);
							$nome = $aux2["nome"];

							$sql_ac = "INSERT INTO acesso (nome, date) VALUES ('$nome','$data')";
							$acesso = mysqli_query($conect,$sql_ac);
					mysqli_close($conect);
					header('location: menu.inc');
					}
					
		?>
</body>
</html>
