<div id="hilang">
	<?= $this->session->flashdata('alert');	 ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Konfigurasi</h5>
						</div>
						<div class="modal-body">
							<div class="col mb-3">
								<label class="form-label">Judul Website</label>
								<input type="text" class="form-control" placeholder="Nama" name="judul" value="<?= $konfig->judul_website; ?>"/>
							</div>
							<div class="col mb-3">
								<label class="form-label">Profile</label>
								<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
							</div>
                            <div class="col mb-3">
								<label class="form-label">Facebook</label>
								<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>"/>
							</div>
                            <div class="col mb-3">
								<label class="form-label">Instagram</label>
								<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
							</div>
                            <div class="col mb-3">
								<label class="form-label">Email</label>
								<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
							</div>
                            <div class="col mb-3">
								<label class="form-label">Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>"/>
							</div>
                            <div class="col mb-3">
								<label class="form-label">Whatsapp</label>
								<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn cur-p btn-outline-primary">Simpan</button>
						</div>
					</div>
				</form>