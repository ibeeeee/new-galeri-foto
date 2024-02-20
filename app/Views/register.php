<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <title>register</title>
</head>
<body  class="bg-image" style="background-image: url('assets/foto/login.jpg'); height: 100%;">
    <form method="post" action="<?= base_url('proses_register') ?>">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-5 bg-white shadow box-area">
               <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0000;">
                    <div class="featured-image mb-3">
                        <img src="<?= base_url ('assets/foto/galeri.png')?>" class="img-fluid" style="width: 300px;">
                   </div>
               </div>
               <div class="col-md-6 right-box">               
                  <div class="row align-items-center">
                        <div class="header-text mb-4">
                             <h2 align="center">REGISTER</h2>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan username anda..." required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password..." required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda..." required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan email anda..." required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="Masukkan nomor anda..." required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat anda..." required>
                        </div>
                        <div class="input-group mb-4">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Register</button>
                        </div>
                        <hr>
                        <div class="row">
                            <p align="center"> have an account?
                                <a href="<?= base_url('login') ?>">
                                    LOG IN
                                </a>                       
                            </p>
                        </div>
                  </div>
               </div> 
            </div>
        </div>
    </form>
<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>