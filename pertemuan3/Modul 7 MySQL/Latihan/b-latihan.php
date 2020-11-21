<?php 
$koneksi = mysql_connect("localhost","root","")
or die ("koneksi gagal");
mysql_select_db($koneksi, "mahasiswa");
$hasil = mysql_query($koneksi, "select * from informatika");

// Mysqli_fetch_array
while ($row = mysql_fetch_array($hasil)) {

// Mysqli_fetch_row
// while ($row = mysql_fetch_row($hasil)) {

// Mysqli_fetch_assoc
// while ($row = mysql_fetch_assoc($hasil)) {
	
	# code...
	print_r($row);
}
 ?>
