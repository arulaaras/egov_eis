<?php

    $this->load->view('dashboard/header2',['title'=>'Update Password']);
    $this->load->view('dashboard/navg2');?>


 <div class="container">
      <blockquote><h5>Update Password</h5></blockquote>
      <form class="" action="<?= base_url()?>dashboard/changepassword" method="post">
        <div class="row center">
           <!-- <div class="col s12 m5 l5">
                <div class="input-field">
                    <input id="username" type="text" name="">
                    <label for="username">Username</label>
                  </div>
            </div>-->
            <div class="col s12 m5 l5">
                <div class="input-field">
                    <input id="cpassword" type="password" name="cpassword">
                    <label for="cpassword">Current Password</label>
                  </div>
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m5 l5">
                <div class="input-field">
                    <input id="npassword1" type="password" name="npassword1">
                    <label for="npassword1">Enter New Password</label>
                  </div>
            </div>
            <div class="col s12 m5 l5">
              <div class="input-field">
                <input id="npassword2" type="password" name="npassword2">
                <label for="npassword2">Re-Enter New Password</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12 centered"><button type="submit" name="update" class="btn-large center indigo white-text waves-effect waves-light">Update Password</button></div>
          </div>
        </form>
     </div>
<?php $this->load->view('template/footer2');?>