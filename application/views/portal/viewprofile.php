<?php

$this->load->view('template/header',['title'=>'View Profile']);
$this->load->view('template/navg');?>

  <?php foreach ($profile as $prof) {
   ?>

    <div class="row container" style="width:1100px!important;">

        <blockquote><h5>USER ID: <?= $prof->username?></h5></blockquote>
        <div class="col m4 l4 s12 card center">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo base_url() ?>assets/profilepic/<?= $prof->username?>.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><h5 class="blue-text text-darken-4" style="font-size: 20px;"><?= $prof->salutation?>&nbsp;<?= $prof->first_name?></h5></span>
            <p><a href="#" class="btn blue lighten-2">Update Photo</a></p>
          </div>
          </div>
        <div class="col m8 l8 s12 center-align">
          <p>
            <!-- STRIPED TABLE -->
   <table class="striped center-align">
       
       <tbody>
         <tr> 
           <th>Full Name</th><th>:</th>
           <th><?= $prof->salutation?>&nbsp;<?= $prof->first_name?>&nbsp;<?= $prof->last_name?></th>
         </tr>
         <tr>
           <th>Designation</th><th>:</th>
           <th><?= $prof->desig_name?></th>
         </tr>
         <tr>  
            <th>Date of Joining</th><th>:</th>
            <th><?= $prof->join_date?></th>
          </tr>
         <tr>  
           <th>Age / Date of Birth</th><th>:</th>
           <th><?= $prof->age?> Years / <?= $prof->dob?></th>
         </tr>
         <tr>  
          <th>Official Mail</th><th>:</th>
          <th><?= $prof->email?></th>
        </tr>
		<tr>  
          <th>Contact Info</th><th>:</th>
          <th>+91 - <?= $prof->mobile?></th>
        </tr>
        <tr>  
            <th>Gender</th><th>:</th>
            <th><?= $prof->gender?></th>
          </tr>
          <tr>  
              <th>Marital Status</th><th>:</th>
              <th><?= $prof->marital?></th>
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
                       <th><?= $prof->comm_address?></th>
                     </tr>
                     
                        <tr> 
                            <th>Permanent Address</th><th>:</th>
                            <th><?= $prof->perm_address?></th>
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
			
                 
                  </tr>
                 <tr> 
                   <th>B.E Computer Science and Engg</th>
                   <th>Under Graduation</th>
                   <th>Anna University</th>
                 </tr>
                
           
           </tbody>
         </table></p>




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
					 
                  </tr>
                 <tr> 
                   <th><?= $prof->organization?></th>
                   <th><?= $prof->desig_name?></th>
                   <th><?= $prof->join_date?> - Present</th>
                   <th>1 year 8 Months</th>
                 </tr>
                 <tr> 
                  <?php foreach ($employer as $emp) {
                    ?>
                  
                    
                    <th><?= $emp->employer_name?></th>
                    <th><?= $emp->exp_designation?></th>
                    <th><?= $emp->emp_from?> - <?= $emp->emp_to?></th>
                    <th><?= $emp->emp_exp?></th>
                  
                  </tr>
                   <?php } ?>
                
               </tbody>
             </table></p>
            
            </div>
          </li>
      
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Skill set</div>
            <div class="collapsible-body">
                <p>
           
           <table class="striped center-align">
               
               <tbody class="center">
                 <tr class="indigo-text"> 
                   <th>Skills</th>
                   <th>Experience Level</th>
				  
                 </tr>
                 <tr> 
                    <th>HTML5, CSS3, Materialize CSS</th>
                    <th>Expert</th>
                  </tr>
                  <tr> 
                      <th>PHP, MySQL, Bootstrap, GitHub</th>
                      <th>Expert</th>
                    </tr>
                    <tr> 
                        <th>Adobe Photoshop CC</th>
                        <th>Expert</th>
                      </tr>
                    <tr> 
                        <th>JQuery, CodeIgniter,Wordpress</th>
                        <th>Intermediate</th>
                      </tr>
                      <tr> 
                          <th>Laravel, Yii, Node JS, React JS </th>
                          <th>Beginner</th>
                        </tr>
               
               </tbody>
             </table></p>
             <br>
             <p>
                <!-- STRIPED TABLE -->
       <table class="striped center-align">
           
           <tbody class="center">
             <tr class="indigo-text"> 
               <th>Skills Want to learn</th>
			   <th>Mode of Training</th>
				  
              <tr> 
                <th>Angular JS, Vue JS, Mongo DB</th>
				<th>Online Training</th>
               </tr>
           
           </tbody>
         </table></p>
            </div>
          </li>
        </ul>
      </div>
  </div>
  <?php } ?>  
    <?php
$this->load->view('template/footer2');
?>