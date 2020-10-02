<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perulangan Tanggal</title>
</head>
<body>
	<h1>FORM PERULANGAN TANGGAL</h1>
		<?php 
			echo "<form name = form1 method post>";
			echo "Tanggal "; 
			echo "<select name = tanggal>";

			for ($tanggal=1; $tanggal <= 31 ; $tanggal++) { 
				echo "<option value = $tanggal>$tanggal</option>";
			}
			echo "</select>";
			echo "</form>";
		?>
</body>
</html>