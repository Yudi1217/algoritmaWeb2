<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Get</title>
</head>
<body>
	<form action="" method="GET">
		<table>
			<label for="">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="masukkan nama"></td>
				</tr>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="masukkan nim"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" placeholder="input jurusan"></td>
				</tr>
				<tr>
					<td>Kampus</td>
					<td>:</td>
					<td><input type="text" name="kampus" placeholder="nama kampus"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" placeholder="alamat email"></td>
				</tr>
			</label>
		</table>
					<button type="submit" name="submit" value="Kirim">Kirim</button>
	</form> <br><br>

	-------------------------------------------------------------------------------- <br>
	<?php  
		if ($_GET) {
			echo "Nama 		: ". $_GET['nama']; echo "<br>";
			echo "Nim 		: ". $_GET['nim']; echo "<br>";
			echo "Jurusan 	: ". $_GET['jurusan']; echo "<br>";
			echo "Kampus	: ". $_GET['kampus']; echo "<br>";
			echo "Email 	: ". $_GET['email']; echo "<br>";
		}

	?>
	--------------------------------------------------------------------------------
</body>
</html>