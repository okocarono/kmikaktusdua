<section class="container">
	<?= $this->session->flashdata('stok'); ?>
	<?php echo form_open('Marketplace/cariproduk'); ?>
	<form>

		<div class="form-row mt-4 mb-4">
			<div class="form-group col-lg-6 col-md-12 col-sm-12">
				<input type="text" name="keyword" class="form-control font-italic" id="cari-barang"
					placeholder="cari nama produk / jenis tanaman">
			</div>

			<div class="form-group col-lg-3 col-md-12 col-sm-12">
			<input type="submit" name="search_submit" value="Cari Produk" class="btn btn-dark btn-block">
			</div>
			<div class="form-group col-lg-3 col-md-12 col-sm-12">
				<!-- <label for="">Cek Biaya Kirim</label> -->
				<a href="http://www.jet.co.id/tariff" class="btn btn-block btn-warning" target="_blank">Cek Biaya Kirim
					J&T</a>
				<!-- <button type="button" class="btn btn-block btn-success">Cek Biaya Kirim</button> -->
			</div>
		</div>

	</form>
	
	<div class="card-columns">

		<?php	
			foreach($data as $b){
				echo '
				<form method="post" action="'.base_url().'Marketplace/addToCart/'.$b['kode_produk'].'" method="post" accept-charset="utf-8">
					<div class="card">
						<a href="' .base_url().'marketplace/detail_tanaman/'.$b['kode_produk'].'"
							style="color:black; text-decoration: none;">
							<img src="'. base_url().'gambar/'.$b['gambar'].'"
								class="card-img-top" style="height: 200px;" alt="...">
							<div class="card-body" style="height:100px;">
								<h6 class="card-title text-center">'.$b['nama_produk'].'</h6>
							</div>
						</a>
						<div class="card-footer">
						<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12">
						
						<input type="hidden" name="kode_produk" value="'.$b['kode_produk'].'" />
				
							<p class="h6 text-center" style="color: teal;">Rp. '.number_format($b['harga_produk'],0,",",".").'</p>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							
							<button type="submit" class=" add_cart btn btn-block btn-success" ><i class="glyphicon glyphicon-shopping-cart" ></i> Beli</button>
						</div>
						</div>
						</div>
					</div>
					</form>
				';
			}
		
		?>

	</div>

	<?php echo form_close()?>
</div>
</section>

<section class="container my-5">
	<?php echo $pagination; ?>
	<a href="https://www.instagram.com/fadh.leather/" class="float-ig" target="_blank">
		<i class="fab fa-instagram my-float"></i>
	</a>

	<a href="https://api.whatsapp.com/send?phone=6281804086665&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
		class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>

</section>
