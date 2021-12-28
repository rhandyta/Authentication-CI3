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
		<form action="<?= base_url('forgotpassword/transferpassword') ?>" method="post">
			<p>Change your password account: <?= $this->session->userdata('email_reset') ?></p>
			<div class="form-group">
				<label for="password">New Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<div class="form-group">
				<label for="password1">Confirm Password</label>
				<input class="form-control" type="password" name="password1" id="password1">
			</div>
			<button type="submit">Save Changes</button>
		</form>
	</div>
</body>
</html>