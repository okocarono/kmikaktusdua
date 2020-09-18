<!-- <br>
<div class="container">
	<div class="row">
		<h1><?php echo $artikelku->judul;?></h1>
	</div>
	<div class="row">
		<div class="col">
			<h4 style="text-align:right"><?php echo date("d-m-Y", $artikelku->tanggal);?></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9">
			<div class="card bg-dark">
				<img src="<?php echo base_url().'gambar/'.$artikelku->gambar?>" class="img-fluid" alt="Responsive image">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col mt-4 mb-4">
			<div id="artikel">
				<?php echo $artikelku->isi;?>
			</div>
		</div>
	</div> -->

<section class="container mt-5">

	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="my-4">
				<h2 class="text-center font-weight-bold"><?php echo $artikelku->judul;?></h1>
        <hr>
			</div>
			<div class="card bg-dark">
				<img src="<?php echo base_url().'gambar/'.$artikelku->gambar?>" class="img-fluid" alt="Responsive image">
			</div>
		</div>

		<div class="col-lg-6 col-md-12 col-sm-12">
			<div id="artikel">
				<?php echo $artikelku->isi;?>
			</div>
		</div>
	</div>

</section>
