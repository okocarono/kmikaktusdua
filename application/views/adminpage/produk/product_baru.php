<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<section class="container my-4">
	<h2 style="color: teal;" class="text-center">Upload Produk Baru.</h2>
    <hr>
</section>

<section class="container">
	<div class="alert alert-success" role="alert">
 		<?= $this->session->flashdata('sukses'); ?>
	 </div>
	<form action="<?php echo base_url(); ?>Adminpage/produk/product_baru" method="post" enctype="multipart/form-data">
		<div class="row">

			<div class="col-lg-6 col-md-12 col-sm-12">

				<!-- <div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Kode Produk</label>
					<input type="text" class="form-control <?php echo form_error('kode_produk') ? 'is-invalid':'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Nama produk" name="kode_produk" id="kode_produk">
						<div class="invalid-feedback">
							<?php echo form_error('kode_produk') ?>
						</div>
				</div> -->
				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Nama Produk</label>
					<input type="text" class="form-control <?php echo form_error('nama_produk') ? 'is-invalid':'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Nama produk" name="nama_produk" id="nama_produk">
						<div class="invalid-feedback">
							<?php echo form_error('judul') ?>
						</div>
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1" style="color: teal;">Jenis Produk</label>
					<select class="form-control" name="jenis_produk" id="exampleFormControlSelect1">
						<option value="Kaktus">Kaktus</option>
						<option value="Aglonema">Aglonema</option>
						<option value="Sukulen">Sukulen</option>
						<option value="Sansivera">Sansivera</option>
						<option value="Batu">Batu</option>
						<option value="Bibit">Bibit</option>
						<option value="Pot">Pot</option>
						<option value="Paket">Paket</option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Harga Produk</label>
					<input type="text" class="form-control <?php echo form_error('harga_produk') ? 'is-invalid':'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Harga produk" name="harga_produk" id="harga_produk">
						<div class="invalid-feedback">
							<?php echo form_error('judul') ?>
						</div>
				</div>

			</div>

			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Diameter Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... cm" name="diameter" id="diameter">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Tinggi Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... cm" name="tinggi" id="tinggi">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Stok Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... pcs" name="stok_produk" id="stok_produk">
						</div>
					</div>

				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Keterangan Tambahan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Tentang produk" name="catatan" id="catatan">
				</div>

				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="gambar">
					<label class="custom-file-label" for="customFile">Upload Foto Produk</label>
				</div>

                <div class="row mt-4">
                    <div class="col-4"><a href="<?php echo base_url()?>adminpage/Produk/product_admin" class="btn btn-dark btn-block">Cancel</a></div>
                    <div class="col-8"><button class="btn btn-block btn-warning" type="submit" value="OK">Submit</button></div>
                </div>
			</div>
		</div>
	</form>
	<a href="<?php echo base_url(); ?>Adminpage/Produk/product_admin"><i class="fas fa-arrow-left"></i> Back</a>
</section>
<script>
				// Add the following code if you want the name of the file appear on select
				$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
</script>
