<div layout:fragment="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-tittle" style="padding-top:0; margin-top:0; ">Tambah Nilai Mahasiswa</h3>
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nim</label>
							<input type="text" class="form-control"  name="nim" placeholder="Masukan Nim">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control"  name="nama" placeholder="Masukan Nama">
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<input type="text" class="form-control"  name="kelas" placeholder="Masukan Kelas">
						</div>
						<div class="form-group">
							<label>Jurusan</label>
							<input type="text" class="form-control"  name="jurusan" placeholder="Masukan Jurusan">
						</div>
						<div class="form-group">
							<label>Kode Mata kuliah</label>
							<input type="text" class="form-control"  name="kdmatkul" placeholder="Masukan Kode">
						</div>
						<div class="form-group">
							<label>Nama Mata Kuliah</label>
							<input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Matkul">
						</div>
						<div class="form-group">
							<label>Sks</label>
							<input type="text" class="form-control"  name="sks" placeholder="Masukan Sks">
						</div>
						<div class="form-group">
							<label>Semester</label>
							<input type="text" class="form-control"  name="semester" placeholder="Masukan Semester">
						</div>
						<div class="form-group">
							<label>Nilai</label>
							<input type="text" class="form-control"  name="nilai" placeholder="Masukan Nilai">
						</div>
						<div class="form-group">
							<label>Indeks</label>
							<input type="text" class="form-control"  name="indeks" placeholder="Masukan indeks">
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" class="form-control"  name="semester" placeholder="Masukan Keterangan">
						</div>
						<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
						<a href="index.php?page=nilai" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
					</form>
					<?php
					if (isset($_POST['save'])) {
				 	# code...
						$koneksi->query("INSERT INTO nilai INNER JOIN mahasiswa ON nilai.kd_mhs = mahasiswa.kd_mhs INNER JOIN matakuliah ON nilai.kd_matkul = matakuliah.kd_matkul
							(nim,nama,kelas,jurusan,kd_matkul,nama_matkul,sks,semester,nilai,indeks,ket) VALUES ($_POST[nim]','$_POST[nama]','$_POST[kelas]','$_POST[jurusan]''$_POST[kdmatkul]','$_POST[nama]','$_POST[sks]','$_POST[semester]','$_POST[nilai]','$_POST[indeks]','$_POST[keterangan]')");

						echo "<script>alert('Data Berhasil Disimpan');</script>";
						echo "<meta http-equiv='refresh'content='1;url=index.php?page=nilai'>";
					} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>