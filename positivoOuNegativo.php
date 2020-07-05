
<?php 

	if(isset($_POST['numero'])){

		$num = $_POST['numero'];

		if($num >= 0){
			$msg= "número positivo";
		}elseif($num < 0){
			$msg = "número negativo";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exercício 2</title>
</head>
<body style="text-align: center; ">

	<form action="" method="POST" accept-charset="utf-8">
		<h2> Exercício 2 </h2>
		<h4> <em> saiba se o número inserido é positivo ou negativo </em></h4>
		<hr>
		<input type="number" name="numero" placeholder="insira um número">
		<input type="submit" name="">

		<h3 style="color: green;"> <?php 
			if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="ex3.php"> Próximo exercício </a><br>
		<a href="maiorOuMenor.php"> Voltar ao exercício anterior </a>


	</form>

</body>
</html>
