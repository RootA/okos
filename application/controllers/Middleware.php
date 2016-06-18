<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middleware extends CI_Controller {

	/**
	 * this is the ui demo controller
	 * you are to take examples from here
	 */
	public function categories($id)
	{
		$id = $this->encrypt->decode($id);
		switch ($id){
			case 1 : $id = '1';
				redirect('Mobile');
				break;
			case 2 : $id = '2';
				redirect('electronics');
				break;
			case 3 : $id = '3';
				redirect('Cars');
				break;
			case 4 : $id = '4';
				redirect('Furniture');
				break;
			case 5 : $id = '5';
				redirect('Pets');
				break;
			case 6 : $id = '6';
				redirect('Books');
				break;
			case 7 : $id = '7';
				redirect('Fashion');
				break;
			case 8 : $id = '8';
				redirect('Kids');
				break;
			case 9 : $id = '9';
				redirect('Services');
				break;
			case 10 : $id = '10';
				redirect('Jobs');
				break;
			case 11 : $id = '11';
				redirect('Realestate');
				break;
			default : $id = '12';
				redirect('/');
				break;
		}
	}
}
