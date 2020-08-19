 <div layout:fragment="breadcrumb">
    <div class="panel-heading"><h3>Nilai Mahasiswa</h3></div>
    <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li>
        <li><a href="index.php?page=mahasiswa"></i>Daftar Mahasiswa</a></li>
        <li><a href="index.php?page=matakuliah"></i>Daftar Matakuliah</a></li>
        <li class="active">Nilai Mahasiswa</li>
    </ul>
</div>
<div layout:fragment="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-tools">
                        <form method="get">
                            <div class="input-group input-group-sm" style="width: 250px; float: right; padding: 4px 5px 4px 5px;">
                                  <input class="form-control" type="search" autofocus=""  placeholder="Search" autocomplete="off" aria-label="Search">
                                <div class="input-group-btn" >
                                    <button class="btn btn-success " name="search" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Sks</th>
                                        <th>Semester</th>
                                        <th>Nilai</th>
                                        <th>Indeks</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tbody>
                                        <?php 
                                        $nomor=1;
                                        $ambil=$koneksi->query("SELECT * FROM nilai INNER JOIN mahasiswa ON nilai.kd_mhs = mahasiswa.kd_mhs INNER JOIN matakuliah ON nilai.kd_matkul = matakuliah.kd_matkul");
                                        ?>
                                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['nim'] ?></td>
                                            <td><?php echo $pecah['nama']; ?></td>
                                            <td><?php echo $pecah['kelas']; ?></td>
                                            <td><?php echo $pecah['jurusan']; ?></td>
                                            <td><?php echo $pecah['kd_matkul'] ?></td>
                                            <td><?php echo $pecah['nama_matkul']; ?></td>
                                            <td><?php echo $pecah['sks']; ?></td>
                                            <td><?php echo $pecah['semester']; ?></td>
                                            <td><?php echo $pecah['nilai']; ?></td>
                                            <td><?php echo $pecah['indeks']; ?></td>
                                            <td><?php echo $pecah['ket']; ?></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php } ?>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>