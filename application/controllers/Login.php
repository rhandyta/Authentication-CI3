<?php 

class Login extends CI_Controller {

	public function _rules()
	{
		$this->form_validation->set_rules('email', 'email', 'required', ['required' => 'E-mail is required!']);
		$this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password is required!']);
	}

	public function index()
	{
		$session = $this->session->userdata('name');
		if($session == null){
			$data['title'] = 'Login Page';
			$this->load->view('templates/header', $data);
			$this->load->view('v_login', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Failed!, </strong> Your are loggin!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('dashboard');
		}
	}

	public function loggin()
	{
		$this->_rules();
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Failed!</strong> You should check in on some of those fields below.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
			$this->index();
		} else {
			$email = $this->input->post('email', true);
			$password = $this->input->post('password', true);

			if(!isset($_POST)){
				echo "Submit button has not been pressed!";
			} else {
					$this->m_user->authentication($email, $password);
					$user = $this->m_user->authentication($email, $password);
					if (!$user == null ){
					if(!$email == $user['email']){
						$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Failed!</strong> E-mail not found!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
					} else {
							if(!password_verify($password, $user['password'])){
								$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Failed!</strong> Wrong password!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
								redirect(base_url('login'));
							} else {
								$this->session->set_userdata($user);
								$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		   Login Successfully!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
								redirect('dashboard','refresh');
							}
						}
					} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Failed!</strong> E-mail not found!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
					redirect(base_url('login'));
				}
			}

		}

	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	} 

}