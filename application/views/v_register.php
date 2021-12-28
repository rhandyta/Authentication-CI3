<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>
</head>
<body>
	<div class="alert">
		<?= $this->session->flashdata('message'); ?>
	</div>
	<div class="container">
			<form action="<?= base_url('register/registration') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="email">E-mail</label>
					<input class="form-control" type="email" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" type="name" name="name" id="name">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password">
				</div>
				<div class="form-group">
					<label for="password1">Confirm Password</label>
					<input class="form-control" type="password" name="password1" id="password1">
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input class="form-control" type="file" name="image" id="image">
				</div>
				<button type="submit">Register</button>
				<button type="reset">Reset</button>
			</form>
	</div>
</body>
</html>