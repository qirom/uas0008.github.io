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
			<div class="card-header bg-success text-white ">
				Edit Data
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id'];

				$data = mysqli_query($koneksi, "select * from 8_mahasiswa where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="NIM" class="form-control" value="<?= $row['NIM']; ?>">
					</div>

					<div class="form-group">
						<label>Jenis_kelamin</label>
						<textarea class="form-control" name="Jenis_kelamin"><?= $row['Jenis_kelamin']; ?></textarea>
					</div>
					<div class="form-group">
						<label>Studi</label>
						<input type="text" name="studi" class="form-control" value="<?= $row['studi']; ?>">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$NIM = $_POST['NIM'];
					$Jenis_kelamin = $_POST['Jenis_kelamin'];
					$studi = $_POST['studi'];

					mysqli_query($koneksi, "update 8_mahasiswa set nama='$nama', NIM='$NIM', Jenis_kelamin='$Jenis_kelamin', studi='$studi' where id ='$id'") or die(mysqli_error($koneksi));
					echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>