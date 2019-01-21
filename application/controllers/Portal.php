<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

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
		$this->load->view('portal/semt');
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
	public function viewprofile()
	{
		$this->load->view('portal/viewprofile');
	}
	public function login()
	{
		$this->load->view('portal/login');
	}

}
