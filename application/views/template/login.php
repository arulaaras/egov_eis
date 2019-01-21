<div id="login-modal" class="modal">
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
    <div class="modal-footer">
      <a href="changepass.html" class="modal-action modal-close btn cyan">
        <i class="fa fa-sync"></i> Forgot Password?</a>
      <button class="btn teal waves-effect waves-light" type="submit" >LOGIN</button>
      <?php echo $this->session->flashdata("error");?>
    </div>
     </form>
  </div>