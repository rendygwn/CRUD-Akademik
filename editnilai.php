<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0;"> Edit  Nilai Mahasiswa</h3>
				<?php 
					$ambil=$koneksi->query("SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.kelas, mahasiswa.jurusan, matakuliah.kd_matkul, matakuliah.nama_matkul, matakuliah.sks, matakuliah.semester, nilai.nilai, nilai.indeks, nilai.ket FROM nilai LEFT JOIN mahasiswa ON nilai.kd_mhs = mahasiswa.kd_mhs LEFT JOIN matakuliah ON nilai.kd_matkul = matakuliah.kd_matkul WHERE nim ='$_GET[kd]'");
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
						<input type="text" class="form-control" name="kelas" value="<?php echo $pecah['kelas']; ?>">
					</div>
					<div class="form-group">
						<label>Jurusan</label>
						<input type="text" class="form-control" name="jurusan" value="<?php echo $pecah['jurusan']; ?>">
					</div>
					<div class="form-group">
						<label>Kode Mata Kuliah</label>
						<input type="text" class="form-control" name="kdmatkul" value="<?php echo $pecah['kd_matkul']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Mata Kuliah</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_matkul']; ?>">
					</div>
					<div class="form-group">
						<label>Sks</label>
						<input type="text" class="form-control" name="sks" value="<?php echo $pecah['sks']; ?>">
					</div>
					<div class="form-group">
						<label>Semester</label>
						<input type="text" class="form-control" name="semester" value="<?php echo $pecah['semester']; ?>">
					</div>
					<div class="form-group">
						<label>Nilai</label>
						<input type="text" class="form-control" name="nilai" value="<?php echo $pecah['nilai']; ?>">
					</div>
					<div class="form-group">
						<label>indeks</label>
						<input type="text" class="form-control" name="sks" value="<?php echo $pecah['indeks']; ?>">
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" class="form-control" name="keterangan" value="<?php echo $pecah['ket']; ?>">
					</div>
					<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
				</form>
				<?php 
				if (isset($_POST['edit'])) 
				{
					 			# code...
					$koneksi->query("UPDATE mahasiswa.nim, mahasiswa.nama, mahasiswa.kelas, mahasiswa.jurusan, matakuliah.kd_matkul, matakuliah.nama_matkul, matakuliah.sks, matakuliah.semester, nilai.nilai, nilai.indeks, nilai.ket FROM nilai LEFT JOIN mahasiswa ON nilai.kd_mhs = mahasiswa.kd_mhs LEFT JOIN matakuliah ON nilai.kd_matkul = matakuliah.kd_matku SET nim='$_POST[nim]',nama='$_POST[nama]',kelas='$_POST[kelas]',jurusan='$_POST[jurusan]',kd_matkul='$_POST[kdmatkul]',nama_matkul='$_POST[nama]',sks='$_POST[sks]',semester='$_POST[semester]',nilai='$_POST[nilai]',indeks='$_POST[indeks]',ket='$_POST[keterangan]' WHERE kd_matkul='$_GET[kd]'WHERE nim='$_GET[nim]'");

					echo "<script>alert('Data Telah Diedit');</script>";
					echo "<meta http-equiv='refresh'content='1;url=index.php?page=nilai'>";
				}
				?>
			</div>
		</div>
	</div>
</div>