<?php 

class Login extends CI_Controller {

	public function _rules()
	{
		$this->form_validation->set_rules('email', 'email', 'required', ['required' => 'E-mail is required!']);
		$this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Password is required!']);
	}

	public function index()
	{
		$data['title'] = 'Login Page';
		$this->load->view('v_login', $data);
	}

	public function loggin()
	{
		$this->_rules();
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('message', 'Failed login!');
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
						$this->session->set_flashdata('message', 'E-mail not found');
					} else {
							if(!password_verify($password, $user['password'])){
								$this->session->set_flashdata('message', 'Wrong password!');
								redirect(base_url('login'));
							} else {
								$this->session->set_userdata($user);
								$this->session->set_flashdata('message', 'Login successfully!');
								redirect('dashboard','refresh');
							}
						}
					} else {
					$this->session->set_flashdata('message', 'E-mail not found');
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