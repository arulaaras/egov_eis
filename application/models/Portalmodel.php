<?php

 class Portalmodel extends CI_model
 {
 	public function __construct()
 	{
    parent::__construct();
    }

    public function semt_data()
    {
       //$a = 6;
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->WHERE('users.user_group',"SE");
        $this->db->join('users','profile.user_id = users.user_id','left');
        $this->db->join('designation','profile.designation = designation.desig_id','left');
        return $this->db->get()->result();
       
    }

    public function getUserById($id)
    {
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->WHERE('users.user_id',$id);
        $this->db->join('users','profile.user_id = users.user_id','left');
        $this->db->join('designation','profile.designation = designation.desig_id','left');
        return $this->db->get()->result();
    }
    public function getEmpById($id)
        
    {
        $this->db->select('*');
        $this->db->from('employer');
        $this->db->WHERE('user_id',$id);
        return $this->db->get()->result();
    }

    public function getSkillsById($id)
        
    {
        $this->db->select('*');
        $this->db->from('skills');
        $this->db->WHERE('user_id',$id);
        return $this->db->get()->result();
    }


    public function getEduById($id)
        
    {
        $this->db->select('*');
        $this->db->from('education');
        $this->db->WHERE('user_id',$id);
        return $this->db->get()->result();
    }

    public function getLearnById($id)
        
    {
        $this->db->select('*');
        $this->db->from('learn');
        $this->db->WHERE('user_id',$id);
        return $this->db->get()->result();
    }
        
    public function get_all_users()
    {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->order_by("users.user_id", "asc");
      $this->db->join('profile','users.user_id = profile.user_id','left');
      $this->db->join('designation','profile.designation = designation.desig_id','left');
      return $this->db->get()->result();
    }








}