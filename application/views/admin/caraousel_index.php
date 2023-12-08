<div id="hilang">
	<?= $this->session->flashdata('alert');	 ?>
</div>
<div class="col-x1-12">
	<div class="card">
		<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<h5 class="card-header">File input</h5>
			<div class="card-body">
				<div class="col mb-3">
					<label class="form-label">Judul</label>
					<input type="text" class="form-control" placeholder="judul foto" name="judul" required />
				</div>
				<div class="col mb-3">
					<label class="form-label">Pilih foto dengan ukuran (1:3)</label>
					<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php foreach ($caraousel as $aa){ ?>
<div class="col-md-12 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= site_url('assets/upload/caraousel/'.$aa['foto']) ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul'] ?></h5>
			<a href="<?php echo site_url('admin/caraousel/delete_data/'.$aa['foto']);?>"
				class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin menghapus foto ini?')"><span
					class="fa fa-trash"></span></a>
		</div>
	</div>
</div>
<?php } ?>
