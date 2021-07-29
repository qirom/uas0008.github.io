<!DOCTYPE html>
<html>

<head>
	<title>Sistem Informasi Akademik</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>FORM DATA MAHASISWA</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Data
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="NIM" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<textarea class="form-control" name="Jenis_kelamin"></textarea>
					</div>
					<div class="form-group">
						<label>Studi</label>
						<input type="text" name="studi" required="" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				if (isset($_POST['submit'])) {
					$nama = $_POST['nama'];
					$NIM = $_POST['NIM'];
					$Jenis_kelamin = $_POST['Jenis_kelamin'];
					$studi = $_POST['studi'];

					
					$datas = mysqli_query($koneksi, "insert into 8_mahasiswa (nama,NIM,Jenis_kelamin,studi)values('$nama', '$NIM', '$Jenis_kelamin','$studi')") or die(mysqli_error($koneksi));

					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>