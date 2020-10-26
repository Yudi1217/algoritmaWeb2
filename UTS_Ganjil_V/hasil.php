<?php 

// memanggil POST

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$nilai_h = $_POST['nilai_h'];
$nilai_e = $_POST['nilai_e'];
$nilai_t = $_POST['nilai_t'];
$nilai_u = $_POST['nilai_u'];
$nilai_UAS = $_POST['nilai_UAS'];

// menghitung nilai yang diinput
$nilai_absen = $nilai_h * 0.15;
$nilai_etika = $nilai_e * 0.1;
$nilai_tugas = $nilai_t * 0.2;
$nilai_uts = $nilai_u * 0.25;
$nilai_uas = $nilai_UAS * 0.3;

// penjumlahan dari nilai-nilai
$nilai_akhir = $nilai_absen + $nilai_etika + $nilai_tugas + $nilai_uts + $nilai_uas;

// menampilkan grade
if ($nilai_akhir >= 80) {
	$grade ="A";
} else if ($nilai_akhir >= 70) {
	$grade ="B";
} else if ($nilai_akhir >= 50) {
	$grade ="C";
} else if ($nilai_akhir >= 40) {
	$grade ="D";
} else {
	$grade ="E";
}


echo "
	<h1> Hasil Perhitungan Nilai Akhir </h1> <br>
	Nama Mahasiswa : $nama <br>
	Nim Mahasiswa : $nim <br>
	Mata Kuliah : $matkul <br>
	Nilai Absen : <b>$nilai_h</b> <br>
	Nilai Etika : <b>$nilai_e</b> <br>
	Nilai Tugas : <b>$nilai_t</b> <br>
	Nilai UTS : <b>$nilai_u</b> <br>
	Nilai UAS : <b>$nilai_UAS</b>

	<h4> Nilai Akhir : $nilai_akhir <h4>
	<h4> Grade : $grade <h4>
";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<a href="index.html">Back TO Form Nilai</a>
</body>
</html>