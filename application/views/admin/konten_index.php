<div id="hilang">
	<?= $this->session->flashdata('alert');	 ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Tambah Konten
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-ig" role="document">
				<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="col mb-3">
								<label class="form-label">Judul</label>
								<input type="text" class="form-control" placeholder="Nama" name="judul" required />
							</div>
							<div class="col mb-3">
								<label class="form-label">Kategori</label>
								<select name="id_kategori" class="form-control">
									<?php foreach($kategori as $aa) { ?>
									<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
									<?php  } ?>
								</select>
							</div>
							<div class="col mb-3">
								<label class="form-label">Keterangan</label>
								<textarea name="keterangan" class="form-control"></textarea>
							</div>
							<div class="col mb-3">
								<label class="form-label">Foto</label>
								<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn cur-p btn-outline-primary">Simpan</button>
						</div>
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
							<th>Judul</th>
							<th>Kategori Konten</th>
							<th>Tanggal</th>
							<th>Kreator</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($konten as $aa) { ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $aa['judul'] ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td><?= $aa['tanggal'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td>
								<a href="<?= site_url('assets/upload/konten/'.$aa['foto']) ?>" alt="">
									<span class="fa fa-search text-primary">lihat foto</span>
								</a>
							</td>
							<td>
								<a href="<?= site_url('admin/konten/delete_data/'.$aa['foto']);?>"
									class="btn btn-sm btn-danger"
									onClick="retun confirm('Apakah anda yakin menghapus data ini?')"><span
										class="fa fa-trash"></span></a>
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#edit<?= $aa['id_konten']; ?>">
									<span class="fa fa-pencil"></span>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="edit<?= $aa['id_konten']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-ig" role="document">
										<form action="<?= base_url('admin/konten/update') ?>" method="post"
											enctype="multipart/form-data">
											<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Edit Konten</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col mb-3">
														<label class="form-label">Judul</label>
														<input type="text" class="form-control" placeholder="Nama"
															name="judul" value="<?= $aa['judul'] ?>" required />
													</div>
													<div class="col mb-3">
														<label class="form-label">Kategori</label>
														<select name="id_kategori" class="form-control">
															<?php foreach($kategori as $uu) { ?>
															<option 
															<?php if ($uu['id_kategori']==$aa['id_kategori']) { echo"selected";}?>
															value="<?= $uu['id_kategori'] ?>">
																<?= $uu['nama_kategori'] ?></option>
															<?php  } ?>
														</select>
													</div>
													<div class="col mb-3">
														<label class="form-label">Keterangan</label>
														<textarea name="keterangan" class="form-control"><?= $aa['keterangan'];?></textarea>
													</div>
													<div class="col mb-3">
														<label class="form-label">Foto</label>
														<input type="file" name="foto" class="form-control"
															accept="image/png, image/jpeg">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
													<button type="submit"
														class="btn cur-p btn-outline-primary">Simpan</button>
												</div>
											</div>
										</form>
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
