
<?php

	if(isset($_POST['anoA']) && isset($_POST['anoN'])) {

		
		$anoA = $_POST['anoA'];
		$anoN = $_POST['anoN'];

		if ($anoA > 0 && $anoN > 0 ) {
			$idade = $anoA - $anoN;
		if($idade>=16){
			$msg = "Você tem idade para votar";
		}else{
			$msg = "Você não tem idade para votar";
		}

		}
				
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 5</h2>
	 	<h4> <em> você tem idade para votar? </em></h4>
	 	<hr>
	 	
	 	<input type="number" name="anoA" placeholder="Ano atual">
	 	
	 	<input type="number" name="anoN" placeholder="Ano de nascimento">
	 	<input type="submit" name="">
	 	<h3  style="color: green;"> <?php 
			if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="qualOMaior.php"> Próximo exercício </a><br>
		<a href="aprovadoOuReprovado.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
