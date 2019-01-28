<?php
$this->load->view('dashboard/header2',['title'=>'Dashboard']);
    $this->load->view('dashboard/navg2');
?>
<br>
      <form method="POST" action="<?php echo base_url()?>dashboard/update_edu">
    
    <div class="row container">
        <input type="hidden" value="<?php echo $edu_id?>" name="edu_id"/>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="degree" name="degree" type="text" value="<?php echo $degree?>">
                    <label for="degree">Education</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <select name="type">
                      <option value="<?php echo $type?>" disabled selected>Graduation Type</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Post Graduate">Post Graduate</option>
                      </select>
                    <label>Designation</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="institution" name="university" type="text" value="<?php echo $university?>">
                    <label for="institution">Institution / University</label>
                  </div>
            </div>

             <div class="modal-footer">     
     <button class="btn indigo waves-effect waves-light" type="submit" >Update</button>
    </div>
        </div>
    
   
    </form>
 



  <?php $this->load->view('template/footer2');?>