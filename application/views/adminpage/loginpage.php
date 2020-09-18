<section class="container mt-5">
	<div>
		<h3 class="text-center my-3" style="color: teal;">Silahkan Login untuk Mengakses Halaman Admin.</h3>
	</div>
	<div class="row mt-4">
		<div class="col-lg-4 col-md-12 col-sm-12"></div>
		<div class="col-lg-4 col-md-12 col-sm-12">
			<hr>
			<?php if(isset($error)) { echo $error; }; ?>
			<form action="<?php echo base_url() ?>Login/aksi" method="post">
			
				<div class="form-group">
					<label for="exampleInputEmail1" style="color: teal;">ID Admin</label>
					<input type="text" class="form-control font-italic" id="username" name="username" aria-describedby="emailHelp"
						placeholder="enter your ID">
						<?php echo form_error('username'); ?>
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1" style="color: teal;">Password</label>
					<input type="password" class="form-control font-italic" id="password" name="password" placeholder="enter your password">
					<?php echo form_error('password'); ?>
				</div>
				<button type="submit" class="btn btn-warning align-right" style="color: teal;">Login</button>
			</form>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12"></div>
	</div>
</section>
