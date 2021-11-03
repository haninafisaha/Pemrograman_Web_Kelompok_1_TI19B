<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Data TO-DO List
				</div>
				<div class="card-body">
					<h5 class="card-title">Nama : <?= $submitted['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $submitted['waktu']; ?></h6>
					<p class="card-text">Kegiatan : <?= $submitted['kegiatan']; ?></p>
					<a href="<?= base_url(); ?>submitted" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>