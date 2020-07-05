
<?php

	if(isset($_POST['num'])) {

		$num = $_POST['num'];
		if($num > 0){
			if($num >= 12){
			  		$custo = 1 * $num;
			}elseif ($num < 12) {
				$custo = 1.30 * $num;
			}	
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 3</h2>
	 	<h4> <em> Qual o custo das maçãs compradas? </em></h4>
	 	<hr>
	 	<input type="number" name="num" placeholder="quantidade de maças compradas">
	 	<input type="submit" name="">
	 	<h3  style="color: green;"> <?php 
			if(isset($custo)){
		 	   		echo "Custo total: R$" . $custo;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="ex4.php"> Próximo exercício </a><br>
		<a href="positivoOuNegativo.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
