<section class="container">

 		<?= $this->session->flashdata('stok'); ?>

	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 mt-4 mb-5">
			<img src="<?php echo base_url().'gambar/'.$data->gambar?>" class="img-fluid" alt="Responsive image">
		</div>

		<div class="col-lg-6 col-md-12 col-sm-12 mt-4 mb-5">
			<div class="text-center font-weight-bold">
				<h1><?php echo $data->nama_produk;?></h1>
			</div>
			<div class="text-center text-muted font-italic">
				<h6><?php echo $data->kode_produk;?></h6>
			</div>
			<div class="text-center" class="h3">Rp. <?php echo $data->harga_produk;?></a></div>
			<a href="<?= base_url(); ?>marketplace/index" class="btn btn-block btn-outline-info my-3"><i
					class="fas fa-arrow-circle-left mr-2">
				</i> Kembali ke Marketplace</a>
			<hr>

			<div><a class="h5">Detail Produk :</a></div>

			<div class="table-responsive">
				<table class="table table-hover table-borderless table-responsive">
					<tbody>
						<tr>
							<th scope="row">Stok Produk</th>
							<td>:</td>
							<td><?php
								if($data->stok_produk <=0 ){
									echo'stok habis';
								}else{

									echo $data->stok_produk ;
								} ?>
								</td>
						</tr>
						<tr>
							<th scope="row">Diameter Pot</th>
							<td>:</td>
							<td><?php echo $data->diameter;?> cm</td>
						</tr>
						<tr>
							<th scope="row">Tinggi Tanaman</th>
							<td>:</td>
							<td><?php echo $data->tinggi;?> cm</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div><a class="h5">Keterangan Tambahan :</a></div>
			<div class="table-responsive">
				<table class="table table-borderless table-responsive">
					<tbody>
						<tr>
							<th scope="row">Keterangan Lainnya</th>
							<td>:</td>
							<td>Belum ada.</td>
						</tr>
					</tbody>
				</table>
			</div>

			<hr>
			<form method="post" action="<?= base_url('Marketplace/addToCartdetail/').$data->kode_produk?>" method="post" accept-charset="utf-8">	
			<div class="row">
				<div class="col-3">
					<div class="input-group">
						<select class="custom-select" id="inputGroupSelect01" name="jumlah">
						<?php for($data->jumlah=1 ; $data->jumlah<= $data->stok_produk; $data->jumlah++) :  ?>
						<option value="<?= $data->jumlah ?>"><?= $data->jumlah ?></option>
						<?php endfor; ?>
						</select>
					</div>
				</div>
				<div class="col-6">
				<input type="hidden" name="kode_produk" value="<?= $data->kode_produk ?>" />
				<button type="submit" class="btn btn-block btn-warning"><i
							class="fas fa-cart-arrow-down mr-2">
						</i> Beli Produk Ini</button>				
				</div>	
				</div>	
				</form>
			
			
		
		</div>
		
	</div>
</section>
