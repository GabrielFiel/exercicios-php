<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício</title>
</head>
<body>	
<h1>Exercício</h1>
<h3>Mostrar o mês de acordo com o número</h3>

<form action="" method="post">

	Número de 1 a 12: 
	<input type="number" name="num" required autofocus><br> <br>
	
	<input type="submit">
	<br><br>
</form>

</body>
</html>

<?php
	if(!empty($_POST)){
		$num = isset($_POST['num']) ? $_POST['num'] : 0;

		if($num <= 12 && $num > 0){

			switch($num){
				case 1:
					$mes = 'Janeiro';
					break;
				case 2:
					$mes = 'Fevereiro';
					break;
				case 3:
					$mes = 'Março';
					break;
				case 4:
					$mes = 'Abril';
					break;
				case 5:
					$mes = 'Maio';
					break;
				case 6:
					$mes = 'Junho';
					break;
				case 7:
					$mes = 'Julho';
					break;
				case 8:
					$mes = 'Agosto';
					break;
				case 9:
					$mes = 'Setembro';
					break;
				case 10:
					$mes = 'Outubro';
					break;
				case 11:
					$mes = 'Novembro';
					break;
				case 12:
					$mes = 'Dezembro';
					break;
			}

			echo 'O mês é ' . $mes;
				
		} else{
			echo 'Não existe mês com esse número';
		}
	}
?>
