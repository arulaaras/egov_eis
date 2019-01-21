<!-- Section: Stats -->
  <?php $data = $this->session->all_userdata();?>
    <div class="row container" style="width:1100px!important;">

        <blockquote><h5><?= $user_id; ?></h5></blockquote>
        <div class="col m4 l4 s12 card center">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?php echo base_url() ?>assets/profilepic/asye5.tnega.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><h5 class="blue-text text-darken-4" style="font-size: 20px;">Mr. Arularasan Periyasamy</h5></span>
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
           <th>Mr. Arularasan Periyasamy</th>
         </tr>
         <tr>
           <th>Designation</th><th>:</th>
           <th>Assistant System Engineer</th>
         </tr>
         <tr>  
            <th>Date of Joining</th><th>:</th>
            <th>02 May 2017</th>
          </tr>
         <tr>  
           <th>Age / Date of Birth</th><th>:</th>
           <th>27 Years / 25 November 1991</th>
         </tr>
         <tr>  
          <th>Official Mail</th><th>:</th>
          <th>asye5.tnega@tn.gov.in</th>
        </tr>
		<tr>  
          <th>Contact Info</th><th>:</th>
          <th>+91 - 7502224321</th>
        </tr>
        <tr>  
            <th>Gender</th><th>:</th>
            <th>Male</th>
          </tr>
          <tr>  
              <th>Marital Status</th><th>:</th>
              <th>Single</th>
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
                       <th>4/7, Thomaiappan Street,<br>Ganapathy Colony,<br>Royapettah,<br>Chennai-600 018</th>
                     </tr>
                     
                        <tr> 
                            <th>Permanent Address</th><th>:</th>
                            <th>2/76, Onniyampatti (Village),<br>Krishnapuram (PO),<br>Dharmapuri-635 202</th>
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
                   <th>B.E Computer Science and Engg</th>
                   <th>Under Graduation</th>
                   <th>Anna University</th>
				   <th><button class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#edu-edit"><i class="material-icons">mode_edit</i></button>
				   <button class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="#edu-delete"><i class="material-icons">delete</i></button>
				 
				   </th></tr>
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
                   <th>Assistant System Engineer</th>
                   <th>May 2017 - Present</th>
                   <th>1 year 8 Months</th>
				   <th><button class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#emp-edit"><i class="material-icons">mode_edit</i></button>
           <button class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="#emp-delete"><i class="material-icons">delete</i></button>
           </th>
                 </tr>
                                
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
                    <th>HTML5, CSS3, Materialize CSS</th>
                    <th>Expert</th>
					<th><button class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#skills-edit"><i class="material-icons">mode_edit</i></button>
           <button class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="#skills-delete"><i class="material-icons">delete</i></button>
           </th>
                  </tr>
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
                <th>Angular JS, Vue JS, Mongo DB</th>
				<th>Online Training</th>
				   
				    <th><button class="btn-floating btn-medium green waves-effect waves-light modal-trigger" href="#learn-edit"><i class="material-icons">mode_edit</i></button>
           <button class="btn-floating btn-medium red waves-effect waves-light modal-trigger" href="#learn-delete"><i class="material-icons">delete</i></button>
           </th>
               </tr>
           
           </tbody>
         </table>
         <button class="btn blue waves-effect waves-light  modal-trigger centered" href="#learn-add">Add More Skills</button>
       </p>
          </div>
          </li>
        </ul>

    </div>



<!--edu edit-->
  <div id="edu-edit" class="modal">
    <div class="modal-content">
      <form>
    
    <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="education" type="text" value="">
                    <label for="education">Education</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <select>
                      <option value="" disabled selected>Graduation Type</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Post Graduate">Post Graduate</option>
                      </select>
                    <label>Designation</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="institution" type="text" value="">
                    <label for="institution">Institution / University</label>
                  </div>
            </div>
        </div>
    
    <div class="modal-footer">     
     <button class="btn indigo waves-effect waves-light" type="submit" name="action">Update</button>
    </div>
    </form>
    </div>
  </div>


<!--edu add-->
  <div id="edu-add" class="modal">
    <div class="modal-content">
      <form>
    
    <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="education" type="text" value="">
                    <label for="education">Education</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <select>
                      <option value="" disabled selected>Graduation Type</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Post Graduate">Post Graduate</option>
                      </select>
                    <label>Designation</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="institution" type="text" value="">
                    <label for="institution">Institution / University</label>
                  </div>
            </div>
        </div>
    
    <div class="modal-footer">     
     <button class="btn blue waves-effect waves-light" type="submit" name="action">ADD</button>
    </div>
    </form>
    </div>
  </div>





  <!--emp edit-->
  <div id="emp-edit" class="modal">
    <div class="modal-content">
      <form>
    
     <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input id="empname" type="text">
                    <label for="empname">Employer Name</label>
                  </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input id="designation" type="text">
                    <label for="designation">Designation</label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" id="date">
                    <label for="date">From</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" id="date">
                    <label for="date">To</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" id="total">
                    <label for="period">Employer Experience</label>
                  </div>
            </div>
            
        </div>
    
    <div class="modal-footer">     
     <button class="btn indigo waves-effect waves-light" type="submit" name="action">Update</button>
    </div>
    </form>
    </div>
  </div>


<!--emp add-->
  <div id="emp-add" class="modal">
    <div class="modal-content">
      <form>
    <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input id="empname" type="text">
                    <label for="empname">Employer Name</label>
                  </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <input id="designation" type="text">
                    <label for="designation">Designation</label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" id="date">
                    <label for="date">From</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" id="date">
                    <label for="date">To</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" id="total">
                    <label for="period">Employer Experience</label>
                  </div>
            </div>
            
        </div>
    
    <div class="modal-footer">     
     <button class="btn blue waves-effect waves-light" type="submit" name="action">ADD</button>
    </div>
    </form>
    </div>
  </div>


<!--skills edit-->
  <div id="skills-edit" class="modal">
    <div class="modal-content">
      <form>
    
      <div class="row">
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input id="empname" type="text">
                      <label for="empname">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select>
                        <option value="beg">Beginner</option>
                        <option value="inter">Intermediate</option>
                        <option value="expert">Expert</option>
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
  </div>


<!--skills add-->
  <div id="skills-add" class="modal">
    <div class="modal-content">
      <form>
      
         <div class="row">
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input id="empname" type="text">
                      <label for="empname">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select>
                        <option value="beg">Beginner</option>
                        <option value="inter">Intermediate</option>
                        <option value="expert">Expert</option>
                      </select>
                      <label>Skill Level</label>
                    </div>
               </div>
          </div>

    <div class="modal-footer">     
     <button class="btn blue waves-effect waves-light" type="submit" name="action">ADD</button>
    </div>
    </form>
    </div>
  </div>



<!--learn edit-->
  <div id="learn-edit" class="modal">
    <div class="modal-content">
      <form>
      
          <div class="row">
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input id="learn" type="text">
                      <label for="learn">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select>
                        <option value="online">Online Training</option>
                        <option value="class">Classroom Training</option>
                      </select>
                      <label>Mode of Training</label>
                    </div>
               </div>
          </div>

    <div class="modal-footer">     
     <button class="btn indigo waves-effect waves-light" type="submit" name="action">Update</button>
    </div>
    </form>
    </div>
  </div>


<!--learn add-->
  <div id="learn-add" class="modal">
    <div class="modal-content">
      <form>
      
      <div class="row">
              <div class="col s12 m8 l8">
                  <div class="input-field">
                      <input id="learn" type="text">
                      <label for="learn">Skills</label>
                    </div>
              </div>
              <div class="col s12 m4 l4">
                  <div class="input-field">
                      <select>
                        <option value="online">Online Training</option>
                        <option value="class">Classroom Training</option>
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

