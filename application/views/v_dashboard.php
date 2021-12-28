<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
</head>
<body>
<p><?= $this->session->flashdata('message') ?></p>
<p>Selamat datang <?= $this->session->userdata('name') ?> telah berhasil login melalui email: <?= $this->session->userdata('email') ?></p>


<br><br><br>
<a href="<?= base_url('login/logout') ?>">Logout</a>
</body>
</html>