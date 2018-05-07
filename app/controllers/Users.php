<?php 
	/**
	*  
	*/
	class Users extends Controller{
		
		function __construct(){
			$userModel = $this->model('User');
		}

		public function register(){
			//Check for POST
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				//process form

				//Sanitize POST data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				//Init data
				$data = [
					'name' => trim($_POST['name']),
					'email' => trim($_POST['email']),
					'password' => trim($_POST['password']),
					'confirm_password' => trim($_POST['confirm_password']),
					'name_err' => '',
					'email_error'=>'',
					'password_err'=>'',
					'confirm_password_err'=>''

				];

				//Validate email
				if(empty($data['email'])){
					$data['email_err'] = 'Please enter email';
				}

				//Validate name
				if(empty($data['name'])){
					$data['name_err'] = 'Please enter name';
				}

				//Validate password
				if(empty($data['password'])){
					$data['password_err'] = 'Please enter password';
				}elseif(strlen($data['password'])<8){
					$data['password_err'] = 'your password must be more than 8 characters';
				}

				//Validate password
				if(empty($data['confirm_password'])){
					$data['confirm_password_err'] = 'Please enter Confirmation password';
				}else{
					if($data['password'] !== $data['confirm_password']){
						$data['confirm_password_err'] = 'Passwords do not match';
					}
				}

				//Make sure errors are empty
				if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
					//Validated
					die('SUCCESS');
				}else{
					$this->view('users/register', $data);
				}

			}else{
				//init data
				$data = [
					'name' => '',
					'email' => '',
					'password' => '',
					'confirm_password'=>'',
					'name_err' => '',
					'email_error'=>'',
					'password_err'=>'',
					'confirm_password_err'=>''
				];

				//Load view
				$this->view('users/register', $data);
			}
		}

		public function login(){
			//Check for POST
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				//process form

				//Sanitize POST data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				//Init data
				$data = [
					'email' => trim($_POST['email']),
					'password' => trim($_POST['password']),
					'email_err' => '',
					'password_err' => ''
				];

				//Validate email
				if(empty($data['email'])){
					$data['email_err'] = 'Please enter email';
				}

				//Validate password
				if(empty($data['password'])){
					$data['password_err'] = 'Please enter password';
				}

				//Make sure errors are empty
				//Make sure errors are empty
				if(empty($data['email_err']) && empty($data['password_err'])){
					//Validated
					die('SUCCESS');
				}else{
					$this->view('users/login', $data);
				}

			}else{
				//init data
				$data = [
					'email' => '',
					'password' => '',
					'email_error'=>'',
					'password_err'=>''
				];

				//Load view
				$this->view('users/login', $data);
			}
		}
	}
?>