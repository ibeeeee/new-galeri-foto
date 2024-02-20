<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery Foto</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>	
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/bootstrap/upload.css') ?> " rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/template/css/app.css') ?> " rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/template/css/theme.css') ?> " rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-2 ml-2" href="<?= base_url() ?>"> <img src="<?= base_url("assets/foto/kamera.png") ?>" width="50px"> </a>
      <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
      <ul class="navbar-nav mr-auto align-items-center">
        <form action="<?= base_url()?>" method="get">
            <div class="input-group">
                <input type="text" class="p-2" name="judul_foto" style="border: 1px solid #eeeeee;" placeholder="Search...." name="keyword">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
      </ul>
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle mr-2" src="<?= base_url("assets/template/img/av.png") ?>" width="30"><span class="align-middle"><b>author</b></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
          <span class="dropdown-item"><a href="<?=base_url("logout")?>" class="btn btn-danger d-block"><i class="fa fa-sign-out"></i> LogOut</a></span>
          </div>
        </li>
      </ul>
    </div>
  </nav>
 
	<?= $this->renderSection("content") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?= base_url('assets/template/js/app.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/template/js/theme.js') ?>"></script>
    
  <footer class="footer pt-5 pb-5 text-center">     
        <p>©  
          <span class="credits font-weight-bold">        
            <a target="_blank" class="text-dark"><u>By : Ilham Badar</u></a>
          </span>
        </p> 
    </div>
  </footer>    
</body>
</html>
