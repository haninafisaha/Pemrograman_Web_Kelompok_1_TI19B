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
					Form Tambah Data TO-DO List
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="waktu">Waktu</label>
							<input type="text" name="waktu" class="form-control" id="waktu">
							<small class="form-text text-danger"><?= form_error('waktu'); ?></small>
						</div>	
						
						<div data-role="controlgroup">
							<legend>Jurusan</legend>
							<input type="checkbox" name="Teknik Informatika" id="Teknik Informatika" class="custom"/>
							<label for="ti">Teknik Informatika</label>
							<input type="checkbox" name="Teknik Mesin" id="Teknik Mesin" class="custom"/>
							<label for="si">Teknik Mesin</label>
							<input type="checkbox" name="Teknik Bangunan" id="Teknik Bangunan" class="custom"/>
							<label for="pti">Teknik Bangunan</label>
							<input type="checkbox" name="Teknik Sipil" id="Teknik Sipil" class="custom"/>
							<label for="pti">Teknik Sipil</label>
						
						</div>
						<center><button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
					</center></form>
				</div>
			</div>

		</div>
	</div>
</div>