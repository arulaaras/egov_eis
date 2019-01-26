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




















}