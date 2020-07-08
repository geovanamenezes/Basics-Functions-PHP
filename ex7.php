
<?php

	if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {

		
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];

		$array = [$num1, $num2, $num3];
		sort($array);
		$ordemcrescente = "Ordem crescente: ";
		for ($i=0; $i < count($array) ; $i++) { 
			if($i==0){
				$ordemcrescente = $ordemcrescente . $array[$i];
			}else{
			    $ordemcrescente = $ordemcrescente . ", " . $array[$i];
			}
		 	
		 } 


		}
				
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 7</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 7</h2>
	 	<h4> <em> Colocando os números em ordem crescente </em></h4>
	 	<hr>
	 	<input type="number" name="num1" placeholder="primeiro número">
	 	
	 	<input type="number" name="num2" placeholder="segundo número:">
	 
	 	<input type="number" name="num3" placeholder="terceiro número">
	 	<input type="submit" name="">

	 	<h3  style="color: green;"> <?php 
			if(isset($ordemcrescente)){
		 	   		echo $ordemcrescente;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="ex8.php"> Próximo exercício </a><br>
		<a href="ex6.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>