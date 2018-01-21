<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício</title>
</head>
<body>	
<h1>Exercício</h1>
<h3>Ordenar 3 números de forma crescente</h3>

<form action="" method="post">

	Numero 1
	<input type="number" name="a"><br> <br>
	Numero 2
	<input type="number" name="b"> <br> <br>
	Numero 3
	<input type="number" name="c"> <br> <br>

	<input type="submit" value="Ordenar crescente" name="crescente">
	<input type="submit" value="Ordenar descrescente" name="decrescente">
	<br><br>
</form>

</body>
</html>


<?php

//Executa somente quando recebe informação via post
if(!empty($_POST)){

	//Variáveis recebem os valores digitados nos campos
	$a = isset($_POST['a']) ? $_POST['a'] : 0;
	$b = isset($_POST['b']) ? $_POST['b'] : 0;
	$c = isset($_POST['c']) ? $_POST['c'] : 0;

	// Ordenar crescente

	if(isset($_POST['crescente'])){

		if($a < $b){
			if($c < $b){
				if($a < $c){
					echo $a . ' ' . $c . ' ' . $b;	// a>c>b
				}else{
					echo $c . ' ' . $a . ' ' . $b; // c>a>b
				}
			}else{
				echo $a . ' ' . $b . ' ' . $c; // a>b>c
			}

		}else{
			if($c < $a){
				if($c < $b){
					echo $c . ' ' . $b . ' ' . $a; // c>b>a
				}else{
					echo $b . ' ' . $c . ' ' . $a; // b>c>a
				}
			}else{
				echo $b . ' ' . $a . ' ' . $c; //b>a>c
			}
		}
	}

	// Ordenar descrescente

	if(isset($_POST['decrescente'])){

		if($a > $b){
			if($c > $b){
				if($a > $c){
					echo $a . ' ' . $c . ' ' . $b;	// a>c>b
				}else{
					echo $c . ' ' . $a . ' ' . $b; // c>a>b
				}
			}else{
				echo $a . ' ' . $b . ' ' . $c; // a>b>c
			}

		}else{
			if($c > $a){
				if($c > $b){
					echo $c . ' ' . $b . ' ' . $a; // c>b>a
				}else{
					echo $b . ' ' . $c . ' ' . $a; // b>c>a
				}
			}else{
				echo $b . ' ' . $a . ' ' . $c; //b>a>c
			}
		}
	}
	
}

?>
