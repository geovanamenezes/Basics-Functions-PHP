
<?php

	if(isset($_POST['inicio']) && isset($_POST['fim'])) {

		
		$inicio = $_POST['inicio'];
		$fim = $_POST['fim'];
		
		if($inicio > 0 && $fim > 0){
			if($inicio > $fim){
				$a = 24-$inicio;
				$duracao= $a + $fim; 
			}elseif($inicio < $fim){
				$duracao= $fim - $inicio;
			}elseif($inicio  == $fim){
				$duracao = 24;
			}
	}
}
			

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercício 8</title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 	<h2>Exercício 8 </h2>
	 	<h4> <em> qual a duração do jogo de xadrez? </em></h4>
	 	<hr>
	 	
	 	<input type="number" name="inicio" placeholder="horário de início do jogo">
	 	
	 	<input type="number" name="fim" placeholder="horário de término do jogo">
	 	
	 	<input type="submit" name="">

	 	<h3  style="color: green;"> <?php 
			if(isset($duracao)){
		 	   		echo "a duração do jogo foi de " . $duracao . " horas";
		 	} ?>
		 		
		</h3>
		<a href="menu.php"> Ir ao menu de exercícios </a><br>
		<a href="calculoSalario.php"> Próximo exercício </a><br>
		<a href="ordemCrescente.php"> Voltar ao exercício anterior </a>

	 </form>


</body>
</html>
