<?php

class admin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		if(!$this->session->userdata('username')){

			//jika username kosong kembalikan ke log in
			redirect('auth');
		} else {
			$this->dashboard();
		}
	}

	public function dashboard()
	{
		$this->load->view('lumut/admin/asset/header');
		$this->load->view('lumut/admin/dashboard');
		$this->load->view('lumut/admin/asset/footer');
	}

	public function akun()
	{
		#$data = $this->auth_model->get_user($user);

		$this->load->view('lumut/admin/asset/header');
		$this->load->view('lumut/admin/akun', $user);
		$this->load->view('lumut/admin/asset/footer');
	}

	public function post()
	{
		echo "post";
	}

	public function log_out()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');

		redirect('auth');
	}
}