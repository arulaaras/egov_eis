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

       // $query = $this->db->select('*')->from('admin')->where(['adminid'=>$id])->get();
        //return $query->row();
    }
    public function getEmpById($id)
        
    {
        $this->db->select('*');
        $this->db->from('employer');
        $this->db->WHERE('user_id',$id);
        //$this->db->join('learn','profile.user_id = learn.user_id','left');
        //$this->db->join('education','profile.user_id = education.user_id','left');
        //$this->db->join('skills','profile.user_id = skills.user_id','left');
        //$this->db->join('employer','users.user_id = employer.user_id');
        return $this->db->get()->result();
    }
        








}