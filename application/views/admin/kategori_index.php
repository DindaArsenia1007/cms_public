<div id="hilang">
	<?= $this->session->flashdata('alert');	 ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah Kategori
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="col mb-3">
								<label class="form-label">Nama Kategori</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required />
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn cur-p btn-outline-primary">Simpan</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-md-12">
	<div class="white_shd full margin_bottom_30 text-dark">
		<div class="full graph_head">
			<div class="heading1 margin_0">
				<h2>Kategori Konten</h2>
			</div>
		</div>
		<div class="table_section padding_infor_info">
			<div class="table-responsive-sm">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kategori Konten</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($kategori as $aa) { ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td>
								<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
									class="btn btn-sm btn-danger"
									onClick="retun confirm('Apakah anda yakin menghapus data ini?')"><span
										class="fa fa-trash"></span></a>
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#edit<?= $aa['id_kategori'] ?>">
									<span class="fa fa-pencil"></span=>
								</button>
								<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<form action="<?= base_url('admin/kategori/update') ?>" method="post">
											<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Perbarui Kategori
													</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col mb-3">
														<label class="form-label">Nama Kategori Konten</label>
														<input type="text" class="form-control"
															value="<?= $aa['nama_kategori']?>" name="nama_kategori" required />
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn cur-p btn-outline-secondary"
														data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
										</form>
									</div>
								</div>
			</div>
			</td>
			</tr>
			<?php $no++; } ?>
			</body>
			</table>
		</div>
	</div>
</div>
