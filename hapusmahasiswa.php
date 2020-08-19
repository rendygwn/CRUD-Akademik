<!-- HAPUS MAHASISWA-->
<?php  
	$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE kd_mhs='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM mahasiswa WHERE kd_mhs = '$_GET[kd]'");

	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='index.php?page=mahasiswa';</script>";

 ?> 