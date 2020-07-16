
<?php

	if(isset($_POST['credito']) && isset($_POST['debito'])) {

		
		$num = $_POST['num'];
		$saldo = $_POST['saldo'];
		$credito = $_POST['credito'];
		$debito = $_POST['debito'];
		
		if($num > 0 ){

			$saldoA = $saldo - $debito - $credito;
			if ($saldoA > 0) {
				$msg= "Saldo positivo";
			}elseif( $saldoA < 0){
				$msg= "Saldo negativo";
			}else{
				$msg = "Saldo igual a zero";
			}
			
	}
}
			

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 11</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 11 </h2>

	 	<h4> <em> saldo negativo ou positivo? </em></h4>
	 	<hr>

	 	
	 	<input type="number" name="num" placeholder="número da conta"> <br>

	 	<input type="number" name="saldo" placeholder="saldo"> <br>
	 
	 	<input type="number" name="debito" placeholder="débito"> <br>

	 	<input type="number" name="credito" placeholder="crédito"> <br>
	 	
	 	<input type="submit" name="">

	 	<h3  style="color: green;"> <?php 
			if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a> <br>
		<a href="ex12.php"> Próximo exercício </a> <br>
		<a href="salarioFinal.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
