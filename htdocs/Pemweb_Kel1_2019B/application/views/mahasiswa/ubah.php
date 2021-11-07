<div class="container justify-content-center">
	<?php if( $this->session->flashdata('flash')) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
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
					FORM UBAH DATA TO-DO LIST
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
						<div class="form-group">
							<label for="hari">Hari</label>
							<input type="text" name="hari" class="form-control" id="hari" value="<?= $mahasiswa['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('hari'); ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							
							<input type="text" name="tanggal" class="form-control" value="<?= $mahasiswa['tanggal']; ?>" id="tanggal">
							<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
						</div>
						<div class="form-group">
							<label for="jam">Jam</label>
							
							<input type="text" name="jam" class="form-control" value="<?= $mahasiswa['jam']; ?>" id="jam">
							<small class="form-text text-danger"><?= form_error('jam'); ?></small>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							
							<input type="text" name="nama" class="form-control" value="<?= $mahasiswa['nama']; ?>" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<select class="form-control" id="jabatan" name="jabatan" value="<?= $mahasiswa['jabatan']; ?>">
							<option selected>Pilih ...</option>
							<option value="Pengawas">Pengawas</option>
							<option value="Pekerja">Pekerja</option>
						</select>
						</div>
						<div class="form-group">
							<label for="telp">No. Telp</label>
							
							<input type="text" name="telp" class="form-control" value="<?= $mahasiswa['telp']; ?>" id="telp">
							<small class="form-text text-danger"><?= form_error('telp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" id="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="pengarahan">Pengawas Memberikan Pengarahan</label>
							<select class="form-control" id="pengarahan" name="pengarahan">
							<?php foreach($pengarahan as $p) : ?>
									<?php if( $p == $mahasiswa['pengarahan']) : ?>
										<option value="<?= $p; ?>"selected><?= $p; ?></option>
									<?php else : ?>
										<option value="<?= $p; ?>"><?= $p; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="tugas">Pengawas Memberikan Tugas Kepada Pekerja</label>
							<select class="form-control" id="tugas" name="tugas">
							<?php foreach($tugas as $t) : ?>
									<?php if( $t == $mahasiswa['tugas']) : ?>
										<option value="<?= $t; ?>"selected><?= $t; ?></option>
									<?php else : ?>
										<option value="<?= $t; ?>"><?= $t; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="koordinasi">Pengawas Mengkoordinasikan Pekerja</label>
							<select class="form-control" id="koordinasi" name="koordinasi">
							<?php foreach($koordinasi as $k) : ?>
									<?php if( $k == $mahasiswa['koordinasi']) : ?>
										<option value="<?= $k; ?>"selected><?= $k; ?></option>
									<?php else : ?>
										<option value="<?= $k; ?>"><?= $k; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="benih">Pekerja Menanam Benih</label>
							<select class="form-control" id="benih" name="benih">
							<?php foreach($benih as $b) : ?>
									<?php if( $b == $mahasiswa['benih']) : ?>
										<option value="<?= $b; ?>"selected><?= $b; ?></option>
									<?php else : ?>
										<option value="<?= $b; ?>"><?= $b; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="air">Pekerja Mengalirkan Air ke Lahan Pertanian</label>
							<select class="form-control" id="air" name="air">
							<?php foreach($air as $a) : ?>
									<?php if( $a == $mahasiswa['air']) : ?>
										<option value="<?= $a; ?>"selected><?= $a; ?></option>
									<?php else : ?>
										<option value="<?= $a; ?>"><?= $a; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="pestisida">Pekerja Memberi Pestisida</label>
							<select class="form-control" id="pestisida" name="pestisida">
							<?php foreach($pestisida as $pe) : ?>
									<?php if( $pe == $mahasiswa['pestisida']) : ?>
										<option value="<?= $pe; ?>"selected><?= $pe; ?></option>
									<?php else : ?>
										<option value="<?= $pe; ?>"><?= $pe; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="mengawasi">Pengawas Mengawasi Pekerja</label>
							<select class="form-control" id="mengawasi" name="mengawasi">
							<?php foreach($mengawasi as $m) : ?>
									<?php if( $m == $mahasiswa['mengawasi']) : ?>
										<option value="<?= $m; ?>"selected><?= $m; ?></option>
									<?php else : ?>
										<option value="<?= $m; ?>"><?= $m; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						<div class="form-group">
							<label for="produksi">Pengawas Mengawasi Hasil Produksi</label>
							<select class="form-control" id="produksi" name="produksi">
							<?php foreach($produksi as $pr) : ?>
									<?php if( $j == $mahasiswa['produksi']) : ?>
										<option value="<?= $pr; ?>"selected><?= $pr; ?></option>
									<?php else : ?>
										<option value="<?= $pr; ?>"><?= $pr; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						
						<center><button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
						</center>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
