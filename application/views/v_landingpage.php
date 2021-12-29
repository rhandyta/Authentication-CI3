<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>JWP 2021</title>
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img src="<?= base_url('assets/img/logo.png') ?>" width="30" height="30" class="d-inline-block align-top">
			JWP 2021
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-lg-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<div class="d-flex flex-row justify-content-center">
					<div class="btn-group">
					<a class="btn btn-outline-secondary nav-item nav-link font-weight-bold mr-2" href="<?= base_url('login') ?>"> Login </a>
					<a class="btn btn-outline-secondary nav-item nav-link font-weight-bold" href="<?= base_url('register') ?>"> Register </a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row-align-item-center d-flex">
				<div class="col-12 col-md-5 col-lg-6 order-md-2">
					<img src="<?= base_url('assets/img/bg.jpg') ?>" class="img-fluid" alt="Responsive image">
				</div>
				<div class="col-12 col-md-7 col-lg-6 order-md-1">
					<h1 class="display-3 text-center text-md-start">
						Welcome to <span class="text-primary">JWP</span><br>2021
					</h1>
					<p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
					Build a beautiful, modern website with flexible Bootstrap components built from scratch.
					</p>
					<div class="text-center text-md-start">
						<a href="" class="btn btn-primary">Login</a>
						<a href="" class="btn btn-primary">Register</a>
					</div>
				</div>
		</div>
	</div>
	<footer class="py-8 py-md-11 bg-gray-200 mt-3">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-6 col-md-4 col-lg-2">
					<h6 class="fw-bold text-uppercase text-gray-700">Sosial Media</h6>
					<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
						<li class="mb-3"><a href="#" class="text-reset"><i class="fab fa-facebook"></i> <span>Facebbok</span></a></li>
						<li class="mb-3"><a href="#" class="text-reset"><i class="fab fa-instagram"></i> <span>Instagram</span></a></a></li>
						<li class="mb-3"><a href="#" class="text-reset"><i class="fab fa-twitter"></i> <span>Twitter</span></a></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
<script type="text/javascript" src="<?= base_url('assets/js/jquery-slim.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
