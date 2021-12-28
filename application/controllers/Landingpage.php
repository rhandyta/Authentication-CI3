<?php 

class Landingpage extends CI_Controller {
		
	public function index()
	{
		$data['title'] = 'Landing Page';
		$this->load->view('v_landingpage', $data);
	}
}	
