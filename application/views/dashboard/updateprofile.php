<?php
$this->load->view('dashboard/header2',['title'=>'Update Profile']);
    $this->load->view('dashboard/navg2');
?>

<?php foreach ($profile as $prof) { ?>
<div class="container" style="border-style: solid;border: teal;">
      <blockquote><h5>Personal Profile</h5></blockquote>
      <form  method="POST" action="<?php echo base_url()?>dashboard/update_profile">
        <div class="row">
          <div class="col s8 m2">
              <div class="input-field">
                  <select name ="salutation">
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                  </select>
                  <label>Salutation</label>
                </div></div>
            <div class="col s12 m5 l5">
                <div class="input-field">
                    <input id="firstname" type="text" name="first_name" value="<?= $prof->first_name ?>">
                    <label for="firstname">First Name</label>
                  </div>
            </div>
            <div class="col s12 m5 l5">
                <div class="input-field">
                    <input id="lastname" type="text" name="last_name" value="<?= $prof->last_name?>">
                    <label for="lastname">Last Name</label>
                  </div>
            </div>
          </div>
         

          <div class="row">
            <div class="col s12 m6">
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input id="mobile" type="tel" name="mobile" value="<?= $prof->mobile?>">
                <label for="mobile">Phone Number</label>
              </div>
            </div>
            <div class="col s12 m6">
                <div class="input-field">
                    <input placeholder="Email" id="email" type="email" class="validate" name="email" value="<?= $prof->email?>">
                    <label data-error="Invalid" data-success="Valid" for="email">Email</label>
                  </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m3">
                <div class="input-field">
                    <input type="date" class="datepicker" id="dob" name="dob" value="<?= $prof->dob?>">
                    <label for="date">Date of  Birth</label>
                  </div>
            
            </div>
            <div class="col s12 m3">
                <div class="input-field">
                    <input type="text" class="text" id="age" name="age" value="<?= $prof->age?>">
                    <label for="age">Age</label>
                  </div>
            
            </div>
            <div class="col s12 m3">
                <p>
                    <input type="radio" name="gender" id="male" value="Male" <?php if($prof->gender=='Male') echo 'checked' ?>>
                    <label for="male">Male</label>
                  
                    <input class="with-gap" type="radio" name="gender" value="Female" id="female" <?php if($prof->gender=='Female') echo 'checked' ?>>
                    <label for="female">Female</label>
                  </p>
              </div>
              <div class="col s12 m3">
                  <p>
                      <input type="radio" name="marital" id="single" value="Single" <?php if($prof->marital=='Single') echo 'checked' ?>>
                      <label for="single">Single</label>
                    
                      <input class="with-gap" type="radio" name="marital" value="Married" id="married" <?php if($prof->marital=='Married') echo 'checked' ?>>
                      <label for="married">Married</label>
                    </p>
                </div>
          </div>


          <div class="row">
            <div class="col s12 m6">
                <div class="input-field">
                    <textarea placeholder="Present Address" id="comm_address" name="comm_address" class="materialize-textarea"><?= $prof->comm_address?></textarea>
                    <label for="comm_address">Present Address</label>
                  </div>
            </div>
            <div class="col s12 m6">
                <div class="input-field">
                    <textarea placeholder="Permanent Address" id="perm_address" name="perm_address" class="materialize-textarea"><?= $prof->perm_address?></textarea>
                    <label for="perm_address">Permanent Address</label>
                  </div>
            </div>
          </div>
      <blockquote><h5>Current Organization</h5></blockquote>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input id="organization" name="organization" type="text" value="Tamil Nadu e-Governance Agency">
                    <label for="organization">Employer Name</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <select class="form-control" name="designation" id="designation">
                      <option value="0">Select Designation</option>
                       <?php foreach($designation as $d): ?>
                       <option value="<?= $d->desig_id; ?>"><?= $d->desig_name; ?></option>
                      <?php endforeach; ?>
                    </select>
                    <label>Designation</label>
                  </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="input-field">
                    <input type="text" class="datepicker" id="join_date" name="join_date" value="<?= $prof->join_date?>"><label for="date">Date of Joining</label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3 l3">
                <div class="input-field">
                    
                  </div>
            </div>
            <div class="col s6 m3 l3">
                <div class="input-field">
                    <p><button type="reset" value="Reset" class="btn purple">Reset</button></p>
                  </div>
            </div>
            <div class="col s6 m3 l3">
                <div class="input-field">
                    <p><button type="submit" class="btn green">Submit</button></p>
                  </div>
            </div>
            <div class="col s12 m3 l3">
                <div class="input-field">
                   
                  </div>
            </div>
        </div>

      </form>
    </div>


<?php }?>
<?php $this->load->view('template/footer2');?>