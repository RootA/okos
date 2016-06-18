<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * This controller is resposible for the usability after login

	 */

	/* index is to pass and 
	*/
	public function index()
	{
		$this->load->view('user/base/head');
		$this->load->view('user/base/nav');
		$this->load->view('user/base/banner');
		$this->load->view('user/categories');
		$this->load->view('user/trending');
		$this->load->view('user/dir');
		$this->load->view('user/base/footer');
	}


	public function profile(){
		$this->load->view('user/base/uhead');
		$this->load->view('user/base/nav');
		$this->load->view('user/base/banner');
		$this->load->view('user/profile');
		$this->load->view('user/base/footer');
	}
}
