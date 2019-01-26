<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->model('UserModel','userm');
    $this->load->model('Profilemodel','prof');
    $this->load->model('Portalmodel','port');
  	}


	public function index()
	{
		$this->load->view('template/header',['title'=>'Home']);
		$this->load->view('template/navg');
		$this->load->view('portal/home');
		$this->load->view('template/footer1');
	}
	public function about()
	{
		$this->load->view('portal/aboutus');
	}
	public function department()
	{
		$this->load->view('portal/dept');
	}
	public function dcssa()
	{
		$this->load->view('portal/dcsas');
	}
	public function semt()
	{
		//$user_role = $this->session->userdata('');
		//$userid=1;
		$semtdata['users'] = $this->port->semt_data();
		//print_r($semtdata);
		$this->load->view('portal/semt',$semtdata);
	}
	public function administration()
	{
		$this->load->view('portal/finadmin');
	}
	public function ases()
	{
		$this->load->view('portal/ases');
	}
	public function contact()
	{
		$this->load->view('portal/contact');
	}
	public function viewprofile($vdata)
	{
		
		$viewdata['employer'] = $this->port->getEmpById($vdata);
		$viewdata['profile'] = $this->port->getUserById($vdata);
		//print_r($viewdata);
		$this->load->view('portal/viewprofile',$viewdata);
	}
	public function login()
	{
		$this->load->view('portal/login');
	}

}
