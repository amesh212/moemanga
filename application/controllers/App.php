<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		if (isset($_SESSION['id'])) {
			
			if ($_SESSION['id_role']==2) {
				redirect(base_url().'app/login');
			}
			
		} else {
			redirect(base_url());
		}
		
	}

	public function index()
	{
		
		$this->load->view('app/main/head');
		$this->load->view('app/main/navbar');
		$this->load->view('app/main/sidebar');	
		$this->load->view('app/dashboard/dashboard');
		$this->load->view('app/main/foot');
	}

	public function manga()
	{
		$this->load->view('app/main/head');
		$this->load->view('app/main/navbar');
		$this->load->view('app/main/sidebar');	
		$this->load->view('app/manga/manga');
		$this->load->view('app/main/foot');
	}	
	
	public function test()
	{
		$this->load->view('test');
	}
}
