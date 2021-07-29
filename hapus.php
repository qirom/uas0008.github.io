<?php				
			include 'koneksi.php'; 
			$id = $_GET['id'];

			$datas = mysqli_query($koneksi, "delete from 8_mahasiswa where id ='$id'") or die(mysqli_error($koneksi));

			echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
	?>