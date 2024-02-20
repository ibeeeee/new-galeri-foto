<?= $this->extend("template") ?>
<?= $this->section("title") ?>

<?= $this->endSection() ?>
<?= $this->section("content") ?>
<div class="container mt-6">
	<div class="card-body">
		<form method="post" action="<?= base_url("proses_edit_foto")?>" enctype="multipart/form-data">
		<input type="hidden" name="foto_id" id="foto_id" value="<?= $foto->foto_id ?>">
		<div class="row">
			<div class="col">
				<label type="file" for="lokasi_file" class="drop-container" id="dropcontainer">
				<span class="drop-title">Drop files here</span>
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
						<input type="text" name="deskripsi_foto" class="form-control" value="<?= $foto->deskripsi_foto ?>" required>
					</div>			
					<div class="mb-2 mt-3">
						<button type="submit" class="btn btn-outline-dark">Simpan foto</button>
					</div>
				</form>
			</div>
		</div>
  	</div>
</div>
<?= $this->endSection() ?>