<?php

class auth extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('lumut/auth/asset/header');
		$this->load->view('lumut/auth/log_in');
		$this->load->view('lumut/auth/asset/footer');
	}

	public function login_admin()
	{
		$validation = $this->form_validation;

		$validation->set_rules('username', 'Username', 'trim|required');
        $validation->set_rules('password', 'Password', 'trim|required');

		if($validation->run()== FALSE){
			$this->load->view('lumut/asset/header');
			$this->load->view('lumut/auth/log_in');
			$this->load->view('lumut/asset/footer');
		}else{
			$this->_login();
		}
	}

	private function _login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$data = $this->auth_model->get_user($user);

		if($data){

			if($data[0]['password'] == $pass){

				$data = [
					'name' => $data[0]['name'],
					'username' => $data[0]['username']
				];

				$this->session->set_userdata($data);

				redirect('admin');
			}
		}else{
			echo "tidak ada";
		}
	}
}