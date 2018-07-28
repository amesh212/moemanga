<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kagawalife extends CI_Controller {

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
		
		
	}

	public function index()
	{
		$this->load->view('app/login/login');
	}

	public function login()
	{
		$this->load->view('app/login/login');
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
	
	public function proses()
	{

		$email = $_POST['email'];
		$password = $_POST['password'];
		// $url = $_POST['url'];
		
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		
		$query = $this->db->get('user');

		$row = $query->row();

		if (isset($row)) {
			$setsession = array(
				'id' => $row->id,
				'email' => $email,
				'name' => $row->name,
				'password' => $row->password,
				'id_role' => $row->id_role
			);
			$this->session->set_userdata($setsession);
			

			if ($row->id_role==1) {
				redirect(base_url()."app");
			}else{
			redirect(base_url());
			}
		} else {
			redirect(base_url().'kagawalife/login?login=fail');
		}
	}

	
}
