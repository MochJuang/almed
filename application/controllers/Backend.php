<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function index()
	{
		redirect('back/home','refresh');		
	}

}

/* End of file Backend.php */
/* Location: ./application/controllers/Backend.php */