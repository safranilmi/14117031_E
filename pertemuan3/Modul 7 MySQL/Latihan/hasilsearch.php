<?php 
	$kolom = $_POST['kolom'];
	$cari = $_POST['cari'];
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "tamu");
	$hasil = mysqli_query($conn, "SELECT * FROM bukutamu WHERE $kolom like '%$cari%'");
	$jumlah = mysqli_num_rows($hasil);
	echo "<br>";
	echo "Ditemukan : $jumlah";
	echo "<br>";
 ?>