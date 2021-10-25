<?php

class Login extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	function index()
	{
		$data['judul'] = "Form Login";
		$this->load->view('login', $data);

		$inputan = $this->input->post();
		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi login_user
			$hasil = $this->Login_model->login_user($inputan);

			//jika return login_user == sukses
			if($hasil == 'sukses')
			{
				$this->load->controllers('Dashboard');
				
			}
			else
			{
				redirect();
			}
		}
	}

	function logout()
	{
		//menghancurkan session user yang dibuat ketika login
		$this->session->unset_userdata("user");
		redirect();
	}
}

?>
