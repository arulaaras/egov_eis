<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->model('UserModel','userm');
  	}

	public function home()
	{
		$username = $this->session->userdata('username');
		$result = $this->userm->user_data($username);
      if($result!=false)
       {
              $this->session->set_userdata('user_id',$result[0]->user_id);
              $this->session->set_userdata('user_role',$result[0]->user_role);
              $this->confirm_old_password();
       }        
          
		//if($this->session->userdata('username')!='')
		//{
			
		//}
		
	}


	public function userpage()
	{
		$this->load->view('dashboard/header2',['title'=>'Dashboard']);
			$this->load->view('dashboard/navg2');
			$this->load->view('dashboard/userdashboard');
			$this->load->view('template/footer2');
	}

	private function confirm_old_password()
	{
    	$user_id = $this->session->userdata('user_id');
    	$data = $this->userm->old_password($user_id);
    	if($data == false)
    	{
      	 $this->check_user_data();
    	}
    	else
    	{
     	    redirect('dashboard/changepassword');
    	}
    
  	}



  	public function editprofile()
	{
		
		$this->load->view('dashboard/editprofile');
		
	}




	public function changepassword()
	{
	      $this->form_validation->set_rules('cpassword','Old Password','required|trim');
        $this->form_validation->set_rules('npassword1','New Password','required|trim');
        $this->form_validation->set_rules('npassword2','Confirm Password','required|matches[npassword1]|trim');
        if($this->form_validation->run()==FALSE)
        {
          $this->load->view('dashboard/changepass');
        }
        else
        {
          $data=array(
            'user_id'=>$this->session->userdata('user_id'),
            'password'=>$this->input->post('npassword2'),
            'default_pass'=>TRUE
          );

          $result = $this->userm->update_old_password($data);
          if($result==true)
              {
                  $this->check_user_data();
               }
          else
              {
                  redirect('dashboard/changepass');
              }
          }
          
    }




    public function check_user_data()
    {
      $user_id = $this->session->userdata('user_id');
      $data = $this->userm->check_data($user_id);
      if($data == false)
      {
        $data['designation'] = $this->userm->getDesig();
        $this->load->view('dashboard/editprofile', $data);
      }
      else
      {
        redirect('dashboard/userpage');
      }
    }


    public function update_profile()
    {
      if(!$this->session->userdata('username'))
      {
        redirect('portal/login');
      }
     else
     {
          $user_id = $this->session->userdata('user_id');
          $data = $this->userm->check_data($user_id);
          if($data == false)
          {
                  $profile_data = array(
                  'user_id'=>$user_id,
                  'salutation' =>$this->input->post('salutation'),
                  'first_name'=>$this->input->post('first_name'),
                  'last_name'=>$this->input->post('last_name'),
                  'dob'=>$this->input->post('dob'),
                  'age'=>$this->input->post('age'),
                  'comm_address'=>$this->input->post('comm_address'),
                  'perm_address'=>$this->input->post('perm_address'),
                  'mobile'=>$this->input->post('mobile'),
                  'email'=>$this->input->post('email'),
                  'gender'=>$this->input->post('gender'),
                  'marital'=>$this->input->post('marital'),
                  'organization' => $this->input->post('organization'),
                  'designation'=>$this->input->post('designation'),
                  'join_date' => $this->input->post('join_date')
                  );

                  $q = $this->userm->insert($profile_data);
                  if($q==true)
                  {
                    redirect('dashboard/userpage');
                  }
                  else
                  {
                    echo "values not inserted properly";
                  }

          }
          else
          {
             echo "update values";
          }
     } 
     

    }
















}
