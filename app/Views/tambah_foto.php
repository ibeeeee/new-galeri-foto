<?= $this->extend("template") ?>
<?= $this->section("title") ?>
 
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<div class="container mt-6">
<div class="card-body">
	<div class="d-flex justify-content-start mb-5">
		<a href="<?= base_url()?>" class="nav-link"><i class="fa-solid fa-circle-arrow-left fa-2xl"></i></a>
	</div>
	<form method="post" action="<?= base_url("proses_tambah_foto")?>" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
		<label type="file" for="lokasi_file" class="drop-container" id="dropcontainer">
		<span class="drop-title">Add your files here</span>
		or
		<input type="file" name="lokasi_file" id="lokasi_file" accept="image/*" required>
		</label>
    </div>
    <div class="col">
			<div class="mb-2">	
				<label>Judul Foto</label>
				<input type="text" name="judul_foto" class="form-control" required>
			</div>
			<div class="mb-2">
				<label class="form-label">Deskripsi</label>
				<textarea class="form-control" placeholder="Tambahkan deskripsi.." name="deskripsi_foto" id="floatingTextarea2" style="height: 100px;"></textarea>
			</div>
			<div class="mb-2">
				<label>Album</label>
				<select name="album_id" class="form-select">
					<option value="">
						Not Selected
					</option>
					<?php
					foreach($rows1 as $row1){
					?>
					<option value="<?= $row1->album_id?>">
						<?= $row1->nama_album ?>
					</option>
					<?php
					}
					?>
				</select>	
			</div>			
			<div class="mb-2 mt-3">
				<button type="submit" class="btn btn-outline-dark">Add Photo</button>
			</div>
		</form>
    </div>
  </div>
  </div>
</div>
<?= $this->endSection() ?>