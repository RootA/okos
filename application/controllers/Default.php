<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Defau extends CI_Controller {

	/**
	 * this is the ui demo controller
	 * you are to take examples from here
	 */
	public function index()
	{
		$this->load->view('example/basics/header');
		$this->load->view('example/basics/side_menu');
		$this->load->view('example/basics/top_navigation');
		$this->load->view('example/stats');
//		$this->load->view('example/sales_page',$data);
		$this->load->view('example/basics/footer');
	}
}
