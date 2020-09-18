<section class="container my-4">
	<!-- <form action="<?= base_url(); ?>Pembelian/Data_pembeli" method ="post"> -->
	<?php 
		echo form_open('Pembelian'); 
		foreach ($keranjang as $k) {
			# code...
			// echo json_encode($k);
			echo "
				<input type='hidden' name='id_keranjang' id='id_keranjang'value='".$k['kode']."' />
			";
		}
	?>

	<h5 class="text-center" style="color:white;" id="datadiri1">Informasi Pembeli &nbsp<i
			class="fas fa-user-circle"></i></h5>
	<hr>
	<div>

		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name='nama'>
					<small id="" class="form-text alert-danger"><?= form_error('nama'); ?></small>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="email">Alamat Email</label>
					<input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp">
					<small id="" class="form-text alert-danger"><?= form_error('email'); ?></small>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="no_telp">Nomor Handphone</label>
					<input type="text" class="form-control" id="no_telp" name='no_telp'>
					<small id="" class="form-text alert-danger"><?= form_error('no_telp'); ?></small>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="catatan">Nomor Handphone lainnya <span style="color: red;">*optional</span></label>
					<input type="text" class="form-control" id="catatan" name='catatan'>
					<small id="" class="form-text alert-danger"><?= form_error('catatan'); ?></small>
				</div>
			</div>
		</div>
	</div>

	<h5 class="text-center" style="color:white;" id="datadiri2">Alamat Pengiriman &nbsp<i class="fas fa-home"></i></h5>
	<hr>
	<div>
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="provinsi">Provinsi</label>
					<input type="text" class="form-control" id="provinsi" name='provinsi'>
					<small id="" class="form-text alert-danger"><?= form_error('provinsi'); ?></small>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="kabupaten">Kabupaten / Kota</label>
					<input type="text" class="form-control" id="kabupaten" name='kabupaten'>
					<small id="" class="form-text alert-danger"><?= form_error('kabupaten'); ?></small>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="kecamatan">Kecamatan</label>
					<input type="text" class="form-control" id="kecamatan" name='kecamatan'>
					<small id="" class="form-text alert-danger"><?= form_error('kecamatan'); ?></small>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="form-group">
					<label for="kodepos">Kode POS</label>
					<input type="text" class="form-control" id="kodepos" name='kodepos'>
					<small id="" class="form-text alert-danger"><?= form_error('kodepos'); ?></small>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="alamatlengkap">Detail Alamat</label>
					<!-- <textarea class="form-control font-italic" id="alamatlengkap" name = 'alamatlengkap' rows="3" placeholder="contoh : Nama jalan, Nama Dusun atau Kampung, RT/RW dan Kelurahan/Desa"></textarea> -->
					<input type="text" class="form-control font-italic" id="alamatlengkap" name='alamatlengkap'
						placeholder="nama dusun / perumahan, nomor RT / RW dan nama desa / kelurahan">
					<small id="" class="form-text alert-danger"><?= form_error('alamatlengkap'); ?></small>
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-6"><a href="<?= base_url(); ?>Keranjang/tampil_cart"
				class="btn btn-dark btn-block align-right"><i class="fas fa-arrow-circle-left fa-lg"></i>
				Back to Cart</a>
		</div>

		<div class="col-6">
			<button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#exampleModal">Detail Pesanan <i
					class="fas fa-arrow-circle-right fa-lg"></i></button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title text-center" id="exampleModalLabel">Proses Pesanan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Apakah data sudah benar?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
							<a href=""><button type="submit" class="btn btn-success" name="tambahpembeli">Save changes</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</form>
</section>
