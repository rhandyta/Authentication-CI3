<div class="container">
	<div class="d-flex justify-content-center my-5">
		<div class="card">
			<div class="card-header">
			<h5 class="text-center"><?= $title ?></h5>
			</div>
			<div class="card-body">
				<p><?= $this->session->flashdata('message') ?></p>
				<div class="row">
					<img src="assets/images/<?= $this->session->userdata('image') ?>" alt="<?= $this->session->userdata('name') ?>" class="rounded-circle mx-auto d-block" height="100">

				</div>
				<p class="mt-2">Selamat datang <?= $this->session->userdata('name') ?> telah berhasil login melalui email: <?= $this->session->userdata('email') ?></p>
				<div class="d-flex justify-content-center">
					<form action="<?= base_url('login/logout') ?>" method="post">
						<button	button class="btn btn-primary btn-sm" type="submit">Logout</button>
					</form>
				</div>
			</div>
			<div class="card-footer">
				<?= date("l jS \of F Y") ?>
			</div>
		</div>
	</div>
</div>