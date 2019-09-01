<?php

/**
 * shopping portal services
 * 
 */

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$isUserLoggedIn = $this->session->userdata('ADMIN_LOGIN');
		if(empty($isUserLoggedIn)) {
			redirect('vcmadmin/home');
		}

		
	}

	public function index()
	{
		$this->load->view('dashboard/index');		
	}


	/**
	 * logout
	 * let user to log out from system
	 */

   
	 public function logout()
	 {
		$this->session->unset_userdata('ADMIN_LOGIN');
		$this->session->sess_destroy();
		redirect('vcmadmin/home');
	 }
}
