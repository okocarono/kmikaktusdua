<section class="container mt-4">
<?php echo form_open('Adminpage/Produk/cariproduk'); ?>
	<form action="">
		<div class="row">
		<div class="form-group col-lg-6 col-md-12 col-sm-12">
				<input type="text" name="keyword" class="form-control font-italic" id="cari-barang"
					placeholder="cari nama produk ">
			</div>

			<div class="form-group col-lg-3 col-md-12 col-sm-12">
				<input type="submit" name="search_submit" value="Cari Produk" class="btn btn-dark btn-block">
			</div>
			<div class="col-3"><a href="<?php echo base_url()?>adminpage/produk/product_baru" class="btn btn-block btn-warning">Upload Produk Baru</a></div>
		</div>
	</form>
</section>

<section class="container text-center">
	<div class="card-deck my-4">
	<div class="card-columns">
		<?php
			foreach($data->result() as $t){
				echo '
					<div class="card">
						<img src="'.base_url().'gambar/'.$t->gambar.'"
								class="card-img-top" style="height:200px" alt="...">
							<div class="card-body" style="height: 100px">
								<h6 class="card-title">'.$t->nama_produk.'</h6>
								<h6 class="text-muted">Kode : '.$t->kode_produk.'</h6>
							</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-3"><a href="'.base_url().'Adminpage/Produk/edit_produk/'.$t->kode_produk.'" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
								</div>
								<div class="col-3"><a href="'.base_url().'Adminpage/Produk/hapus_produk/'.$t->kode_produk.'" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
								</div>
								<div class="col-6"><input class="form-control" type="text" id="disabledInput" disabled value="Stok '.$t->stok_produk.'"></div>
							</div>
						</div>
					</div>
				';
			}
		?>
		</div>
	</div>
</section>
<section class="container my-5">
	<?php echo $pagination; ?>

</section>
