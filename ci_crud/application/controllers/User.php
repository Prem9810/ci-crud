<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('User_model','user');
	}



	public function register()
	{ 

		if( isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']== 'POST'){
			$json = [];
			$json['error'] = 0 ;
			 $this->form_validation->set_rules('username', 'Username', 'required');
			 $this->form_validation->set_rules('password', 'Password', 'required');
			 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			 $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
			 $this->form_validation->set_rules('agree', 'Agree', 'required');
	 
			
	 
			 if ($this->form_validation->run() == FALSE)
			 {
				 $json['error'] = 1 ;
				 $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>'); 
				 $json['error_message'] = [
					 "username" => form_error('username'),
					 "password" => form_error('password'),
					 "email" => form_error('email'),
					 "confirm_password" => form_error('confirm_password'),	
					 "agree" => form_error('agree'),			
	 
				 ];
			 
				
					 
			 }
			 else
			 {				
				 $data = array(
					 'username' => $this->input->post('username'),
					 'email' => $this->input->post('email'),
					 'password' => $this->input->post('password'),				
				 );
				  $this->user->register($data);
				
			 }
			 print_r(json_encode($json));
		}else{
			$this->load->view('common/header');
			$this->load->view('user/register');
			$this->load->view('common/footer');
		}

		
		
      
	}

	public function login()
	{ 

		if( isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD']== 'POST'){

			
			$json = [];
			$json['error'] = 0 ;

			 $this->form_validation->set_rules('password', 'Password', 'required');
			 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			
	 
			 $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>'); 
	 
			 if ($this->form_validation->run() == FALSE)
			 {
				 $json['error'] = 1 ;
				 $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>'); 
				 $json['error_message'] = [					
					 "password" => form_error('password'),
					 "email" => form_error('email'),							
	 
				 ];
			 
				
					 
			 }
			 else
			 {				
				 $data = array(				
					 'email' => $this->input->post('email'),
					 'password' => $this->input->post('password'),				
				 );
				 $checkUser = $this->user->checkUser($data);
				 $checkUserPassword = $this->user->checkUserPassword($data);


				 if(!$checkUser){
					$json['error'] = 1 ;
					$json['error_message'] = [					
						"message" => "<p class='text-danger'>User not exists. Please register first.</p>"	
					];
				 }else{
					if($checkUserPassword){
						$json['error'] = 0 ;
						$json['success_message'] = [					
							"message" => "<p class='text-success'>You logged in successfully !</p>"	
						];

						$userdata = array(
							'username'  => $checkUserPassword['username'],
							'email'     => $checkUserPassword['email'],
							'logged_in' => TRUE
					   );
					
					$this->session->set_userdata($userdata);					
					 }else{
						$json['error'] = 1 ;
						$json['error_message'] = [					
							"message" => "<p class='text-danger'>Username or password miss-match!</p>"		
						];
					 }
				 }
				
				
			 }
			 print_r(json_encode($json));
		}else{
			$this->load->view('common/header');
			$this->load->view('user/login');
			$this->load->view('common/footer');
		}

		
		
      
	}
}