<?php 
session_start();
//skrip koneksi
$koneksi = new mysqli("localhost","root","","10118131_akademik")
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Form : Sign in</title>
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
		<div class="row text-center ">
			<div class="col-md-12">
				<br /><br />
				<h1 class="text-center login-title">Sign in to continue to Akademik</h1>
				<br />
			</div>
		</div>
		<div class="row ">

			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img style="float: center; padding: 10px 20px 10px 60px" class="logo-img" src="img/unikom_logo.png">  
					</div>
					<div class="panel-body">
						<form role="form" method="post">
							<br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-user"  ></i></span>
								<input type="text" class="form-control" name="user"  />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" class="form-control"  name="pass"  />
							</div>
							<div class="form-group">
								<label class="checkbox-inline">
									<input type="checkbox" /> Remember me
								</label>
								<span class="pull-right">
									<a href="#" >Forget password ? </a> 
								</span>
							</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in
							</button>
							<hr />
							Not register ? <a href="register.php" >Create account</a> 
						</form>
						<?php 
						if (isset($_POST['signin']))
						{
             				 #code...
							$ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]'");
							$yangcocok = $ambil->num_rows;

							if ($yangcocok==01) {
              					# code...
								$_SESSION['admin'] = $ambil->fetch_assoc();
								echo "<div class='alert alert-info'>Sign In Sukses</div>";
								echo "<meta http-equiv='refresh'content='1;url=index.php'>";
							}
							else
							{
								$_SESSION['admin'] = $ambil->fetch_assoc();
								echo "<div class='alert alert-danger'>Sign In gagal</div>";
								echo "<meta http-equiv='refresh'content='1;url=signin.php'>";  
							}
						}
						?>
					</div>
				</div>
			</div>
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