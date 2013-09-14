<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resources extends CI_Controller
{
	public function index()
	{
            $this->load->view('header/header');
            $this->load->view('resources');
            $this->load->view('footer/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */