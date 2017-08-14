<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$operador = $_POST['operador'];
	$resultado = $_REQUEST['resultado'];


	switch ($operador) {
		case 1: //Suma
			echo $resultado = $n1 + $n2;
			break;

		case 2: //Resta
			echo $resultado = $n1 - $n2;
			break;
		case 3: //Multiplicasión
			echo $resultado = $n1 * $n2;
			break;
		case 4: //división
			echo $resultado = $n1 / $n2;
			break;
		
		default:
			echo "Operacion no valida";
			break;
	}
?>