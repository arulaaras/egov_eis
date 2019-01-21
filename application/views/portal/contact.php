<?php

$this->load->view('template/header',['title'=>'Contact']);
$this->load->view('template/navg');?>

  <section id="contact" class="section section-contact center scrollspy">
    
    <div class="container">
      <div class="row">
     <h4 class="blue-text">Office Location</h4></blockquote>
        <h6>Commissionerate Of e-Governance,<br>Tamil Nadu e-Governance Agency,<br>
        807, PT Lee Building,<br>
      Anna Salai,<br>
    Chennai-600 002.</h6>



      </div>

      <div class="row">
        <div class="col s12 m7"><div id="googlemap" style="height:520px;margin-top: 0px; padding: 0px;"></div></div>
        <div class="col s12 m5" style="height:520px;margin-top: 0px; padding: 0px;">
          <div class="card-panel z-depth-5" >
            <h4>Contact Us</h4>
            <div class="input-field">
              <input type="text" id="cname" placeholder="Name">
              <label for="cname">Name</label>
            </div>
            <div class="input-field">
              <input type="email" id="cemail" placeholder="Email">
              <label for="cemail">Email</label>
            </div>
            <div class="input-field">
              <input type="text" id="cphone" placeholder="Phone Number">
              <label for="cphone">Phone</label>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" id="cmessage" placeholder="Message"></textarea>
              <label for="cmessage">Message</label>
            </div>
            <input type="submit" value="Submit" class="btn blue-grey">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script>
      
      function initMap() {
   
        var uluru = {lat: 13.064780, lng:80.265604};
 
        var map = new google.maps.Map(
            document.getElementById('googlemap'), {zoom: 15, center: uluru});
   
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
          </script>

          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnkwoMMCCMjGOI3IyDEKIO62sGLgrsAIw&callback=initMap">
          </script>




<?php
$this->load->view('template/footer2');
?>