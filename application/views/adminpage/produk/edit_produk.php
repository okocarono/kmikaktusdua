<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<section class="container my-4">
	<h2 style="color: teal;" class="text-center">Edit Produk</h2>
    <hr>
</section>

<section class="container">
	<form action="<?php base_url('Adminpage/Produk/edit_produk') ?>" method="post" enctype="multipart/form-data">
		<div class="row">

			<div class="col-lg-6 col-md-12 col-sm-12">

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Nama Produk</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Nama produk" name="nama_produk" value="<?php echo $produk->nama_produk ?>">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1" style="color: teal;">Jenis Produk</label>
					<select class="form-control" id="exampleFormControlSelect1" name="jenis_produk">
						<option value="<?php echo $produk->jenis_produk ?>">Kaktus</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Aglonema</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Sukulen</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Sansivera</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Batu</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Bibit</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Pot</option>
						<option  value="<?php echo $produk->jenis_produk ?>">Paket</option>
					</select>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Harga Produk</label>
					<input type="text" class="form-control <?php echo form_error('harga_produk') ? 'is-invalid':'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Harga produk" name="harga_produk" value="<?php echo $produk->harga_produk ?>">
                        <div class="invalid-feedback">
									<?php echo form_error('harga_produk') ?>
								</div>
				</div>

			</div>

			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Diameter Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... cm" name="diameter" value="<?php echo $produk->diameter ?>">
						
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Tinggi Produk</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... cm" name="tinggi" value="<?php echo $produk->tinggi ?>">

						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="exampleInputEmail1" style="color: teal;">Stok Produk</label>
							<input type="text" class="form-control <?php echo form_error('stok_produk') ? 'is-invalid':'' ?>" id="exampleInputEmail1" aria-describedby="emailHelp"
								placeholder="... gram" name="stok_produk" value="<?php echo $produk->stok_produk ?>">
								<div class="invalid-feedback">
									<?php echo form_error('stok_produk') ?>
								</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">Keterangan Tambahan</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Tentang produk">
				</div>

				<div class="form-group">
				<div class="custom-file mb-3">
					<input type="file" class="custom-file-input <?php echo form_error('gambar') ? 'is-invalid':'' ?>" id="customFile" name="gambar" value="<?php echo $produk->gambar ?>">
					<label class="custom-file-label" for="customFile"><?php echo $produk->gambar ?></label>
					<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
				</div>
			</div>

                <div class="row mt-4">
                    <div class="col-4"><a href="<?php echo base_url()?>adminpage/Produk/product_admin" class="btn btn-dark btn-block">Cancel</a></div>
                    <div class="col-8"><button type="submit" class="btn btn-success btn-block">Edit Produk</a></div>
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