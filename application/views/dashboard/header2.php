<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
   
    <!-- <link type="text/css" rel="stylesheet" href="css/main.css" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="<?php echo base_url() ?>assets/css/materialize.css"
      type="text/css"
      rel="stylesheet"
      media="screen,projection"
    />
    <link
      href="<?php echo base_url() ?>assets/css/style.css"
      type="text/css"
      rel="stylesheet"
      media="screen,projection"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="<?php echo base_url() ?>assets/css/materialize.min.css"
      media="screen,projection"
    />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/index.js"></script>
 <script>
        $(document).ready(function () {
            
          $('.collapsible').collapsible();                
        });
      </script>

    <script>
      // Hide Sections
      $(".section").hide();

      setTimeout(function() {
        $(document).ready(function() {
          // Show sections
          $(".section").fadeIn();

          // Hide preloader
          $(".loader").fadeOut();

          //Init Side nav
          $(".button-collapse").sideNav();

          // Init Modal
          $(".modal").modal();

          // Init Select
          $("select").material_select();
 
        });
      }, 1000);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo 'EIS - TNeGA |'.' '. $title ?></title>
  </head>