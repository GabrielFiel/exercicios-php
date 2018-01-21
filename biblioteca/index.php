<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Exercício</title>
</head>
<body>	
<h1>Exercício</h1>
<h3>Biblioteca</h3>

<form action="" method="post">

	Nome do livro: 
	<input type="text" name="livro" required autofocus><br> <br>
	
	<select name="usuario">		
		<option selected disabled>Selecione</option>
		<option value="aluno">Aluno</option>
		<option value="professor">Professor</option>
	</select><br><br>
	
	<input type="submit">
	<br><br>
</form>

</body>
</html>

<?php

if(!empty($_POST)){
	$livro = isset($_POST['livro']) ? $_POST['livro'] : null;
	$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;

	// Pega a data atual
	$data = new DateTime('now');

	if($usuario == 'aluno'){
		// Aluno pode entregar livro em 3 dias
		$devolucao = $data->add(new dateInterval('P3D'));
	}else if($usuario == 'professor'){
		// Professor pode entregar em 10 dias
		$devolucao = $data->add(new dateInterval('P10D'));
	}

	echo '<h2> Recibo </h2>';
	echo 'Livro: ' . $livro;
	echo '<br>Data de devolução: ' . $devolucao->format('d-m-Y');	
}
?>
