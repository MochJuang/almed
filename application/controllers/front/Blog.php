<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('front/templates/header',['header' => 'blog']);			
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/front/Blog.php */