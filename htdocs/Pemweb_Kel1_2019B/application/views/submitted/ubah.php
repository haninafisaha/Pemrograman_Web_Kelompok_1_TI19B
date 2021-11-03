<div class="container">
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


	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header">
					Form Ubah Data TO-DO List
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $submitted['id']; ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $submitted['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="waktu">Waktu</label>
							<input type="text" name="waktu" class="form-control" id="waktu" value="<?= $submitted['waktu']; ?>">
							<small class="form-text text-danger"><?= form_error('waktu'); ?></small>
						</div>
						<div class="form-group">
							<label for="kegiatan">Kegiatan</label>
							<select class="form-control" id="kegiatan" name="kegiatan">
								<?php foreach($kegiatan as $k) : ?>
									<?php if( $k == $submitted['kegiatan']) : ?>
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