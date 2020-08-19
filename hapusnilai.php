<!-- HAPUS NILAI MAHASISWA-->
 <?php  
	$ambil = $koneksi->query("SELECT nilai INNER JOIN mahasiswa ON nilai.kd_mhs = mahasiswa.kd_mhs INNER JOIN matakuliah ON nilai.kd_matkul = matakuliah.kd_matkul WHERE nim ='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE nilai INNER JOIN mahasiswa ON nilai.kd_mhs = mahasiswa.kd_mhs INNER JOIN matakuliah ON nilai.kd_matkul = matakuliah.kd_matkul WHERE nim ='$_GET[kd]'");

	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='index.php?page=nilai';</script>";

 ?> 