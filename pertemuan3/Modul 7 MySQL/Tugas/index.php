<!DOCTYPE html>
<html>
<head>
	<title>Tugas Modul 7</title>
</head>
<body>
	<h2>DATA MAHASISWA PENS</h2>
    <h2>===================</h2>
    <h2>TAMBAH DATA</h2>

    <form method="POST" enctype="multipart/form-data">
        NRP : <input type="text" name="nrp"> <br>
        Nama : <input type="text" name="nama"> <br>
        Foto : <input type="text" name=""><input type="file" name="foto" > <br>
        Jurusan :   <select name="jurusan">
                        <option value="Sains">Telekomunikasi</option>
                        <option value="Teknik">Elka</option>
                        <option value="Teknik">IT</option>
                        <option value="Teknik">Elin</option>
                    </select> <br>
        <input type="submit" name="submit" value="Tambah">
    </form>

    <h2>===================</h2>
    <h2>SEARCH DATA</h2>
    <form action="" method="POST">
        Nama : <input type="text">
        <input type="submit" value="Cari Data">
    <h2>===================</h2>

</body>
</html>