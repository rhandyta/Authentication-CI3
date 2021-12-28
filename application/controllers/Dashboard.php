<?php 

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('name')) {
			$data['title'] = 'Dashboard';
			$this->load->view('v_dashboard', $data);
		} else {
			$this->session->set_flashdata('message', 'Login first!');
			redirect(base_url('login'));
		}
		
	}

}