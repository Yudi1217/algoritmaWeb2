<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Praktek Array</title>
</head>
<body>
	<h1>DAFTAR LOMBA KOMPETENSI MAHASISWA KAMPUS IPEM TELUKNAGA</h1>

	<?php  
		$peserta = [

					["123", "Achmad Wahyudi", "089512312345"],
					["124", "Aji Saputra", "081234512301"]
				];
	?>

	<?php foreach ($peserta as $pst) : ?>
		<ul>
			<li>Nomor Peserta : <?= $pst[0]; ?></li>
			<li>Nama Peserta : <?= $pst[1]; ?></li>
			<li>Nomor Hp : <?= $pst[2]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>