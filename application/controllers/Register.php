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
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]', [
			'required' => 'Password is required!'
		]);
		$this->form_validation->set_rules('password1', 'password1', 'required|min_length[6]', [
			'required' => 'Confirm Password is required!'
		]);
	}

	public function index()
	{
		$data['title'] = 'Registration Page';
		$this->load->view('v_register', $data);
	}

	public function registration()
	{
		$this->_rules();
		if( $this->form_validation->run() == false ){
			$this->session->set_flashdata('message', '<p> Gagal! </p>');
			$this->index();
		} else {
			$email = $this->input->post('email', true);
			$name = $this->input->post('name', true);
			$password = $this->input->post('password', true);
			$password1 = $this->input->post('password1', true);
			$image = $_FILES['image'];
			if($password == $password1){
				if($image = '') {
					$this->index();
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
			$this->session->set_flashdata('message', '<p> Berhasil! </p>');
			redirect('register');
			}
		}

	}

}