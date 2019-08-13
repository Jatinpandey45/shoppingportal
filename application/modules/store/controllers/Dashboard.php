<?php

/**
 * shopping portal services
 * 
 */

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$isUserLoggedIn = $this->session->userdata('USER_LOGIN');
		if(empty($isUserLoggedIn)) {
			redirect('vendor/home');
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
		$this->session->unset_userdata('USER_LOGIN');
		$this->session->sess_destroy();
		redirect('vendor/home');
	 }
}
