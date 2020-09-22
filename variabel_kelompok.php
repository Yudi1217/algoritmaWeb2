<?php 
$nama = "Achmad Wahyudi";
$nim = 2018804472;
$jurusan = "Sistem Informasi";
$kampus = "STMIK INSAN PEMBANGUNAN";

function tampil()
{
	global $nama, $nim, $jurusan, $kampus;
	echo "Nama Mahasiswa : <b>$nama</b>";
	echo "<br>";
	echo "NIM Mahasiswa : <b>$nim</b>";
	echo "<br>";
	echo "Jurusan : <b>$jurusan</b>";
	echo "<br>";
	echo "Nama Kampus : <b>$kampus</b>";
}
echo "Biodata Diri : <br>";
tampil();
?>
