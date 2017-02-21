<!DOCTYPE html>
<html>
<body>
<pre>

	<?php
	
			include 'conecta_mysql.inc';
			$op_1 = $_POST["operacao"];
			
					
			if($op_1 == "cadastrar")
			{
				$nome = $_POST["nome"];
				$codigo = $_POST["codigo"];
				$preco = $_POST["preco"];
				$sql = "INSERT INTO produto (nome,codigo,preco) VALUES ('$nome','$codigo',$preco)";
				$resultado = mysqli_query($sql);
				if($conect->query($sql))
				{
					echo "produto adicionado";
				}else{
					echo "erro";
				}
				header("Location: menu.inc");
			}	
			else if($op_1 == "excluir")
			{
				$nome = $_POST["nome_ex"];
				$sql = "DELETE FROM produto WHERE nome = '$nome'";
				$resultado = mysqli_query($sql);
				if($conect->query($sql))
					{echo "produto excluido";}
				else {echo "ERRO";}
			header("Location: menu.inc");
			}
			else if ($op_1 == "visualizar")
			{
				$nome = $_POST["nome_find"];
				$sql = "SELECT * FROM produto";
				$resultado = mysqli_query($conect,$sql);
				
				if ($resultado) {
				    
				    while($row = mysqli_fetch_assoc($resultado)) {
				        echo "Name: " . $row["nome"]. " codigo: " . $row["codigo"]. " Preco: ".$row["preco"]. "<br>";

					 }
				} else {
				    echo "erro";
				    header("Location: menu.inc");
				}
			
			}	


?>
		
</pre>
</body>
</html>


