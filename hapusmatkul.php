<!-- HAPUS MATAKULIAH-->
 <?php  
	$ambil = $koneksi->query("SELECT * FROM matakuliah WHERE kd_matkul='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM matakuliah WHERE kd_matkul = '$_GET[kd]'");

	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='index.php?page=matakuliah';</script>";

 ?> 