<?php

 class Editmodel extends CI_model
 {
 	public function __construct()
 	{
    parent::__construct();
    }

    

    public function get_edu_edit($eduedit)
    {
        $query = $this->db->select('*')->from('education')->where(['edu_id'=>$eduedit])->get();
        return $query->row();
    }

    public function update_edu($rdata)
    {
        $this->db->where(['edu_id'=>$rdata['edu_id']]);
        $this->db->update('education',$rdata);
    }

    public function addeducation($field)
    {
        $this->db->insert('education', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }


    public function deleteedu($rid)
    {
        $this->db->where(['edu_id'=>$rid]);
        $this->db->delete('education');
    }

    public function update_emp($rdata)
    {
        $this->db->where(['id'=> $rdata['id']]);
        $this->db->update('employer',$rdata);
    }


    public function addemployer($empdata)
    {
        $this->db->insert('employer', $empdata);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }



     public function deleteemp($rid)
    {
        $this->db->where(['id'=>$rid]);
        $this->db->delete('employer');
    }


    public function update_skl($rdata)
    {
        $this->db->where(['id'=> $rdata['id']]);
        $this->db->update('skills',$rdata);
    }


    public function addskill($skldata)
    {
        $this->db->insert('skills', $skldata);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

     public function deleteskl($rid)
    {
        $this->db->where(['id'=>$rid]);
        $this->db->delete('skills');
    }



     public function update_learn($rdata)
    {
        $this->db->where(['id'=> $rdata['id']]);
        $this->db->update('learn',$rdata);
    }


    public function addlearn($ldata)
    {
        $this->db->insert('learn', $ldata);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

     public function deletelearn($rid)
    {
        $this->db->where(['id'=>$rid]);
        $this->db->delete('learn');
    }



















}