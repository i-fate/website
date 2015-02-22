<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->load->view('_default/header');
		$this->load->view('about/index_default');
		$this->load->view('_default/footer');
	}

    
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */