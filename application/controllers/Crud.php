<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Usermodel','userm');
    $this->load->model('Profilemodel','prof');
    $this->load->model('Portalmodel','port');
    $this->load->model('Editmodel','edit');
    $this->load->library('upload');
  	}
	
	public function addeducation()
	{
		$user_id = $this->session->userdata('user_id');
		$edudata = array(
			'user_id' => $user_id,
			'degree' => $this->input->post('degree') ,
			'type' => $this->input->post('type') ,
			'university' => $this->input->post('university') 
			 );
		$result = $this->edit->addeducation($edudata);
		if($result == true)
	      {
	        redirect('dashboard/userpage');
	      }
	      else
	      {
	        echo "values not inserted properly";
	      }
     }


     public function update_edu()
    {
      $user_id = $this->session->userdata('user_id');
      $update_edu_data = array(
                  'edu_id'=>$this->input->post('edu_id'),
                  'degree' =>$this->input->post('degree'),
                  'type' =>$this->input->post('type'),
                  'university'=>$this->input->post('university'),
                  
                  );
     $this->edit->update_edu($update_edu_data);
      redirect('dashboard/userpage','refresh');
      
    }


    public function deleteedu($eduedit)
    {
      $this->edit->deleteedu($eduedit);
      redirect('dashboard/userpage');
    }


    public function addemployer()
	{
		$user_id = $this->session->userdata('user_id');
		$empdata = array(
				'user_id' => $user_id,
				'employer_name' => $this->input->post('employer_name'),
	          	'exp_designation' => $this->input->post('exp_designation'),
	          	'emp_from'=>  $this->input->post('emp_from'),
	          	'emp_to'=>  $this->input->post('emp_to'),
	          	'emp_exp'=> $this->input->post('emp_exp') 
			 );
		//print_r($empdata);
		$result = $this->edit->addemployer($empdata);
		if($result == true)
	      {
	        redirect('dashboard/userpage');
	      }
	     else
	     {
	       echo "values not inserted properly";
	     }
     }





    public function update_emp()
    {
      $user_id = $this->session->userdata('user_id');
      $update_emp_data = array(
                  'id'=>$this->input->post('id'),
                  'employer_name' => $this->input->post('employer_name'),
                  'exp_designation' => $this->input->post('exp_designation'),
                 'emp_from'=>  $this->input->post('emp_from'),
	          	'emp_to'=>  $this->input->post('emp_to'),
                  'emp_exp'=> $this->input->post('emp_exp')
                  
                  );
     // print_r($update_emp_data);
      $this->edit->update_emp($update_emp_data);
      redirect('dashboard/userpage');
      
    }

     public function deleteemp($eduedit)
    {
      $this->edit->deleteemp($eduedit);
      redirect('dashboard/userpage');
    }




     public function addskill()
	{
		$user_id = $this->session->userdata('user_id');
		$skldata = array(
				'user_id' => $user_id,
				'skill_name' => $this->input->post('skill_name'),
	          	'skill_level' => $this->input->post('skill_level')
	           );
		//print_r($empdata);
		$result = $this->edit->addskill($skldata);
		if($result == true)
	      {
	        redirect('dashboard/userpage');
	      }
	     else
	     {
	       echo "values not inserted properly";
	     }
     }





    public function update_skl()
    {
      $user_id = $this->session->userdata('user_id');
      $update_skl_data = array(
                  'id'=>$this->input->post('id'),
                 	'skill_name' => $this->input->post('skill_name'),
	          		'skill_level' => $this->input->post('skill_level')
                   );
     // print_r($update_emp_data);
      $this->edit->update_skl($update_skl_data);
      redirect('dashboard/userpage');
      
    }

     public function deleteskl($eduedit)
    {
      $this->edit->deleteskl($eduedit);
      redirect('dashboard/userpage');
    }


     public function addlearn()
	{
		$user_id = $this->session->userdata('user_id');
		$ldata = array(
				'user_id' => $user_id,
				'skills_learn' => $this->input->post('skills_learn'),
	          	'mode_of_learn' => $this->input->post('mode_of_learn')
	           );
		//print_r($empdata);
		$result = $this->edit->addlearn($ldata);
		if($result == true)
	      {
	        redirect('dashboard/userpage');
	      }
	     else
	     {
	       echo "values not inserted properly";
	     }
     }





    public function update_learn()
    {
      $user_id = $this->session->userdata('user_id');
      $update_learn_data = array(
                  	'id'=>$this->input->post('id'),
                 	'skills_learn' => $this->input->post('skills_learn'),
	          		'mode_of_learn' => $this->input->post('mode_of_learn')
                   );
     // print_r($update_emp_data);
      $this->edit->update_learn($update_learn_data);
      redirect('dashboard/userpage');
      
    }

     public function deletelearn($ledit)
    {
      $this->edit->deletelearn($ledit);
      redirect('dashboard/userpage');
    }








}
