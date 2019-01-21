<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('UserModel','userm');
  	}
	
	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()!=FALSE)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($this->userm->can_login($username,$password))
			{
				$session_data = array(
					'username' => $username,
					'password' => $password,
				);

				$this->session->set_userdata($session_data);
				redirect(base_url().'Dashboard/home');
			}
			else
			{
				echo "<script>
						alert('Invalid Username and Password');
							window.location.href='".base_url()."portal/login';
					</script>";
		    }
		}
		else
		{
		    echo "<script>
						alert('Kindly fill all the fields');
							window.location.href='".base_url()."portal/login';
					</script>";
		}

	}



	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url().'portal/index');
	}

}
