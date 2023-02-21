<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="calculator">
		<?php
		$numero1 = $_POST['numero1'];
		$numero2 = $_POST['numero2'];
		$operacao = $_POST['operacao'];
		if ($operacao == '+') {
			$resultado = $numero1 + $numero2;
		} elseif ($operacao == '-') {
			$resultado = $numero1 - $numero2;
		} elseif ($operacao == '*') {
			$resultado = $numero1 * $numero2;
		} else {
			$resultado = $numero1 / $numero2;
		}
		echo "<h2>O resultado da operação é: $resultado</h2>";
		?>
		<div class="buttons">
			<a href="index.php"><button>Voltar</button></a>
		</div>
	</div>
</body>
</html>
