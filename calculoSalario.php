
<?php

	if(isset($_POST['salario']) && isset($_POST['hr'])) {

		
		$salariophr = $_POST['salario'];
		$hr = $_POST['hr'];
		
		if($salariophr > 0 && $hr > 0){
			$hrsemanal = $hr/4;
			$sAumento = $salariophr*1.5;

			if($hrsemanal > 40){
				$hrAcresc = $hrsemanal - 40;
				$salarioregular = 160*$salariophr;
				$valorAcres = $hrAcresc * $sAumento * 4;
				$salTotal = $salarioregular+$valorAcres;
			}elseif($hrsemanal == 40){
				$salTotal = $hr*$salariophr;
			}else{
				$salTotal = "indefinido. O funcionário trabalhou menos do que 40 horas semanais";
			}
	}
}
			

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 9</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 9 </h2>
	 	<h4> <em> qual o salário do funcionário? </em></h4>
	 	<hr>
	 	
	 	<input type="number" name="salario" placeholder="salário por hora">
	 	
	 	<input type="number" name="hr" placeholder="horas trabalhadas no mês">
	 	
	 	<input type="submit" name="">

	 	<h3  style="color: green;"> <?php 
			if(isset($salTotal)){
		 	   		echo "o salário final é " . $salTotal;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="ex10.php"> Próximo exercício </a><br>
		<a href="calculoDuracao.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
