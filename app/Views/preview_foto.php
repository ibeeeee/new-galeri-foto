<?= $this->extend("template") ?>

<?= $this->section("title") ?>

<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="container text-center mt-6">
  <div class="row justify-content-center">
    <div class="d-flex justify-content-end mr-10  mb-3">
      <a href="<?= base_url()?>" class="nav-link"><i class="fa-solid fa-circle-arrow-left fa-2xl"></i></a>
    </div>
    <div class="col-5">
      <img class="card-img" src="<?= base_url('assets/foto/' . $foto->lokasi_file) ?>" alt="" style="border-radius: 23px;">
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <!-- Like button -->

          <!-- Comments section -->

          <div class="d-flex justify-content-start">
            <?= $foto->username ?> /  
            <?= date("d-M-Y", strtotime($foto->tanggal_unggah)) ?>
          </div>
          <hr>
          <div class="d-flex justify-content-start">
            <h5><?= $foto->judul_foto ?></h5>  
          </div>
          <div class="d-flex justify-content-start ">
            <h6><?= $foto->deskripsi_foto ?></h6>  
          </div>
          <?php if ($foto->user_id == session()->user_id): ?>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <b class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></b>
            </button>
            <a href="<?= base_url('foto/'.$foto->foto_id.'/hapus') ?>" class="btn btn-sm"
                onclick="return confirm('Yakin hapus <?= $foto->judul_foto ?> ?')">
                <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
            </a>
          </div>
          <?php endif; ?>
          <hr>
          <div class="container text-start">
            <div class="d-flex justify-content-start">
              <div div class="comments mt-3 mb-4">
                <?php
                  foreach ($komentar as $index => $komentars):
                ?>
                <div class="mb-2">
                    <img src="<?= base_url('assets/template/img/av.png') ?>" alt="Avatar" class="rounded-circle me-2"
                         style="width: 30px; height: 30px;">
                    <span class="fw-bold">
                        <?= $usernames[$index] ?>
                    </span>
                    <?= $komentars->isi_komentar ?>
                </div>
                <?php
                  endforeach;
                ?>
              </div>
            </div>
          </div>
          
          
          <div class="d-flex justify-content-end gap-2">
            <div>
              <form action="<?= base_url('like/' . $foto->foto_id) ?>" method="post">
                <?php
                if ($like) {
                ?>
                  <?= $like ?>
                <?php
                }
                ?>
                <button style="border: none; background: white;" type="submit">
                  <?php
                  if ($isLiked) {
                  ?>
                    <i class="fa-solid fa-heart-o fa-lg text-danger" aria-hidden="true"></i>
                  <?php
                  } else {
                  ?>
                    <i class="fa-regular fa-heart-o fa-lg" aria-hidden="true"></i>
                  <?php
                  }
                  ?>
                </button>
              </form>
            </div>
          </div>

          <!-- Form untuk menambahkan komentar baru -->
          <form method="post" action="<?= base_url("proses_tambah_komentar") ?>" enctype="multipart/form-data" class="mt-3">
            <div class="input-group mb-3">
              <input type="hidden" name="id" class="form-control" value="<?= $foto->foto_id ?>" placeholder="Add a comment">
              <input type="text" name="isi_komentar" class="form-control" placeholder="Add a comment">
              <button type="submit" class="btn btn-dark" id="button-addon2">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
              </button>
            </div>
          </form>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Your Photo</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <form method="post" action="<?= base_url("proses_edit_foto")?>" enctype="multipart/form-data">
                    <input type="hidden" name="foto_id" id="foto_id" value="<?= $foto->foto_id ?>">
                    <div class="row">
                      <div class="col">
                        <label type="file" for="lokasi_file" class="drop-container" id="dropcontainer">
                        <span class="drop-title">Add your files here</span>
                        or
                        <input type="file" name="lokasi_file" id="lokasi_file" accept="image/*" >
                        </label>
                      </div>
                      <div class="col">
                        <div class="mb-2">	
                          <label>Judul Foto</label>
                          <input type="text" name="judul_foto" class="form-control" value="<?= $foto->judul_foto ?>" required>
                        </div>
                        <div class="mb-2">
                          <label class="form-label">Deskripsi</label>
                          <input type="text" name="deskripsi_foto" class="form-control" id="floatingTextarea2" style="height: 100px;"  value="<?= $foto->deskripsi_foto ?>" required>
                        </div>
                        <div class="mb-2">
                          <label class="form-label">Nama Album</label>
                              <select name="album_id" class="form-select">
                                <option value="">
                                  Not Selected
                                </option>
                                      <?php
                                          foreach($rows1 as $row):
                                              if($row->album_id == $foto->album_id){
                                                $sej = "selected";
                                              }else{
                                                  $sej = "";
                                              }
                                      ?>
                                          <option value="<?= $row->album_id?>" <?= $sej ?>>
                                              <?= $row->nama_album ?>
                                          </option>
                                      <?php
                                      endforeach;
                                      ?>
                                </select>
                        </div>			
                        <div class="mb-2 mt-3">
                            <button type="submit" class="btn btn-outline-dark">Save photo</button>
                        </div>
                  </form> 
              </div>
              </div>
            </div>
            </div>
          </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<?= $this->endSection() ?>