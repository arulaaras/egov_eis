<?php

$this->load->view('template/header',['title'=>'SeMT']);
$this->load->view('template/navg');?>

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
                      <tr>
                        <td>Mr. Pandian Ranganathan</td>
                        <td>Head - SeMT</td>
                        <td>head.semt@tn.gov.in</td>
                        <td>+91 - 9878787878</td>
                        <td>
                          <a href="profile.html" class="btn blue lighten-2">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Mr. Sivakumar</td>
                        <td>Senior Consultant</td>
                        <td>sclt1.semt@tn.gov.in</td>
                        <td>+91 - 9873421218</td>
                        <td>
                          <a href="profile.html" class="btn blue lighten-2">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Mr. Vidhya Shankar</td>
                        <td>Senior Consultant</td>
                        <td>sclt2.semt@tn.gov.in</td>
                        <td>+91 - 9821212121</td>
                        <td>
                          <a href="profile.html" class="btn blue lighten-2">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Mr. R Ravi Patil</td>
                        <td>Consultant</td>
                        <td>clt1.semt@tn.gov.in</td>
                        <td>+91 - 9432323232</td>
                        <td>
                          <a href="profile.html" class="btn blue lighten-2">View Profile</a>
                        </td>
                      </tr>
                                          
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