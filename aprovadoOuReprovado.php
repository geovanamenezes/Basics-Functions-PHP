
<?php

	if(isset($_POST['num1']) && isset($_POST['num2'])) {

		
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if ($num1 >= 0 && $num2 >= 0 ) {
			$media = ($num1 + $num2)/2;
		if($media>=6){
			$msg = "Aprovado! média: " . $media;
		}else{
			$msg = "Reprovado! média: " . $media;
		}

		}
				
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 4</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 4</h2>
	 	<h4> <em> Aprovado ou reprovado? </em></h4>
	 	<hr>
	 	
	 	<input type="number" name="num1" placeholder="Primeira nota">
	 	
	 	<input type="number" name="num2" placeholder="Segunda nota">
	 	<input type="submit" name="">
	 	<h3  style="color: green;"> <?php 
			if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="ex5.php"> Próximo exercício </a><br>
		<a href="ex3.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
