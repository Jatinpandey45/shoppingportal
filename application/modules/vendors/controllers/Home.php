<?php

/**
 * shopping portal services
 * 
 */

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$isUserLoggedIn = $this->session->userdata('USER_LOGIN');

		if(!empty($isUserLoggedIn)) {
			redirect('vendors/dashboard');
		}
		
	}


	public function index()
	{	

		$post = $this->input->post();

		if(!empty($post)) {

			$config = array(

				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Please enter your %s.',
					),
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Please enter your %s.'
					),
				)
			);
	
			$this->form_validation->set_rules($config);
	
	
			if($this->form_validation->run() === True) {
				
				$this->load->model('user_model');
			
				$email      = $this->input->post('email');
				$password   = $this->input->post('password');
				
				$checkUserNamePassword = $this->user_model->getUser($email,hash('sha256',$password)); 
				
				if(empty($checkUserNamePassword)) {
					$this->session->set_flashdata('INVALID_LOGIN_ATTEMPT','Your email or password is wrong. Try forgot password to recover your password');
					redirect('/vendors/home');
				}

				#set user session for login
				$loginPyload = [
					'is_logged_in' => true,
					'userinfo' => $checkUserNamePassword
				];
				$this->session->set_userdata('USER_LOGIN',$loginPyload);
				redirect('vendors/dashboard');

			}

		}

		$this->load->view('login/index');
	}

	

	
}
