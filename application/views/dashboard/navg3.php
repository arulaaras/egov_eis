 <nav class="blue darken-2">
      <div class="container" style="width:1100px!important;">
        <div class="nav-wrapper">
          <a href="<?php echo base_url()?>dashboard/home" class="brand-logo">Dashboard</a>
          <a
            href="<?php echo base_url()?>dashboard/home"
            data-activates="side-nav"
            class="button-collapse show-on-large right"
          >
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url()?>dashboard/home">Dashboard</a></li>
            <li><a href="<?php echo base_url()?>dashboard/view_employees">View Employees</a></li>
            <li><a href="<?php echo base_url()?>dashboard/modifyprofile">Update Profile</a></li>
            <li><a href="<?php echo base_url()?>dashboard/changepassword">Change Password</a></li>
          </ul>
          <!-- Side nav -->
          <ul id="side-nav" class="side-nav">
            <li>
              <div class="user-view">
                <div class="background"><img src="<?php echo base_url() ?>assets/img/ocean.jpg" alt="" /></div>
                <a href="#">
                  <img src="<?php echo base_url() ?>assets/profilepic/<?php echo $this->session->userdata('user_id')?>.jpg" alt="" class="circle" />
                </a>
                <a href="#">
                  <span class="name white-text"></span>
                </a>
                <a href="#">
                  <span class="email white-text"><?php echo $this->session->userdata('username')?></span>
                </a>
              </div>
            </li>
            <li>
              <a href="<?php echo base_url()?>dashboard/home">
                <i class="material-icons">dashboard</i> Dashboard</a
              >
            </li>
            <li><a href="<?php echo base_url()?>dashboard/view_employees">View Employees</a></li>
            <li><a href="<?php echo base_url()?>dashboard/modifyprofile">Update Profile</a></li>
            <li><a href="<?php echo base_url()?>dashboard/changepassword">Change Password</a></li>
            <li><div class="divider"></div></li>
            <li><a href="<?php echo base_url()?>users/logout" class="waves-effect">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>