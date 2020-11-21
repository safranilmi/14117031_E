<?php 
$koneksi = mysql_connect("localhost","root","")
or die ("koneksi gagal");
mysql_select_db($koneksi, "mahasiswa");
$hasil = mysql_query($koneksi, "select * from informatika");
while ($row = mysql_fetch_array($hasil)) {
	# code...
	print_r($row);
}
 ?>