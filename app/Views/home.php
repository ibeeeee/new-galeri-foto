<?= $this->extend("template") ?>

<?= $this->section("title")?>

<?= $this->endSection() ?>

<?= $this->section("content")?>
<main role="main">    
        <section class="mt-4 mb-5">
        <div class="container mb-4">
          <h1 class="font-weight-bold title">Explore</h1>
          <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
            <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExplore">
              <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= base_url()?>" class="nav-link"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tambah_foto')?>" class="nav-link"><b>Upload</b></a>
              </li>
              <li class="nav-item">
    				    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Add Album</b></a>
    				  </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Album</b></a>
                <div class="dropdown-menu shadow-lg" name="album_id" class="form-select" aria-labelledby="dropdown01">
                <?php
                  foreach($rows1 as $row1){
                  ?>
                  <a class="dropdown-item" href="<?= base_url($row1->album_id)?>" value="<?= $row1->album_id?>"><?= $row1->nama_album ?></a>
                  <?php
                  }
                  ?>
                </div>
              </li>
              </ul>
            </div>
            </nav>
          </div>
        </div>

        <div class="container-fluid">
            <div class="row">
              <div class="card-columns">
                <?php
                foreach($rows as $row):
                ?>
                <div class="card card-pin">
                <a href="<?= base_url('foto/'.$row->foto_id.'/preview') ?>">
                  <img class="card-img" src="<?= base_url("assets/foto/".$row->lokasi_file)?>" alt="Card image">
                  <div class="overlay">
                    <h2 class="card-title title"><?= $row->judul_foto ?></h2>
                  </div>
                </a>
                </div>
                <?php
                endforeach
                ?>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Add Your Album</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                <form method="post" action="<?= base_url("proses_tambah_album")?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2">	
                                <label>Nama Album</label>
                                <input type="text" name="nama_album" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" placeholder="Tambahkan deskripsi.." name="deskripsi" id="floatingTextarea2" style="height: 100px;"></textarea>
                            </div>		
                            <div class="mb-2 mt-3">
                                <button type="submit" class="btn btn-outline-dark">Add Album</button>
                            </div>
                        </div>
                    </div>
                </form>  
              </div>
              </div>
            </div>
            </div>
          </div>
          </div>

    </section>
</main>
<?= $this->endSection() ?>