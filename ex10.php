
<?php

	if(isset($_POST['salario']) && isset($_POST['vendas'])) {

		
		$salarioregular = $_POST['salario'];
		$vendas = $_POST['vendas'];
		
		if($salarioregular > 0 ){

			if($vendas <= 1500){
				$sTotal = $salarioregular + ($vendas * 0.03);
			}elseif($vendas > 1500){
				$acresc = $vendas - 1500;
				$sTotal = $salarioregular + (1500 * 0.03) + ($acresc * 0.05);

			}
			
	}
}
			

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 10</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 10 </h2>
	 	<h4> <em> saiba o salário final do funcionário </em></h4>
	 	<hr>
	 	
	 	<input type="number" name="salario" placeholder="salário fixo">
	 	
	 	<input type="number" name="vendas" placeholder="valor do total de vendas">
	 	
	 	<input type="submit" name="">

	 	<h3  style="color: green;"> <?php 
			if(isset($sTotal)){
		 	   		echo "o salário final é R$ " . $sTotal;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a> <br>
		<a href="ex11.php"> Próximo exercício </a> <br>
		<a href="ex9.php"> Voltar ao exercício anterior </a>
	 </form>


</body>
</html>