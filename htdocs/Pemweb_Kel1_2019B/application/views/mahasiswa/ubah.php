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
				<div class="card-header">
					Form Ubah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" name="nrp" class="form-control" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
							<small class="form-text text-danger"><?= form_error('nrp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
								<?php foreach($jurusan as $j) : ?>
									<?php if( $j == $mahasiswa['jurusan']) : ?>
										<option value="<?= $j; ?>"selected><?= $j; ?></option>
									<?php else : ?>
										<option value="<?= $j; ?>"><?= $j; ?></option>
									<?php endif; ?>
								<?php endforeach;?>
						</select>
						</div>
						
						<center><button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
					</center></form>
				</div>
			</div>

		</div>
	</div>
</div>