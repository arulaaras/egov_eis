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
		$this->form_validation->set_error_delimiters('', '');
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
				$logstatus = $this->userm->set_log_status($username);
				redirect(base_url().'Dashboard/home');
			}
			else
			{
				$logerror['logerror'] = "Invalid Username or Password";
				$this->load->view('portal/login', $logerror);
		    }
		}
		else
		{
		    $this->load->view('portal/login');
		}

	}



	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url().'portal/index');
	}

}
