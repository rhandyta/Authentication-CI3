	<div class="container">
		<div class="d-flex justify-content-center my-5">
			<div class="card col-lg-5">
				<div class="card-header">
					<h4 class="text-center"><?= $title ?></h4>
				</div>
					<div class="card-body">
				  		<?= $this->session->flashdata('message') ?>
						<form action="<?= base_url('login/loggin') ?>" method="post">
							<div class="form-group">
							<label for="email">E-mail</label>
								<input class="form-control" type="email" name="email" id="email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control" type="password" name="password" id="password">
							</div>
							<div class="d-flex justify-content-center">
								<button class="btn btn-primary mr-2" type="submit">Login</button>
								<a class="btn btn-success" href="<?= base_url('register') ?>">Register</a>
							</div>
						</form>
				</div>
				<div class="card-footer d-flex justify-content-center">
					<a class="btn btn-info cent" href="<?= base_url('forgotpassword') ?>">Forgot Password</a>
				</div>
			</div>
		</div>
	</div>