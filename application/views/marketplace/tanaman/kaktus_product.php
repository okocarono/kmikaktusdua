
<section class="container">
<?= $this->session->flashdata('stok'); ?>
	<form>
		<div class="form-row mt-4">
			<div class="form-group col-lg-8 col-md-12 col-sm-12">
				<!-- <label for="inputEmail4">Email</label> -->
				
			</div>
			<!-- <div class="form-group col-lg-3 col-md-12 col-sm-12">
				<select id="inputState" class="form-control">
					<option selected>Aksesoris Tanaman</option>
					<option>Pot</option>
					<option>Batu Alam</option>
				</select>
			</div>
			<div class="form-group col-lg-3 col-md-12 col-sm-12">
				<select id="inputState" class="form-control">
					<option selected>Kategori</option>
					<option>Kaktus</option>
					<option>Sansiveera</option>
					<option>Aglonemaa</option>
				</select>
			</div> -->
			<div class="form-group col-lg-4 col-md-12 col-sm-12">
				<!-- <label for="">Cek Biaya Kirim</label> -->
				<a href="http://www.jet.co.id/tariff" class="btn btn-block btn-warning" target="_blank">Cek Biaya Kirim
					J&T Express</a>
				<!-- <button type="button" class="btn btn-block btn-success">Cek Biaya Kirim</button> -->
			</div>
		</div>
	</form>
</section>

<section class="container">

	<div class="card-columns my-4">
		<?php
			foreach($data as $b){
				echo '
				<form method="post" action="'.base_url().'Marketplace/addToCartkaktus/'.$b->kode_produk.'" method="post" accept-charset="utf-8">
				<div class="card">
					<a href="' .base_url().'marketplace/detail_tanaman/'.$b->kode_produk.'"
						style="color:black; text-decoration: none;">
						<img src="'. base_url().'gambar/'.$b->gambar.'"
							class="card-img-top" style="height: 200px;" alt="...">
						<div class="card-body" style="height:100px;">
							<h6 class="card-title">'.$b->nama_produk.'</h6>
						</div>
					</a>
					<div class="card-footer">
					<div class="row">
					<div class="col-6">
					<input type="hidden" name="kode_produk" value="'.$b->kode_produk.'" />
						<p class="h6" style="color: teal;">Rp. '.number_format($b->harga_produk,0,",",".").'</p>
					</div>
					<div class="col-6">
						
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

</section>

<section class="container my-5">

	<a href="https://www.instagram.com/fadh.leather/" class="float-ig" target="_blank">
		<i class="fab fa-instagram my-float"></i>
	</a>

	<a href="https://api.whatsapp.com/send?phone=6281804086665&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
		class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>

</section>