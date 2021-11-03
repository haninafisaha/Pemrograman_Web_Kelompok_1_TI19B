<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">

			<div class="card-header bg-dark text-white">
				<div class="card bg-info text-white">
					<h4><strong><center>Detail Data Submitted TO-DO List</center></strong></h4>
				</div>
				<div class="card-body">
					<h7 class="card-title"><?= $mahasiswa['hari']; ?>, <?= $mahasiswa['tanggal']; ?> pukul <?= $mahasiswa['jam']; ?></h7>
					<h5 class="card-title">Nama : <?= $mahasiswa['nama']; ?></h5>
					<h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['jabatan']; ?></h6>
					<p class="card-text">No. Telp : <?= $mahasiswa['telp']; ?></p>
					<p class="card-text">Email : <?= $mahasiswa['email']; ?></p>
					<p class="card-text">Memberikan pengarahan kepada pekerja : <strong><?= $mahasiswa['pengarahan']; ?></strong> dilakukan.</p>
					<p class="card-text">Memberikan tugas kepada para pekerja : <strong><?= $mahasiswa['tugas']; ?></strong> dilakukan.</p>
					<p class="card-text">Berkoordinasi bersama para pekerja : <strong><?= $mahasiswa['koordinasi']; ?></strong> dilakukan.</p>
					<p class="card-text">Menanam benih oleh pekerja : <strong><?= $mahasiswa['benih']; ?></strong> dilakukan.</p>
					<p class="card-text">Melakukan pengairan lahan : <strong><?= $mahasiswa['air']; ?></strong> dikerjakan.</p>
					<p class="card-text">Menyemprotkan pestisida oleh pekerja : <strong><?= $mahasiswa['pestisida']; ?></strong> dikerjakan.</p>
					<p class="card-text">Pengawas mengawasi pekerja : <strong><?= $mahasiswa['mengawasi']; ?></strong> dilakukan.</p>
					<p class="card-text">Mengawasi hasil produksi : <strong><?= $mahasiswa['produksi']; ?></strong> dilakukan.</p>
					<a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>