
<?php

	if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {

		
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];

		if ($num1 >= $num2 && $num1 >= $num3 ) {
			$msg = "O número " .$num1 . " é o maior";
		}elseif($num2 >= $num1 && $num2 >= $num3 ){
			$msg = "O número " .$num2 . " é o maior";
		}elseif($num3 >= $num1 && $num3 >= $num2 ){
			$msg = "O número " .$num3 . " é o maior";
		}

		}
				
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 6</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 6</h2>
	 	<h4> <em> Qual dos números inseridos é maior? </em></h4>
	 	<hr>
	 	
	 	<input type="number" name="num1" placeholder="primeiro número">
	 	
	 	<input type="number" name="num2" placeholder="segundo número:">
	 
	 	<input type="number" name="num3" placeholder="terceiro número">
	 	<input type="submit" name="">

	 	<h3  style="color: green;" > <?php 
			if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="ex7.php"> Próximo exercício </a><br>
		<a href="calculoIdade.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
