<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0;"> Edit  Mahasiswa</h3>
				<?php 
					$ambil=$koneksi->query("SELECT * FROM mahasiswa WHERE kd_mhs='$_GET[kd]'");
					$pecah=$ambil->fetch_assoc();
				?>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nim</label>
						<input type="text" class="form-control" name="nim" value="<?php echo $pecah['nim']; ?>">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
					</div>
					<div class="form-group">
						<label>kelas</label>
						<input type="text/number" class="form-control" name="kelas" value="<?php echo $pecah['kelas']; ?>">
					</div>
					<div class="form-group">
						<label>Jurusan</label>
						<input type="text" class="form-control" name="jurusan" value="<?php echo $pecah['jurusan']; ?>">
					</div>
					<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
				</form>
				<?php 
				if (isset($_POST['edit'])) 
				{
					 			# code...
					$koneksi->query("UPDATE mahasiswa SET nim='$_POST[nim]',nama='$_POST[nama]',kelas='$_POST[kelas]',jurusan='$_POST[jurusan]' WHERE kd_mhs='$_GET[kd]'");

					echo "<script>alert('Data Telah Diedit');</script>";
					echo "<meta http-equiv='refresh'content='1;url=index.php?page=mahasiswa'>";
				}
				?>
			</div>
		</div>
	</div>
</div>