<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<section class="container my-5">
	<form action="<?php base_url('Adminpage/Artikel/edit_article') ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
			<input type="hidden" readonly class="form-control <?php echo form_error('kode_artikel') ? 'is-invalid':'' ?>"  id="kode_artikel" name="kode_artikel" aria-describedby="emailHelp"
				 value="<?php echo $artikel->kode_artikel ?>">
								<div class="invalid-feedback">
									<?php echo form_error('kode_artikel') ?>
								</div>
		</div>
		<div class="form-group">
			<label for="judul" style="color: teal;" class="h4">Judul Artikel</label>
			<input type="text" class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"  id="judul" name="judul" aria-describedby="emailHelp"
				placeholder="judul artikel" value="<?php echo $artikel->judul ?>">
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
		</div>
		<div class="form-group">
			<label for="isi_artikel" style="color: teal;" class="h4">Isi Artikel</label>
			<textarea class="form-control <?php echo form_error('isi') ? 'is-invalid':'' ?>" id="isi" name="isi" rows="5"><?php echo $artikel->isi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('isi') ?>
								</div>
        </div>
        <div class="row">
		<div class="col-sm-8">		
			<div class="form-group">
				<div class="custom-file mb-3">
					<input type="file" class="custom-file-input" id="customFile" name="gambar" value="<?php echo $artikel->gambar ?>">
					<label class="custom-file-label" for="customFile"><?php echo $artikel->gambar ?></label>
				</div>
			</div>
		</div>
		<div class="col-2"><a href="<?php echo base_url(); ?>Adminpage/Artikel/article_admin" class="btn btn-block btn-dark" type="reset">Cancel</a></div>
		<div class="col-2"><button class="btn btn-block btn-warning" type="submit">Submit</button></div>
	</div>
	</form>
	<a href="<?php echo base_url(); ?>Adminpage/Artikel/article_admin"><i class="fas fa-arrow-left"></i> Back</a>
</section>

<script>
				$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
</script>