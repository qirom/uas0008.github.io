<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    
    <!-- Bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Sistem Informasi Akademik</title>
  </head>
  <body id="beranda">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #AB3E16; ">
      <div class="container">
        <a class="navbar-brand" href="#">SISTEM INFORMASI AKADEMIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center ">
        <img src="img/jumbofoto1.jpg" alt="Qirom" width="200" class="rounded-circle img-thumbnail mb-3" />
        <h1 class="display-4 text-white fs-1 fw-bold">Muhammad Ikhwanul Qirom </h1>
        <p class="lead text-white fs-4">Aplikasi ini di buat untuk melengkapi data mahasiswa. Untuk menambah data silahkan klik tombol "tambah data"</p>
      </section>
    <!-- Akhir Jumbotron -->
    
    
    <div class="container col-md-8 mt-4 text-center">
      <h1>FORM DATA MAHASISWA</h1>
      <div class="card">
        <div class="card-header bg-success text-white ">
          DATA MAHASISWA <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Program Studi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include('koneksi.php'); //memanggil file koneksi
                $datas = mysqli_query($koneksi, "select * from 8_mahasiswa") or die(mysqli_error($koneksi));
                //script untuk menampilkan data barang
  
                $no = 1;//untuk pengurutan nomor
  
                //melakukan perulangan
                while($row = mysqli_fetch_assoc($datas)) {
              ?>	
  
            <tr>
              <td><?= $no; ?></td>
              <td><?= $row['nama']; ?></td>
              <td><?= $row['NIM']; ?></td>
              <td><?= $row['Jenis_kelamin']; ?></td>
              <td><?= $row['studi']; ?></td>
              <td>
                  <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                  <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
              </td>
            </tr>
  
              <?php $no++; } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- Footer -->
  <footer class="text-white text-center pb-3" style="background-color: #AB3E16 ;">
    <p>Dibuat dengan <i class="bi bi-suit-heart-fill"></i> oleh <a href="https://www.instagram.com/mas.qirom/" class="text-white fw-bold">mas.qirom</a></p>
  </footer>
  <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxwmT19uJQGLztEewMS8Yl_oW9IispfV9VSYACd5iBgNRtzwcbXIjNLMx7_vDit8Sr3wA/exec'
      const form = document.forms['hubungi-kami']
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert');
    
      form.addEventListener('submit', e => {
        e.preventDefault()
        // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');

        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // tampilkan alert
            myAlert.classList.toggle('d-none');
            // reset form
            form.reset();
            console.log('Success!', response)
          })
          .catch(error => console.error('Error!', error.message))
      });
    </script>
  </body>
</html>
