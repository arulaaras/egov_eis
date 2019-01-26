<?php

$this->load->view('template/header',['title'=>'SeMT']);
$this->load->view('template/navg');

?>


  <div class="container">
      <section class="section section-posts grey lighten-4" style="padding:0px;">
   
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <span class="card-title"><blockquote><h5>SeMT Team</h5></blockquote></span>
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
                        <td><?= $u->salutation?><?= $u->first_name?></td>
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






<?php
$this->load->view('template/footer2');
?>