
	<?php
/* PROFA INAIARA SEIBEL - PROGRAMAÇÃO WEB I - TEC UNISC */
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$operacao = $_POST["operacao"];

			switch ($operacao) {
				case "soma":
					$resultado = $num1 + $num2;
					break;
				case "subtracao":
					$resultado = $num1 - $num2;
					break;
				case "multiplicacao":
					$resultado = $num1 * $num2;
					break;
				case "divisao":
					if ($num2 == 0) {
						echo "Erro: divisão por zero.";
					} else {
						$resultado = $num1 / $num2;
					}
					break;
				default:
					echo "Selecione uma operação.";
			}

			if (isset($resultado)) {
				echo "<br><br>O resultado é: " . $resultado;
			}
		}
	?>
 
