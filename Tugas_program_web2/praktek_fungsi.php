<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Praktek Fungsi</title>
</head>
<body>
	<h1>Penjumlahan dan Pengurangan Menggunakan Fungsi</h1>

	Nilai A = 6; <br>
	Nilai B = 4;

	<?php  
		function tambah($a, $b){
			return $a + $b;
		}
		function kurang($a, $b){
			return $a - $b;
		}
		function jarak() {
			echo "<br>";
		}
		jarak();
		echo "Hasil Penjumlahan A + B = ". tambah(6,4);
		jarak();
		echo "Hasil Pengurangan A - B = ". kurang(6,4);
	?>


</body>
</html>