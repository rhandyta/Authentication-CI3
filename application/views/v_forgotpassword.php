
	<div class="container">
		<div class="d-flex justify-content-center my-5">
			<div class="card col-lg-5">
				<div class="card-header">
					<h5 class="text-center"><?= $title ?></h5>
				</div>
				<div class="card-body">
				<?= $this->session->flashdata('message') ?>
					<form action="<?= base_url('forgotpassword') ?>" method="post">
						<div class="form-group">
							<label for="email">E-mail</label>
							<input class="form-control" type="email" name="email" id="email">
						</div>
						<button class="btn btn-primary" type="submit">Reset</button>
						<a class="btn btn-info float-right" href="<?= base_url('login') ?>">Login</a>
					</form>
				</div>
			</div>
		</div>
	</div>