<?php 
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "tamu");
	$hasil = mysqli_query($conn, "select * from bukutamu");
	$jumlah = mysqli_num_rows($hasil);
	echo "<center>Daftar Pengunjung</center>";
	echo "Jumlah pengunjung : $jumlah";
	$a = 1;
 ?>