<header>
	<div id="home" class="">
		<div id="landing-text">
			<div class="container">
				<h1 id="txt-satu" class="text-left font-weight-bold">KaktusKmi Jogja</h1>
				<h5 class="text-left my-4 font-italic">Menjual tanaman seperti Kaktus, Sansivera, Aglonema.
				</h5>
				<!-- <a href="#" class="btn btn-warning mt-4">Marketplace</a> -->
				<a href="<?php echo base_url(); ?>marketplace/index" class="btn btn-lg btn-outline-light mt-5"> Go To
					Marketplace <i class="fas fa-arrow-circle-right fa-lg mx-2"></i></a>
			</div>
		</div>
	</div>
</header>

<section class="container">
	<div class="container my-5">
		<div class="card-deck">

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/pot_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Pot Tanaman</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar aksesoris Pot Tanaman.</p>
					</div>
				</a>
				<!-- <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div> -->
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/bibit_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Bibit Tanaman</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar aksesoris bibit tanaman.</p>
					</div>
				</a>
				<!-- <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div> -->
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/batu_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Batu Tanaman</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar aksesoris batu tanaman.</p>
					</div>
				</a>
				<!-- <div class="card-footer">
					<small class="text-muted">Last updated 3 mins ago</small>
				</div> -->
			</div>
			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/paket_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Paket Tanaman</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar aksesoris paket tanaman.</p>
					</div>
				</a>
			</div>
		</div>
	</div>

	<a href="https://www.instagram.com/kaktuskmi/" class="float-ig" target="_blank">
		<i class="fab fa-instagram my-float"></i>
	</a>

	<a href="https://api.whatsapp.com/send?phone=6281804086665&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
		class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a>

</section>

<section class="container">
	<div class="row">
		<div class="col-4"><hr></div>
		<div class="col-4">
			<h4 class="text-center">Produk Terbaru</h4>
		</div>
		
		<div class="col-4"><hr></div>
	</div>

	<?= $this->session->flashdata('stok'); ?>
	
	<div class="card-columns my-3">
		
			<?php
				foreach($produk as $b){
					echo '
					<form method="post" action="'.base_url().'Home/addToCart/'.$b->kode_produk.'" method="post" accept-charset="utf-8">
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
					<input type="hidden" name="kode_barang" value="'.$b->kode_produk.'" />
						<p style="color: teal;">Rp. '.number_format($b->harga_produk,0,",",".").'</p>
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
	<div class="my-4">
		<a href="<?php echo base_url(); ?>marketplace/index" class="btn btn-block btn-success">Lihat Produk lainnya</a>
	</div>
</section>

<section class="container">
	<div class="container my-5">
		<div class="card-deck">

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/kaktus_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Tanaman Lainnya</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar Tanaman Lainnya.</p>
					</div>
				</a>
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/aglonema_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Aglonema</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar Tanaman Aglonema.</p>
					</div>
				</a>
			</div>

			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/sansivera_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Sansivera</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar Tanaman Sansivera.</p>
					</div>
				</a>
			</div>
			<div class="card bg-dark"><a href="<?php echo base_url(); ?>marketplace/sukulen_product"
					style="color:white; text-decoration: none;">
					<div class="card-body">
						<h5 class="card-title text-center">Sukulen</h5>
						<hr>
						<p class="card-text">Klik untuk melihat daftar Tanaman Sukulen.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
