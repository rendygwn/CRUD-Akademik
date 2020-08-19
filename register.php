<?php 
//skrip koneksi
$koneksi = new mysqli("localhost","root","","10118131_akademik")
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Form : Register</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.14.0-web/css/all.min.css"/>
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />

</head>
<body>
	<div class="container">
		<div class="box-header">
			<h3 class="box-tittle" style="padding-top:0; margin-top:0; padding: 20px;">Register</h3>
			<form method="post" enctype="multipart/form-data" style="float: center; padding: 10px 20px 10px 40px">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control"  name="nama" placeholder="Masukan Nama" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control"  name="user" placeholder="Masukan Nim" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control"  name="password1" placeholder="Masukan Passsword" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Konfirmasi Passsword</label>
					<input type="password" class="form-control"  name="password2" placeholder="Masukan Kembali Passsword" autocomplete="off">
				</div>
				<button type="submit" class="btn btn-primary" name="register"></i> Register</button>
				<button type="reset" class="btn btn-warning"></i> Reset</button>
			</form>
			<?php
			if (isset($_POST['register'])) {
				# code...
				$nama = ($_POST['nama']);
				$username = ($_POST['user']);
				$password1 = ($_POST['password1']);
				$password2 = ($_POST['password2']);

				if ($password1 == $password2) {
				$koneksi->query("INSERT INTO admin VALUES ('','$nama','$username','$password1')");
              		# code...
					echo "<div class='alert alert-info'>Register Berhasil Disimpan</div>";
					echo "<meta http-equiv='refresh'content='1;url=signin.php'>";
				}
				else if ($password1 !== $password2)
				{
					echo "<div class='alert alert-danger'>Password Tidak cocok</div>";
					echo "<meta http-equiv='refresh'content='1;url=register.php'>";  
				}
			} 
			?>
		</div>
	</div>

	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>
</body>
</html>