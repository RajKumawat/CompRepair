<!DOCTYPE html>
<html lang="en">

<head>
  <title>contact</title>
  <link rel = "icon" href = "./images/compRepairLogo.png" type = "image/x-icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/contact.css">
  <style>
      .container-fluid{
        padding-right: 0px !important; 
        padding-left: 0px !important; 
      }
      .row{
        margin-left: 0px !important;
        margin-right:0px !important;
      }
      .pl-0{
        padding-left:0px !important;
      }
      .pr-0
      {
        padding-right: 0px !important;
      }
    </style>
</head>

<body>
 
<!-- //////////////////////////////// header section starts/////////////////////// -->
<?php
include ('./includes/header.php') ;
?>
<!-- ///////////////////////////////////// header section closed /////////////////////// -->

  <div class="container-fluid">
    <div class="jumbotron" style="text-align: center; background-color:#157476; color: white; margin-top:-15px; border-radius: unset !important;">
      <h2 class="jumbo-slim main-color center"
        style="color: white; font-family:Lucida Sans Unicode,Lucida Grande, sans-serif;">If you have any Query about
        any Computer related Problem, let us know immediately.</h2><br>
      <p>Please use the options below to find and report the problem</p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 pl-0 pr-0">
        <span>
          <h4 style="color: #116466;">Welcome to the Support Center</h4>
        </span><br>
        <form name="formQuery" method="POST" action="./php/queries.php">
          <div class="form-group">
            <input type="name" required="required" class="form-control" name="name"  placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" required="required" name="email" aria-describedby="emailHelp"
              placeholder="Email">
          </div>
          <div class="form-group">
            <input type="phone" class="form-control" required="required" name="phone"  placeholder="Mobile">
          </div>

          <div class="form-group">
            <input type="subject" class="form-control" required="required" name="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea class="form-control" required="required"  rows="5" name="message" placeholder="Query / Message"></textarea>
          </div>
          <button type="submit" class="btn btn-info"
            style=" margin-top:8px; background-color: #1c797d; border-color: #073638; font-size: 15px;  padding: 5px 20px;">
            Submit</button>
        </form>
      </div><br><br>

      <div class="col-md-5 col-md-offset-1 pl-0 pr-0">
        <i class="fa fa-phone" style="font-size:40px;color:#116466;"></i><span>
          &nbsp;&nbsp;7838623260&nbsp;/&nbsp;9780547442&nbsp;/&nbsp;7820888183</span>
        <hr>

        <i class="fa fa-whatsapp" style="font-size:40px;color:#25d366;"></i><span>
          &nbsp;&nbsp;7838623260&nbsp;/&nbsp;9780547442&nbsp;/&nbsp;7820888183</span>
        <hr>

        <i class="fa fa-facebook" style="font-size:40px;color:#3b5998;"></i><span> &nbsp;&nbsp;<a style="color:#1b4266;"
            href="https://www.facebook.com/comprepair.in/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CompRepair.in&nbsp;&nbsp;</span>
        <hr>

        <i class="fa fa-youtube-play" style="font-size:40px;color:#c4302b"></i><span> &nbsp;&nbsp;&nbsp;<a style="color:#1b4266;"
            href="https://www.youtube.com/channel/UCgj52kR2hs7qIpM8DtJ4WdQ" target="_blank">CompRepair.in</a></span>
        <hr>

        <i class="fa fa-instagram" style="font-size:40px;color:#E1306C;"></i><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#1b4266;"
            href="https://www.instagram.com/p/B8bA4yLJHlu/?igshid=qs8m5p4jdvxl" target="_blank">CompRepair.in</a></span>
        <hr>

        <i class="fa fa-linkedin" style="font-size:40px;color:#33CAFF;"></i><span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#1b4266;"
            href="https://www.linkedin.com/in/comp-repair-ba52b31a2" target="_blank">CompRepair.in</a></span>
        <hr>
      </div>
    </div>
    <!--for row-->
  </div><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 pl-0 pr-0">
      <!-- <img src="../images/map1.png" style="width: 100%;"> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15224.508903338958!2d78.3273238!3d17.4536237!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71474dace472cfe1!2sH%20Men&#39;s%20Hostel!5e0!3m2!1sen!2sin!4v1581829412767!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
    </div>
  </div>
</div><br>

  <!--==================footer code start=========================-->
  <?php
  include ('./includes/footer.php') ;
?>
  <!--==================footer code closed=========================-->



</body>

</html>