<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			$this->load->view('Users/login_view');
			//redirect('login_view');
		}
	}

	function index()
	{
		echo 'Welcome User';
		echo '<p align="center"><a href="'.base_url().'Private_area/logout">Logout</a></p>';
	}

	function logout()
	{
		$data = $this->session->all_userdata();
		foreach ($data as $row => $rows_value) {
			$this->session->unset_userdata($row);
		}
		//redirect('login_view');
		$this->load->view('Users/login_view');
	}
}

?>