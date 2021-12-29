<div class="container">
	<div class="d-flex justify-content-center my-5">
		<div class="card col-lg-5"">
			<div class="card-header">
				<h4 class="text-center"><?= $title ?></h4>
			</div>
			<div class="card-body">
				<?= $this->session->flashdata('message') ?>
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
					<button class="btn btn-primary" type="submit">Register</button>
					<button class="btn btn-success" type="reset">Reset</button>
					<a href="<?= base_url('login'); ?>" class="btn btn-info float-right">Back</a>
				</form>
			</div>
			<div class="card-footer">

			</div>
			
		</div>
	</div>
</div>