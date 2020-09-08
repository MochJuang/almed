<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$this->load->view('front/templates/header',['header' => 'video']);					
	}

}

/* End of file Video.php */
/* Location: ./application/controllers/front/Video.php */