<?php
$this->load->view('dashboard/header2',['title'=>'Dashboard']);
    $this->load->view('dashboard/navg2');
?>

<?php foreach ($profile as $p) { ?>
     <div class="row container" style="width:1100px!important;">

        <blockquote><h5>USER ID: &nbsp;<?= $p->username ?></h5></blockquote>
        <div class="col m4 l4 s12 card center">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo base_url() ?>assets/profilepic/<?= $p->user_id?>.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><h5 class="blue-text text-darken-4" style="font-size: 20px;"><?= $p->salutation?>&nbsp;<?= $p->first_name ?>&nbsp;&nbsp;<?= $p->last_name ?></h5></span>
            <p> <?php echo form_open_multipart('dashboard/update_picture');?>
                    
    <div class="file-field input-field">
      <div class="btn">
        <span>Update Photo</span>
        <input type="file"  name="userfile" value="UPLOAD" onchange="this.form.submit()">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
     
    </div></form>
 </p>
          </div>
          </div>
        <div class="col m8 l8 s12 center-align">
          <p>
            <!-- STRIPED TABLE -->
   <table class="striped center-align">
       
       <tbody>
         <tr> 
           <th>Full Name</th><th>:</th>
           <th><?= $p->salutation?>&nbsp;<?= $p->first_name ?>&nbsp;&nbsp;<?= $p->last_name ?></th>
         </tr>
         <tr>
           <th>Designation</th><th>:</th>
           <th><?= $p->desig_name?></th>
         </tr>
         <tr>  
            <th>Date of Joining</th><th>:</th>
            <th><?= $p->join_date?></th>
          </tr>
         <tr>  
           <th>Age / Date of Birth</th><th>:</th>
           <th><?= $p->age?> Years / <?= $p->dob?></th>
         </tr>
         <tr>  
          <th>Official Mail</th><th>:</th>
          <th><?= $p->email?></th>
        </tr>
		<tr>  
          <th>Contact Info</th><th>:</th>
          <th>+91 - <?= $p->mobile?></th>
        </tr>
        <tr>  
            <th>Gender</th><th>:</th>
            <th><?= $p->gender?></th>
          </tr>
          <tr>  
              <th>Marital Status</th><th>:</th>
              <th><?= $p->marital?></th>
            </tr>
        
       
       </tbody>
     </table></p>
    </div>
    </div>
    <div class="row container" style="width:1100px!important;">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header active"><i class="material-icons">place</i>Demographic and Education</div>
                <div class="collapsible-body">
                    <p>
                        <!-- STRIPED TABLE -->
               <table class="striped center-align">
                   
                   <tbody>
				      <tr> 
                       <th>Present Address</th><th>:</th>
                       <th><?= $p->comm_address?></th>
                     </tr>
                     
                        <tr> 
                            <th>Permanent Address</th><th>:</th>
                            <th><?= $p->perm_address?></th>
                          </tr>
						  
                         
                    </tbody>
                 </table></p>
				 <br>
				  <p>
                <!-- STRIPED TABLE -->
       <table class="striped center-align">
           
           <tbody class="center">
             <tr class="indigo-text center">
                      <th>Education</th>
                      <th>Graduation Type</th>
                      <th>Institution / University</th>
					  <th>Actions</th>
                 
                  </tr>
                 <tr>
                 <?php foreach ($education as $edu) {
                   ?> 
                   <th><?= $edu->degree?></th>
                <th><?= $edu->type?></th>
                <th><?= $edu->university?></th>
               
				   <th><a class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#edu-edit<?php echo $edu->edu_id?>" ><i class="material-icons">mode_edit</i></a>
				   <a class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="<?php echo base_url()?>crud/deleteedu/<?php echo $edu->edu_id ?>"><i class="material-icons">delete</i></a>
				 
				   </th></tr><?php } ?>
           </tbody>
         </table>  
           <button class="btn blue waves-effect waves-light modal-trigger" href="#edu-add">Add Education</button>
         </p>




                </div>
              </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Experience</div>
            <div class="collapsible-body">
                <p>
                    <!-- STRIPED TABLE -->
           <table class="striped center-align">
               
               <tbody>
                  <tr class="purple-text">
                      <th>Employer Name</th>
                      <th>Designation</th>
                      <th>Working Period</th>
                      <th>Experience</th>
					  <th>Actions</th>
                  </tr>
                 <tr> 
                   <th>Tamil Nadu e-Governance Agency</th>
                   <th><?= $p->desig_name?></th>
                   <th><?= $p->join_date?> - Present</th>
                   <th></th>
				   
                 </tr>
                  <tr>
                <?php foreach ($employer as $emp) {
                    ?>


                <th><?= $emp->employer_name?></th>
                <th><?= $emp->exp_designation?></th>
                <th><?= $emp->emp_from?> - <?= $emp->emp_to?></th>
                <th><?= $emp->emp_exp?></th>
                 <th><a class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#emp-edit<?php echo $emp->id?>" ><i class="material-icons">mode_edit</i></a>
           <a class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="<?php echo base_url()?>crud/deleteemp/<?php echo $emp->id ?>"><i class="material-icons">delete</i></a>
         
           </th></tr>
              <?php } ?>
                                
               </tbody>
             </table>
              <button class="btn blue waves-effect waves-light modal-trigger" href="#emp-add">Add Experience</button>
           </p>
            
            </div>
          </li>
      
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Skill set</div>
            <div class="collapsible-body">
                <p>
                    <!-- STRIPED TABLE -->
           <table class="striped center-align">
               
               <tbody class="center">
                 <tr class="indigo-text"> 
                   <th>Skills</th>
                   <th>Experience Level</th>
				   <th>Actions</th>
                 </tr>
                 <tr> 
                    <?php foreach ($skills as $skl) {
                    ?>


                <th><?= $skl->skill_name?></th>
                <th><?= $skl->skill_level?></th>
					 <th><a class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#skills-edit<?php echo $skl->id?>" ><i class="material-icons">mode_edit</i></a>
           <a class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="<?php echo base_url()?>crud/deleteskl/<?php echo $skl->id ?>"><i class="material-icons">delete</i></a>
         
           </th></tr><?php } ?>
              </tbody>
             </table>
               <button class="btn blue waves-effect waves-light  modal-trigger centered" href="#skills-add">Add More Skills</button>
           </p>
             <br>
             <p>
                <!-- STRIPED TABLE -->
       <table class="striped center-align">
           
           <tbody class="center">
             <tr class="indigo-text"> 
               <th>Skills Want to learn</th>
			   <th>Mode of Training</th>
				   <th>Actions</th></tr>
              <tr> 
                <?php foreach ($learn as $l) {
                    ?>


                <th><?= $l->skills_learn?></th>
                <th><?= $l->mode_of_learn?></th>
				    <th><a class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#learn-edit<?php echo $l->id?>" ><i class="material-icons">mode_edit</i></a>
           <a class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="<?php echo base_url()?>crud/deletelearn/<?php echo $l->id ?>"><i class="material-icons">delete</i></a>
         
           </th>
               </tr><?php } ?>
           
           </tbody>
         </table>
         <button class="btn blue waves-effect waves-light  modal-trigger centered" href="#learn-add">Add More Skills</button>
       </p>
          </div>
          </li>
        </ul>

    </div>



<!--edu edit-->
<?php foreach ($education as $edu) {
                   ?> 
<div id="edu-edit<?php echo $edu->edu_id?>" class="modal">
  <div class="modal-content">
    <form method="POST" action="<?php echo base_url()?>crud/update_edu">
    
    <div class="row">
        <input type="hidden" value="<?= $edu->edu_id?>" name="edu_id"/>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="degree" name="degree" type="text" value="<?= $edu->degree?>">
                    <label for="degree">Education</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <select name="type">
                      <option value="<?= $edu->type?>" disabled selected>Graduation Type</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Post Graduate">Post Graduate</option>
                      </select>
                    <label>Designation</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="institution" name="university" type="text" value="<?= $edu->university ?>">
                    <label for="institution">Institution / University</label>
                  </div>
            </div>

             <div class="row right">     
     <button class="btn indigo waves-effect waves-light" type="submit" >Update</button>
    </div>
        </div>
    </form>
  </div>
</div><?php } ?>


<!--edu add-->
  <div id="edu-add" class="modal">
    <div class="modal-content">
      <form action="<?php echo base_url()?>crud/addeducation" method="POST">
    
    <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="education" type="text" value="" name="degree">
                    <label for="education">Education</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <select name="type">
                      <option value="" disabled selected>Graduation Type</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Post Graduate">Post Graduate</option>
                      </select>
                    <label>Designation</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input name="university" id="institution" type="text" value="">
                    <label for="institution">Institution / University</label>
                  </div>
            </div>
        </div>
    
    <div class="modal-footer">     
     <button class="btn blue waves-effect waves-light" type="submit" >ADD</button>
    </div>
    </form>
    </div>
  </div>





  <!--emp edit-->
   <?php foreach ($employer as $emp) {
                    ?>
  <div id="emp-edit<?php echo $emp->id?>" class="modal">
    <div class="modal-content">
      <form method="POST" action="<?php echo base_url()?>crud/update_emp">
    
     <div class="row">
      <input type="hidden" value="<?= $emp->id?>" name="id"/>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input name="employer_name" type="text" value="<?= $emp->employer_name?>">
                    <label for="employer_name">Employer Name</label>
                  </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input name="exp_designation" type="text" value="<?= $emp->exp_designation?>">
                    <label for="exp_designation">Designation</label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" name="emp_from" value="<?= $emp->emp_from ?>">
                    <label for="emp_from">From</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" name="emp_to" value="<?= $emp->emp_to ?>">
                    <label for="emp_to">To</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input name="emp_exp" type="text" value="<?= $emp->emp_exp?>">
                    <label for="emp_exp">Employer Experience</label>
                  </div>
            </div>
            
        </div>
    
    <div class="row right">     
     <button class="btn indigo waves-effect waves-light" type="submit" name="action">Update</button>
    </div>
    <br><br>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    </form>
    </div>
  </div><?php }?>


<!--emp add-->
  <div id="emp-add" class="modal">
    <div class="modal-content">
      <form action="<?php echo base_url()?>crud/addemployer" method="POST">
    <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input name="employer_name" type="text" value="">
                    <label for="empname">Employer Name</label>
                  </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input name="exp_designation" type="text" value="">
                    <label for="designation">Designation</label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" name="emp_from" value="">
                    <label for="emp_from">From</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" name="emp_to" value="">
                    <label for="emp_to">To</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" name="emp_exp" value="">
                    <label for="emp_exp">Employer Experience</label>
                  </div>
            </div>
            
        </div>
    
    <div class="row right">     
     <button class="btn blue waves-effect waves-light" type="submit" name="action">ADD</button>
    </div>
    </form>
    </div>
  </div>


<!--skills edit-->

 <?php foreach ($skills as $skl) {
                    ?>
  <div id="skills-edit<?php echo $skl->id?>" class="modal">
    <div class="modal-content">
      <form method="POST" action="<?php echo base_url()?>crud/update_skl">
    
      <div class="row">
        <input type="hidden" value="<?= $skl->id?>" name="id"/>
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input id="skill_name" type="text" name="skill_name" value="<?= $skl->skill_name?>">
                      <label for="skill_name">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select name="skill_level" value="<?= $skl->skill_level ?>">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Expert">Expert</option>
                      </select>
                      <label>Skill Level</label>
                    </div>
               </div>
          </div>
    <div class="modal-footer">     
     <button class="btn indigo waves-effect waves-light" type="submit" name="action">Update</button>
    </div>
    </form>
    </div>
  </div><?php }?>


<!--skills add-->
  <div id="skills-add" class="modal">
    <div class="modal-content">
      <form action="<?php echo base_url()?>crud/addskill" method="POST">
      
         <div class="row">
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input id="skill_name" type="text" name="skill_name" value="">
                      <label for="skill_name">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select name="skill_level" value="">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Expert">Expert</option>
                      </select>
                      <label>Skill Level</label>
                    </div>
               </div>
          </div>

    <div class="row right">     
     <button class="btn blue waves-effect waves-light" type="submit" >ADD</button>
    </div>
    </form>
    </div>
  </div>



<!--learn edit-->
<?php foreach ($learn as $l) { ?>
  <div id="learn-edit<?php echo $l->id?>" class="modal">
    <div class="modal-content">
      <form method="POST" action="<?php echo base_url()?>crud/update_learn">
      
          <div class="row">
            <input type="hidden" value="<?= $l->id?>" name="id"/>
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input name="skills_learn" value="<?= $l->skills_learn?>" type="text">
                      <label for="learn">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select name="mode_of_learn" value="<?= $l->mode_of_learn ?>">
                        <option value="Online Training">Online Training</option>
                        <option value="Classroom Training">Classroom Training</option>
                      </select>
                      <label>Mode of Training</label>
                    </div>
               </div>
          </div>

    <div class="modal-footer">     
     <button class="btn indigo waves-effect waves-light" type="submit" >Update</button>
    </div>
    </form>
    </div>
  </div><?php } ?>


<!--learn add-->
  <div id="learn-add" class="modal">
    <div class="modal-content">
      <form action="<?php echo base_url()?>crud/addlearn" method="POST">
      
      <div class="row">
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input name="skills_learn" value="" type="text">
                      <label for="learn">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select name="mode_of_learn" value="">
                        <option value="Online Training">Online Training</option>
                        <option value="Classroom Training">Classroom Training</option>
                      </select>
                      <label>Mode of Training</label>
                    </div>
               </div>
          </div>
    
    <div class="modal-footer">     
     <button class="btn blue waves-effect waves-light" type="submit" name="action">ADD</button>
    </div>
    </form>
    </div>
  </div>



<?php }?>
<?php $this->load->view('template/footer2');?>