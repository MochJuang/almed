<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		$this->load->view('front/templates/header',['header' => 'jadwal']);					
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/front/Jadwal.php */