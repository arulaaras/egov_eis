  <nav class="blue darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="<?php echo base_url() ?>" class="brand-logo"
              ><i class="material-icons">account_balance</i> EIS-TNeGA</a
            >
            <a class="button-collapse" data-activates="mobile-nav" href="#">
              <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url() ?>portal/about">About Us</a></li>
              <li>
                <a
                  class="dropdown-button"
                  data-activates="my-dropdown1"
                  href="#!"
                  >Organization<i class="material-icons right"
                    >arrow_drop_down</i
                  >
                </a>
              </li>

           
              <li>
                <a
                  class="dropdown-button"
                  data-activates="my-dropdown2"
                  href="#!"
                  >Projects <i class="material-icons right">arrow_drop_down</i>
                </a>
              </li>
              <li><a href="<?php echo base_url() ?>portal/contact">Contact</a></li>
           
              <li><a class="btn teal waves-effect waves-light modal-trigger" href="<?php echo base_url() ?>portal/login">Login</a></li>
              
            </ul>
            <ul class="side-nav" id="mobile-nav">
              <li><a href="<?php echo base_url() ?>portal/about">About Us</a></li>
              <li>
                <a
                  class="dropdown-button"
                  data-activates="my-dropdown3"
                  href="#!"
                  >Organization<i class="material-icons right"
                    >arrow_drop_down</i
                  >
                </a>
              </li>


              <li>
                <a class="dropdown-button" data-activates="my-dropdown4" href="#!"
                  >Projects <i class="material-icons right">arrow_drop_down</i>
                </a>
              </li>
              <li><a href="<?php echo base_url() ?>portal/contact">Contact</a></li>

              <li><a class="btn waves-effect waves-light">Login</a></li>
         
            </ul>
          </div>
        </div>
      </nav>
      <ul id="my-dropdown1" class="dropdown-content">
        <li><a href="<?php echo base_url() ?>portal/department">CeG</a></li>
        <li><a href="<?php echo base_url() ?>portal/dcssa">DC's / SSA / SA</a></li>
        <li><a href="<?php echo base_url() ?>portal/semt">SeMT / Consultants</a></li>
        <li><a href="<?php echo base_url() ?>portal/administration">Administration / Finance</a></li>
        <li><a href="<?php echo base_url() ?>portal/ases">ASE's / ASA's</a></li>
      </ul>
      <ul id="my-dropdown2" class="dropdown-content">
        <li><a href="eseva.html">e Sevai / CSC </a></li>
        <li><a href="tngis.html">TN GIS</a></li>
        <li><a href="eoffice.html">e Office</a></li>
      </ul>
      <ul id="my-dropdown3" class="dropdown-content">
          <li><a href="<?php echo base_url() ?>portal/department">CeG</a></li>
          <li><a href="<?php echo base_url() ?>portal/dcssa">DC's / SSA / SA</a></li>
          <li><a href="<?php echo base_url() ?>portal/semt">SeMT / Consultants</a></li>
          <li><a href="<?php echo base_url() ?>portal/administration">Administration / Finance</a></li>
          <li><a href="<?php echo base_url() ?>portal/ases">ASE's / ASA's</a></li>
      </ul>

      <ul id="my-dropdown4" class="dropdown-content">
          <li><a href="eseva.html">e Sevai / CSC </a></li>
          <li><a href="tngis.html">TN GIS</a></li>
          <li><a href="eoffice.html">e Office</a></li>
      </ul>

      <br />
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
