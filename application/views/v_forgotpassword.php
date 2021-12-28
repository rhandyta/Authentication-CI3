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
		<form action="<?= base_url('forgotpassword') ?>" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input class="form-control" type="email" name="email" id="email">
			</div>
			<button type="submit">Reset</button>
			<a href="<?= base_url('login') ?>">Register</a>
		</form>
	</div>
</body>
</html>