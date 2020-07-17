
<?php

	if(isset($_POST['qt']) && isset($_POST['qtMax']) && isset($_POST['qtMin'])) {

		
		$qt = $_POST['qt'];
		$qtMax = $_POST['qtMax'];
		$qtMin = $_POST['qtMin'];
		
		
			if ($qtMax > $qtMin) {

				$qtMedia = ($qtMax + $qtMin)/2;


			if ($qtMedia <= $qt) {
				$msg= "Não é preciso efetuar compra";
			}else{
				$msg= "É preciso efetuar compra";
			}

			}else{
				$msg = "A quantidade máxima precisa ser maior que a quantidade mínima";
			}
			
			
	
}
			

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 12 </title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 12 </h2>

	 	<h4> <em> com base no seu estoque, é preciso efetuar uma nova compra? </em></h4>
	 	<hr>

	 	
	 	<input type="number" name="qt" placeholder="estoque atual"> <br>

	 	<input type="number" name="qtMax" placeholder="estoque máximo"> <br>
	 
	 	<input type="number" name="qtMin" placeholder="estoque mínimo"> <br>

	 	<input type="submit" name="">

	 	<h3  style="color: green;"> <?php 
			if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a> <br>
		<a href="ex11.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
