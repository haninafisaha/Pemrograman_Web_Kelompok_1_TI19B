<div class="container justify-content-center">
	<?php if( $this->session->flashdata('flash')) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true>&times;"></span>
				</button>
			</div>
		</div>
	<?php endif; ?>
</div>


	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header bg-info">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="hari">Hari</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
							<input type="text" name="hari" class="form-control" id="hari">
							<small class="form-text text-danger"><?= form_error('hari'); ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
							<input type="text" name="tanggal" class="form-control" id="tanggal">
							<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
						</div>
						<div class="form-group">
							<label for="jam">Jam</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
							<input type="text" name="jam" class="form-control" id="jam">
							<small class="form-text text-danger"><?= form_error('jam'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
							<input type="text" name="nama" class="form-control" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
							<select class="form-control" id="jabatan" name="jabatan">
							<option selected>Pilih ...</option>
							<option value="Pengawas">Pengawas</option>
							<option value="Pekerja">Pekerja</option>
						</select>
						</div>
						<div class="form-group">
							<label for="telp">No. Telp</label>
							<input type="email" class="form-control" placeholder="Enter email" id="email">
							<input type="text" name="telp" class="form-control" id="telp">
							<small class="form-text text-danger"><?= form_error('telp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" placeholder="Enter email" class="form-control" id="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="pengarahan">Pengarahan</label>
							<select class="form-control" id="pengarahan" name="pengarahan">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="tugas">Tugas</label>
							<select class="form-control" id="tugas" name="tugas">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="koordinasi">Koordinasi</label>
							<select class="form-control" id="koordinasi" name="koordinasi">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="benih">Benih</label>
							<select class="form-control" id="benih" name="benih">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="air">Air</label>
							<select class="form-control" id="air" name="air">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="pestisida">Pestisida</label>
							<select class="form-control" id="pestisida" name="pestisida">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="mengawasi">Mengawasi</label>
							<select class="form-control" id="mengawasi" name="mengawasi">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="produksi">Produksi</label>
							<select class="form-control" id="produksi" name="produksi">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>

						<center><a class="btn btn-primary" href="<?= base_url(); ?>mahasiswa" type="submit" name="tambah" >Tambah Data</a>
					</center></form>
				</div>
			</div>

		</div>
	</div>
</div>