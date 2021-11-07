<div class="container justify-content-center">
	<?php if( $this->session->flashdata('flash')) : ?>
	<div class="row mt-3 justify-content-center">
		<div class="col-md-6 justify-content-center">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data TO-DO List <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true>&times;"></span>
				</button>
			</div>
		</div>
	<?php endif; ?>
	</div>


	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">
			
			<div class="card bg-dark text-white">
				<div class="card-header bg-info">
					FORM TAMBAH DATA TO-DO LIST
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="hari">Hari</label>
							<input type="text" name="hari" class="form-control" placeholder="ex. Senin" id="hari">
							<small class="form-text text-danger"><?= form_error('hari'); ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							
							<input type="text" name="tanggal" class="form-control" placeholder="ex. 11 Januari 2022" id="tanggal">
							<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
						</div>
						<div class="form-group">
							<label for="jam">Jam</label>
							
							<input type="text" name="jam" class="form-control" placeholder="ex. 14:06" id="jam">
							<small class="form-text text-danger"><?= form_error('jam'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							
							<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<select class="form-control" id="jabatan" name="jabatan">
							<option selected>Pilih ...</option>
							<option value="Pengawas">Pengawas</option>
							<option value="Pekerja">Pekerja</option>
						</select>
						</div>
						<div class="form-group">
							<label for="telp">No. Telp</label>
							
							<input type="text" name="telp" class="form-control" placeholder="ex. 081234567890" id="telp">
							<small class="form-text text-danger"><?= form_error('telp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" placeholder="Enter email" class="form-control" id="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="pengarahan">Pengawas Memberikan Pengarahan</label>
							<select class="form-control" id="pengarahan" name="pengarahan">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="tugas">Pengawas Memberikan Tugas Kepada Pekerja</label>
							<select class="form-control" id="tugas" name="tugas">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="koordinasi">Pengawas Mengkoordinasikan Pekerja</label>
							<select class="form-control" id="koordinasi" name="koordinasi">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="benih">Pekerja Menanam Benih</label>
							<select class="form-control" id="benih" name="benih">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="air">Pekerja Mengalirkan Air ke Lahan Pertanian</label>
							<select class="form-control" id="air" name="air">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="pestisida">Pekerja Memberi Pestisida</label>
							<select class="form-control" id="pestisida" name="pestisida">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="mengawasi">Pengawas Mengawasi Pekerja</label>
							<select class="form-control" id="mengawasi" name="mengawasi">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<div class="form-group">
							<label for="produksi">Pengawas Mengawasi Hasil Produksi</label>
							<select class="form-control" id="produksi" name="produksi">
							<option selected>Pilih ...</option>
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
						</select>
						</div>
						<center>
						<button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
						</center>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
