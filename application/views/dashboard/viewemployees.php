<?php
$this->load->view('dashboard/header2',['title'=>' View Employees']);
    $this->load->view('dashboard/navg3');
?><br>
<div class="container">
      <section class="section section-posts grey lighten-4" style="padding:0px;">
   
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <span class="card-title"><blockquote><h5>Employees of TNeGA</h5></blockquote></span>
                  <form action="<?php echo base_url()?>dashboard/search" method="post">
        <div class="input-field center">
          <input class="right" id="search" type="search" name="query" placeholder="Search employeee" required>
          <label class="label-icon" for="search"></label>
          <i class="material-icons">close</i>
        </div>
      </form><?php echo form_error('query','<div class="purple-text">','</div>'); ?>
                  <table class="striped ">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Official Mail ID</th>
                        <th>Contact</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><?php foreach ($users as $u) 
                            {
                            ?>
                        <td><?= $u->salutation?>&nbsp;<?= $u->first_name?>&nbsp;<?= $u->last_name?></td>
                        <td><?= $u->desig_name?></td>
                        <td><?= $u->email?></td>
                        <td>+91-<?= $u->mobile?></td>
                        <td>
                          <a href="<?php echo base_url();?>portal/viewprofile/<?= $u->user_id ?>" class="btn blue lighten-2">View Profile</a>
                        </td>
                        </tr>
                        <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>




</div>




















<?php $this->load->view('template/footer2');?>