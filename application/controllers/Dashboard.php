<?php 

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('name')) {
			$data['title'] = 'Dashboard';
			$this->load->view('templates/header', $data);
			$this->load->view('v_dashboard', $data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Failed!,</strong> Login first!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect(base_url('login'));
		}
		
	}

}