<?php 
	/**
	*  
	*/
	class Users extends Controller{
		
		function __construct(){
				
		}

		public function register(){
			//Check for POST
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				//process form

			}else{
				//init data
				$data = [
					'name' => '',
					'email' => '',
					'password' => '',
					'confirm_password'=>'',
					'email_error'=>'',
					'password_err'=>'',
					'confirm_password_err'=>''
				];

				//Load view
				$this->view('users/register', $data);
			}
		}
	}
?>