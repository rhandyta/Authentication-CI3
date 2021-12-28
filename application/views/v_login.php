<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>
</head>
<body>
	<div class="container">
		<div class="alert"><?= $this->session->flashdata('message') ?></div>
		<form action="<?= base_url('login/loggin') ?>" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input class="form-control" type="email" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<button type="submit">Login</button>
			<a href="<?= base_url('register') ?>">Register</a>
			<a href="<?= base_url('forgotpassword') ?>">Forgot Password</a>
		</form>
	</div>
</body>
</html>