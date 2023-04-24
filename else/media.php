<!DOCTYPE html>
<html>
<head>
	<title>Programa em PHP para cálculo de média</title>
</head>
<body>
	<h1>Programa em PHP para cálculo de média</h1>

	<form action="" method="post">
		<label for="nota1">Digite a primeira nota:</label>
		<input type="number" id="nota1" name="n1"><br><br>

		<label for="nota2">Digite a segunda nota:</label>
		<input type="number" id="nota2" name="n2"><br><br>

		<input type="submit" value="Calcular Média">
	</form>

	<?php
		if(isset($_POST['n1']) && isset($_POST['n2'])) {
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];

			$media = ($n1 + $n2) / 2;

			if($media == 10) {
				echo "<p>Aprovado com Distinção</p>";
			} elseif($media >= 7) {
				echo "<p>Aprovado</p>";
			} else {
				echo "<p>Reprovado</p>";
			}
		}
	?>
</body>
</html>
