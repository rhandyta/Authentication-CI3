<?php 

class Forgotpassword extends CI_Controller {

	public function _sendEmail($email, $token)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_user' => 'sendingemail117@gmail.com',
			'smtp_pass' => 'sendemail117',
			'smtp_port' => '587',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'smtp_crypto' => 'tls',
			'newline' => "\r\n",
		];
		
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->from('sendingemail117', 'Regards');
		$this->email->to($email);
		$this->email->subject('Forgot Password');
		$this->email->message('Click this link to reset password :  <a href="'.base_url(). 'forgotpassword/resetpassword?email=' . $email. '&token=' . urlencode($token) .  '">Reset Password</a>');
		$this->email->send();
	}

	
	public function index() 
	{
		$this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email is required!']);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Forgot Password';
			$this->load->view('v_forgotpassword', $data);
		} else {
			$email = $this->input->post('email', true);
			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			if($user){
				$token = base64_encode(random_bytes(32));
				$tokens = [
					'token' => $token,
					'user_email' => $email,
					'created_at' => date('Y-m-d'),
				];
				$this->m_user->insertToken($tokens, 'tokens');
				$this->_sendEmail($email, $token);
				$this->session->set_flashdata('message', 'Please, check your E-mail!');
				redirect(base_url('forgotpassword'));
			} else {
				$this->session->set_flashdata('message', 'E-mail not found!');
				redirect(base_url('forgotpassword'));
			}

		}
		

	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		$user = $this->m_user->authentication($email);
		if($user){
			$user_token = $this->m_user->authenticateToken($token);
			if($user_token){
				$this->session->set_userdata('email_reset', $email);
				$this->session->set_userdata('token_reset', $token);
				$this->transferPassword();
			}else{
				$this->session->set_flashdata('message', 'Token not found');
			}
		} else {
			$this->session->set_flashdata('message', 'E-mail not found!');
			redirect(base_url('forgotpassword'));
		}

	}


	public function transferPassword()
	{
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]|matches[password1]');
		$this->form_validation->set_rules('password1', 'password1', 'required|min_length[6]|matches[password]');
		if($this->form_validation->run() == false) {
			$data['title'] = 'Change Password';
			$this->load->view('v_transferpassword', $data);
		} else {
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('email_reset');
			$token = $this->session->userdata('token_reset');
			$data = [
				'email' => $email,
				'password' => $password
			];
			$changes = $this->m_user->transferPassword('user', $data);
			if($changes){
				$this->session->set_flashdata('message', 'Password changes successfully!');
				redirect(base_url('login'));
			} else {
				$this->session->set_flashdata('message', 'Changes password your failed!');
				redirect(''.base_url(). 'forgotpassword/resetpassword?email=' . $email. '&token=' . urlencode($token) .  '');
			}
		}


	}


}