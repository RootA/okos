<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {

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
	public function index()
	{
		$this->load->view('home/base/head');
		$this->load->view('home/base/nav');
		$this->load->view('ads/banner');
		$this->load->view('ads/ad_search');
		$this->load->view('ads/side_cat');
		$this->load->view('ads/all_ads');
		$this->load->view('home/base/footer');
	}

		/*
	*	Add an @see $id to the single_ad function 
	*	thus getting the ad single product file 
	*/
	public function single_ad(){

		$this->load->view('home/base/head');
		$this->load->view('home/base/nav');
		$this->load->view('ads/banner');
		// $this->load->view('ads/');
		$this->load->view('ads/single_ad');
		// $this->load->view('ads/all_ads');
		$this->load->view('home/base/footer');
	}
	
	
}
