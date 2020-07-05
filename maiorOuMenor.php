
<?php

	if(isset($_POST['num'])) {

		$num = $_POST['num'];
		if($num > 10){
		  		$msg = "número maior que 10";
		}elseif ($num < 10) {
			$msg = "número menor que 10";
		}elseif($num == 10){
			$msg = "número igual a 10";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exercício 1 </title>
</head>
<body style="text-align: center; ">

	 <form action="" method="POST" accept-charset="utf-8">

	 <div >	 	
	 	<h2> Exercício 1 </h2>
	 	<h4> <em> saiba se o número inserido é maior ou igual a 10 </em></h4>
	 	<hr>
	 	<input type="number" name="num" placeholder="insira um número">
	 	<input type="submit" name="">
	 	<h3 style="color: green;"> 
	 		<?php 
				if(isset($msg)){
		 	   		echo $msg;
		 	} ?>
		 		
		</h3>

		 <a href="menu.php"> Ir ao menu de exercícios </a> <br>
		 <a href="ex2.php"> Próximo exercício </a>



	 </div>
	 	
	 </form>


</body>

</html>
