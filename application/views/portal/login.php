<?php

$this->load->view('template/header',['title'=>'Login']);
$this->load->view('template/navg');?>

  <div class="container">
    <div class="row">
      <div class="col s12 m2 l2"></div>
      <div class="col s12 m8 l8">
    <form method="POST" action="<?php echo base_url() ?>users/login_validation">
    <div class="modal-content">
      <h4>Account Login</h4>
      <P>Login to access your Dashboard</P>
     
        <div class="input-field">
          <input type="text" id="username" name="username">
          <label for="username">Username</label>
        </div>
        <div class="input-field">
          <input type="password" id="password" name="password">
          <label for="password">Password</label>
        </div>
    </div>
    <div class="modal-footer right" >
      <a href="changepass.html" class="modal-action modal-close btn cyan">
        <i class="fa fa-sync"></i> Forgot Password?</a>
      <button class="btn teal waves-effect waves-light" type="submit" >LOGIN</button>
    </div>
     </form>
   </div>
   <div class="col s12 m2 l2"></div>
 </div>
   </div>

<?php
$this->load->view('template/footer2');
?>