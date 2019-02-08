<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->model('Usermodel','userm');
    $this->load->model('Profilemodel','prof');
    $this->load->model('Portalmodel','port');
    $this->load->model('Editmodel','edit');
    $this->load->library('upload');
  	}

	public function home()
	{
		$username = $this->session->userdata('username');
		$result = $this->userm->user_data($username);
      if($result!=false)
       {
              $this->session->set_userdata('user_id',$result[0]->user_id);
              $this->session->set_userdata('user_role',$result[0]->user_role);
              $this->session->set_userdata('log_status',$result[0]->log_status);
              $this->confirm_old_password();
       }        
          
		//if($this->session->userdata('username')!='')
		//{
			
		//}
		
	}


	public function userpage()
	{
     $user_id = $this->session->userdata('user_id');
     $profdata['users']= $this->session->all_userdata();
     $profdata['profile'] = $this->port->getUserById($user_id);
     $profdata['education'] = $this->port->getEduById($user_id);
    $profdata['learn'] = $this->port->getLearnById($user_id);
    $profdata['employer'] = $this->port->getEmpById($user_id);
    $profdata['skills'] = $this->port->getSkillsById($user_id);
    if($user_id == 1)
     {
       //print_r($profdata);
       $this->load->view('dashboard/admindashboard',$profdata);
     }
     else
     {
        //print_r($profdata);
       $this->load->view('dashboard/userdashboard',$profdata);
     }
     
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



  	public function modifyprofile()
	{
		 $user_id = $this->session->userdata('user_id');
     $edata['designation'] = $this->userm->getDesig();
     $edata['profile']= $this->userm->myjoin($user_id);
     $this->load->view('dashboard/updateprofile',$edata);
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


    public function insert_profile()
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
                  'dob'=>date("Y-m-d",strtotime($this->input->post('dob'))),
                  'age'=>$this->input->post('age'),
                  'comm_address'=>$this->input->post('comm_address'),
                  'perm_address'=>$this->input->post('perm_address'),
                  'mobile'=>$this->input->post('mobile'),
                  'email'=>$this->input->post('email'),
                  'gender'=>$this->input->post('gender'),
                  'marital'=>$this->input->post('marital'),
                  'organization'=>$this->input->post('organization'),
                  'designation'=>$this->input->post('designation'),
                  'join_date'=>$this->input->post('join_date')
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
             
            $this->editprofile();
              
          }
     } 
     

    }



    public function update_profile()
    {
      $user_id = $this->session->userdata('user_id');
      $data = $this->userm->check_data($user_id);
      if($data == true)
      {
        $update_data = array(
                  'user_id'=>$user_id,
                  'salutation' =>$this->input->post('salutation'),
                  'first_name'=>$this->input->post('first_name'),
                  'last_name'=>$this->input->post('last_name'),
                  'dob'=>date("Y-m-d",strtotime($this->input->post('dob'))),
                  'age'=>$this->input->post('age'),
                  'comm_address'=>$this->input->post('comm_address'),
                  'perm_address'=>$this->input->post('perm_address'),
                  'mobile'=>$this->input->post('mobile'),
                  'email'=>$this->input->post('email'),
                  'gender'=>$this->input->post('gender'),
                  'marital'=>$this->input->post('marital'),
                  'organization'=>$this->input->post('organization'),
                  'designation'=>$this->input->post('designation'),
                  'join_date'=>$this->input->post('join_date')
                  );
        $up = $this->userm->update_prof($update_data);
        if($up==true)
        {
          redirect('dashboard/userpage');          
        }
        else
        {
          echo "values not inserted properly";
          //$this->editprofile();
        }
      }
      else
      {
        print_r($user_id);
      }
    }


    public function update_picture()
    {
       // $username = 'asye5';
        $user_id = $this->session->userdata('user_id');
        $config['upload_path']   = './assets/profilepic/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;
        $config['max_size']             = 1024;
        $config['max_width']            = 320;
        $config['max_height']           = 280;
        $config['file_ext']           = 'jpg';
        $config['file_name'] = $user_id;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile'))
               {
                        $error = array('error' => $this->upload->display_errors());
                        echo "upload failed";
                        print_r($error);

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                       // echo "upload success";
                        //print_r($data);
                         redirect('dashboard/userpage','refresh');
                }
                    
        
    }


    public function view_employees()
    {

      

      $vdata['users']= $this->port->get_all_users();
      //print_r($vdata);
      $this->load->view('dashboard/viewemployees', $vdata);
    }



    public function search()
    {
      $this->form_validation->set_rules('query', 'Query','required');
      $this->form_validation->set_error_delimiters('<div class="purple-text">','</div>');
      if($this->form_validation->run())
      {
        $query = $this->input->post('query');
        $record['profile'] = $this->prof->searchRecord($query);
        $this->load->view('dashboard/searchuser',$record);
      }
      else
      {
        echo validation_errors();
      }

    }




   // public function editedu($eduedit)
   // {
    //  $edudata = $this->edit->get_edu_edit($eduedit);
    //  $this->load->view('dashboard/editedu', $edudata);
   // }

    
    
    

    














}
