<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post">
		<table>
		<?php

		$nums = [];
		$num = Array();
		for ($i=0; $i <= 20; $i++) {
			$row = rand(0,8);
			$col = rand(0,8);
			$valor = rand(1,9);
			$num = ["row" => $row, "col" => $col, "valor" => $valor];
			$nums[] = $num;
		}

		$c = 1;
		for ($fila=0; $fila <= 8; $fila++) { 
			echo "<tr'>\n";
			for ($columna=0; $columna <= 8; $columna++) { 
				echo "\t<td>";
				if ( $fila == $num["row"] && $columna == $num["col"] ) {
					echo $num["valor"];
				} else {
					echo "<input type='number' class='numbero' name='$c'>";
				}
				echo "</td>\n";
				$c++;
			}
			echo "</tr>\n";
		}

		?>
		</table>
		<input type="submit"/>
	</form>
		<?php
			//

		?>
</body>
</html>
