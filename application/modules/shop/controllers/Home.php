<?php

/**
 * shopping portal services
 * 
 */

class Home extends MY_Controller {


	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('product/index');
		$this->load->view('includes/footer');
	}


}
