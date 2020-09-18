<section class="container mt-5">
	<div>
		<h3 class="text-center mt-5" style="color: teal;">Cek Status Pesanan Anda disini.</h3>
		<div class="text-center">
				<?= $this->session->flashdata('pesan'); ?>
			</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-4 col-md-12 col-sm-12">
			
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12">
			<hr>
			<form action="<?= base_url('Konfirmasi/index'); ?>" method="post">
				<div class="form-group">
					<label for="nomor" style="color: teal;">Nomor Handphone</label>
					<input type="text" class="form-control font-italic" id="nomor" name="nomor"
						placeholder="input nomor hp disini">
					<?= form_error("nomor", '<small class="text-danger">', "</small>") ?>
				</div>
				<div class="form-group">
					<label for="kode" style="color: teal;">Kode Pesanan</label>
					<input type="text" class="form-control font-italic" id="kode" name="kode"
						placeholder="input kode pesanan disini">
					<?= form_error("kode", '<small class="text-danger">', "</small>") ?>
				</div>
				<button type="submit" class="btn btn-block btn-warning align-right" style="color: teal;">Lihat Status</button>
			</form>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12"></div>
	</div>
</section>
