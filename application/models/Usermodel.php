<?php

 class Usermodel extends CI_model
 {
 	public function __construct()
 	{
    parent::__construct();
    }

    public function can_login($username,$password)
    {
    	$this->db->where('username', $username);
    	$this->db->where('password', $password);
    	$query = $this->db->get('users');

    	if($query->num_rows() > 0)
    	{

    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }


    public function user_data($username)
    {
	    $this->db->select('*');
    	$this->db->from('users');
   	 	$this->db->where('username',$username);
    		$r =$this->db->get();
    		if($r->num_rows()==1)
        {
          return $r->result();
        }
      	else
        {
          return false;
        }
    }



     public function old_password($id)
    {
       
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('user_id',$id);
      $this->db->where('default_pass',0);
      $query =$this->db->get();
      if($query->num_rows()==1)
      {
        return true;
      }
      else
      {
       return false;
      }
      
    }



    public function update_old_password($data)
    {
        $this->db->set('password',$data['password']);
        $this->db->set('default_pass',$data['default_pass']);
        $this->db->where('user_id',$data['user_id']);
        $this->db->update('users');
        if($this->db->affected_rows()==1)
        {
          return true;
        }
       else
        {
         return false;
        }
    }


    public function check_data($id)
    {
      $this->db->select('*');
      $this->db->from('profile');
      $this->db->where('user_id',$id);
      $content =$this->db->get();
      if($content->num_rows()==1)
      {
        return true;
      }
      else
      {
       return false;
      }
    }



    public function getDesig()
    {
      return $this->db->get('designation')->result();
    }
  

    
      public function insert($data)
    {
       $query = $this->db->insert('profile',$data);
      
       return $query;
    }
  

   public function myjoin($id)
   {
    $this->db->select('*');
    $this->db->from('profile');
    $this->db->where('user_id',$id);
    $this->db->join('designation','profile.designation = designation.desig_id');
    return $this->db->get()->result();

   }
   

   public function update_prof($rdata)
    {
        return $this->db->where(['user_id'=>$rdata['user_id']])->update('profile',$rdata);
    }


    public function set_log_status($luser)
    {
        $this->db->set('log_status',1);
        $this->db->where('username',$luser);
        $this->db->update('users');
    }

    public function set_logout_status($luser)
    {
        $this->db->set('log_status',0);
        $this->db->where('username',$luser);
        $this->db->update('users');
    }


























 }