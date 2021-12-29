
	<div class="container">
			<div class="d-flex justify-content-center my-5">
				<div class="card col-lg-6"">
					<div class="card-header mt-2">
						<h4 class="text-center"><?= $title ?></h4>
					</div>
					<div class="body">
						<form action="<?= base_url('forgotpassword/transferpassword') ?>" method="post">
							<p class="text-center">Change your password account: <?= $this->session->userdata('email_reset') ?></p>
							<div class="form-group">
								<label for="password">New Password</label>
								<input class="form-control" type="password" name="password" id="password">
								<?= form_error('password','<div class="text-danger small">','</div>'); ?>
							</div>
							<div class="form-group">
								<label for="password1">Confirm Password</label>
								<input class="form-control" type="password" name="password1" id="password1">
								<?= form_error('password1','<div class="text-danger small">','</div>'); ?>
							</div>
							<div class="d-flex justify-content-center">
								<button class="btn btn-primary mb-2" type="submit">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>