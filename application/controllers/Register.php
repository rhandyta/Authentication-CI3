<?php 

class Register extends CI_Controller {

	public function _rules()
	{
		$this->form_validation->set_rules('email', 'email', 'required', [
			'required' => 'E-mail is required!'
		]);
		$this->form_validation->set_rules('name', 'name', 'required', [
			'required' => 'Name is required!'
		]);
		$this->form_validation->set_rules('password', 'password', 'required', [
			'required' => 'Password is required!'
		]);
		$this->form_validation->set_rules('password1', 'password1', 'required', [
			'required' => 'Confirm Password is required!'
		]);
		$this->form_validation->set_rules('image', 'image', 'required', [
			'required' => 'Image is required!'
		]);
	}

	public function index()
	{
		$data['title'] = 'Registration Page';
		$this->load->view('templates/header', $data);
		$this->load->view('v_register', $data);
		$this->load->view('templates/footer');
	}

	public function registration()
	{
		$this->_rules();
		if( !$this->form_validation->run() == false ){
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Failed!</strong> You should check in on some of those fields below.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect(base_url('register'));
		} else {
			$email = $this->input->post('email', true);
			$name = $this->input->post('name', true);
			$password = $this->input->post('password', true);
			$password1 = $this->input->post('password1', true);
			$image = $_FILES['image'];
			$matches = $this->m_user->authentication($email);
			if (!$matches['email'] == $email){
				if($password == $password1){
					if($image['name'] == null) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Failed!</strong> Image is required!
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>');
						redirect('register');
					} else {
						$config['upload_path'] = './assets/images';
						$config['allowed_types'] = 'jpg|png|jpeg';
						$config['encrypt_name'] = true;
						$this->load->library('upload', $config);
						if (!$this->upload->do_upload('image')){
							echo "Failed to upload image!";
							return redirect('register','refresh');
						} else {
							$image = $this->upload->data('file_name');
						}
					}

					$data = [
						'email' => $email,
						'name' => $name,
						'password' => password_hash($password, PASSWORD_DEFAULT),
						'image' => $image,
					];
					$this->m_user->store($data, 'user');
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Success!</strong> Register has been successfully!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
					redirect('login');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Failed!</strong> Password do not match or min length 6!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect(base_url('register'));
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Failed!</strong> E-mail has been registered!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect(base_url('register'));
			}
		}
	}

}