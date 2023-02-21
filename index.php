<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="calculator">
		<form action="calcular.php" method="post">
			<input type="text" name="numero1" placeholder="Digite o primeiro número">
			<input type="text" name="numero2" placeholder="Digite o segundo número">
			<div class="operations">
				<button type="submit" name="operacao" value="+">+</button>
				<button type="submit" name="operacao" value="-">-</button>
				<button type="submit" name="operacao" value="*">*</button>
				<button type="submit" name="operacao" value="/">/</button>
			</div>
		</form>
	</div>
</body>
</html>
