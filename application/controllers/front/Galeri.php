<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$this->load->view('front/templates/header',['header' => 'galeri']);		
		$this->load->view('front/galeri');					
	}

}

/* End of file Galeri.php */
/* Location: ./application/controllers/front/Galeri.php */