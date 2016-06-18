<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model("categories");
		$results = $this->categories->all_categories();
		$data["categories"] = $results['rows'];
		
		$this->load->view('home/base/head');
		$this->load->view('home/base/nav');
		$this->load->view('home/base/banner');
		$this->load->view('home/categories',$data);
		$this->load->view('home/trending');
		$this->load->view('home/dir');
		$this->load->view('home/base/footer');
	}

	public function post_ad(){
		$this->load->view('home/base/head');
		$this->load->view('home/base/nav');
		$this->load->view('home/base/banner');
		$this->load->view('ads/post_ad');
		$this->load->view('home/base/footer');
	}
}
