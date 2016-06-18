<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|trim|is_unique[Users.Email]')->set_error_delimiters('<div class="alert alert-danger">','</div>');
		$this->form_validation->set_rules('phone_number','Phone Number','required|trim|is_unique[Users.Phone]');
		$this->form_validation->set_rules('passwd','Password','required|trim');
		$this->form_validation->set_rules('confirm_passwd','Confirm Password','required|trim|matches[passwd]');

		/**
		 * Personal account registration
		 */
		
		if($this->form_validation->run()){
			$this->load->model('auths');
			$results = $this->auths->personal_registration();
			if($results){
				$this->session->sess_destroy();
				redirect('Login');
			}else{
				echo "Not Good";
			}
		}else{

			$this->load->view('home/base/head');
			$this->load->view('home/base/nav');
			$this->load->view('login/register');
			$this->load->view('login/footer');
		}
		
	}

	
}
