<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Penggunaan IF ELSE IF ELSE</title>
</head>
<body>

Nilai A = 30; <br>
Nilai B = 50; <br>
Nilai C = 70; <br><br>

	<?php
	$a = 30;
	$b = 50;
	$c = 70;

		if($a > $b) {
			echo "Nilai A Lebih Besar Dari Nilai B";
		}
		else if($a > $c) {
				echo "Nilai A Lebih Besar Dari Nilai C";
		}
		else {
				echo "Nilai A Lebih Kecil Dari Nilai B dan Nilai C";
		}

	?>

</body>
</html>