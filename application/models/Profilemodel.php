<?php

 class Profilemodel extends CI_model
 {
 	public function __construct()
 	{
    parent::__construct();
    }

    public function getprofile($id)
    {
    	return $this->db->where('user_id', $id)->get('profile')->result();

    }


    public function profile_join_data($id)
   {
    $this->db->select('*');
    $this->db->from('profile');
    $this->db->where('profile.user_id',$id);
    $this->db->join('designation','profile.designation = designation.desig_id');
    $this->db->join('users','profile.user_id = users.user_id','left');
    $this->db->join('learn','profile.user_id = learn.user_id','left');
    $this->db->join('education','profile.user_id = education.user_id','left');
    $this->db->join('skills','profile.user_id = skills.user_id','left');
    
    return $this->db->get()->result();

   }


    public	function FileUpload($data)
    {
    	
		$this->db->insert('profpic',$data);
	}


    public function searchRecord($squery)
    {
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->join('users','users.user_id = profile.user_id','left');
        $this->db->join('designation','profile.designation = designation.desig_id');
        $this->db->join('learn','users.user_id = learn.user_id','left');
        $this->db->join('education','users.user_id = education.user_id','left');
        $this->db->join('skills','users.user_id = skills.user_id','left');
        $this->db->join('employer','users.user_id = employer.user_id','left');
        $this->db->group_by('users.user_id');
        $this->db->like('users.username',$squery);
        $this->db->or_like('users.user_id',$squery);
        $this->db->or_like('profile.first_name',$squery);
        $this->db->or_like('profile.last_name',$squery);
        $this->db->or_like('profile.comm_address',$squery);
        $this->db->or_like('profile.perm_address',$squery);
        $this->db->or_like('profile.mobile',$squery);
        $this->db->or_like('profile.email',$squery);
        $this->db->or_like('designation.desig_name',$squery);
        $this->db->or_like('employer.employer_name',$squery);
        $this->db->or_like('employer.exp_designation',$squery);
        $this->db->or_like('education.degree',$squery);
        $this->db->or_like('education.university',$squery);
        $this->db->or_like('skills.skill_name',$squery);
        $this->db->or_like('skills.skill_level',$squery);
        $this->db->or_like('learn.skills_learn',$squery);
        $this->db->or_like('learn.mode_of_learn',$squery);
        return $this->db->get()->result();
    }




















}