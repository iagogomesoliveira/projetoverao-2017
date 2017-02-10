<?php
	
			include 'conecta_mysql.inc';
		
			//cadastra o produto			
			if(isset($_POST["cadastrar"]))
			{
				$sql = "INSERT INTO produto (nome,codigo,preco) VALUES ('".$_POST["nome"]."','".$_POST["codigo"]."',".$_POST["preco"].")";
				$resultado = mysqli_query($sql);
				if($conect->query($sql))
				{
					echo "produto adicionado";
				}else{
					echo "erro";
				}
			}
      //exclui produto
			elseif(isset($_POST["excluir"]))
			{
				$sql ="DELETE FROM produto WHERE nome = '".$_POST["nome_ex"]."'";
				$resultado = mysqli_query($sql);
				if($conect->query($sql))
				{
					echo "produto excluido";
				}else{
					echo "ERRO";
				}					
			}
 ?>
