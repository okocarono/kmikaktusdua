<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> -->

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/Dosis/Dosis.css">
	<link rel="icon" href="<?php echo base_url()?>assets/img/icon.png" />
	<script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
    <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/exporting.js"></script>
    <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
    <script type= 'text/javascript' src="<?php echo base_url(); ?>assets/js/jquery.tsv-0.96.min.js"></script>
    
	<title><?php echo $judul; ?></title>
</head>

<body>

	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow p-3">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>adminpage/home">
				<!-- <img src="" width="39" height="39" class="mr-2" alt=""> -->
				Hello Admin !</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<!-- <li class="nav-item">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li> -->
					<li class="nav-item">
						<a class="nav-link" style="color:white;" href="<?= base_url(); ?>marketplace/index">Halaman Marketplace</a>
					</li>
					<li class="nav-item d-none d-lg-block disabled"><span class="nav-link disabled">⋮</span></li>
					<li class="nav-item">
						<a class="nav-link" style="color:white;" href="<?= base_url(); ?>">Tampilan Utama Web</a>
					</li>
					<li class="nav-item d-none d-lg-block disabled"><span class="nav-link disabled">⋮</span></li>
					<li class="nav-item">
						<a class="nav-link btn btn-block btn-danger" style="color:white;" href="<?php echo base_url('Login/logout'); ?>">Logout</a>
					</li>
					<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					 aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li> -->
					<!-- <li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li> -->
				</ul>
				<!-- <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form> -->
			</div>
		</div>
	</nav>

	<!-- <a href="https://www.instagram.com/fadh.leather/" class="float-ig" target="_blank">
		<i class="fab fa-instagram my-float"></i>
	</a> -->

	<!-- <a href="https://api.whatsapp.com/send?phone=6281804086665&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
		class="float" target="_blank">
		<i class="fab fa-whatsapp my-float"></i>
	</a> -->
