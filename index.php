<?php
require_once ('libs/echoDB/DB.php');
require_once ('config/env.php');

if (isset($_REQUEST['link'])){
    $link = $_REQUEST['link'];
    //    Insert into waitlist if it doesnt already exist
    $db->query("INSERT INTO `invites_tb`(`invite_code`) VALUES ('$link')");
    //    Redirect to Google Forms
    header("location: https://booomers.club/join/$link");
}

if (isset($_POST['submit'])){
    $phone = $_POST['phone'];
    $full_phone = $_POST['full_phone'];
    $country = $_POST['country'];

//    Insert into waitlist if it doesnt already exist
    $db->query("INSERT INTO `waitlist_tb`(`phone`, `full_phone`, `country`) VALUES ('$phone','$full_phone','$country')");
//    Redirect to Google Forms
    header('location: https://forms.gle/oircpEXTiSEAt4wH6');

}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Booomers, Social Media Marketing Agency, Affiliate Club, earn sharing stuff on social media, make money online with referrals">
    <meta name="author" content="ikelvin.co">

    <title>Booomers.club | With you, we engineer viral marketing through our affiliate Club</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">


    <!-- <link href="vendor/tel-input/css/intlTelInput.min.css" rel="stylesheet"> -->
    <link href="vendor/tel-input/css/intlTelInput.css?233551838987" rel="stylesheet">


  </head>

  <body>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="mp4/bg.mp4" type="video/mp4">
    </video>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h2 class="mb-2">Booomers.club!</h2>
              <p class="mb-4 text-small">
                  Access is limited to a small group of testers during the pre-launch beta release of Booomers Club.
                  <strong>Join the waitlist today </strong> for your chance to try it out and earn some money whilst we improve.
                 <!-- Sign up for updates using the form below! -->
               </p>

              <h3>
                <span class="text-primary">#JoinTheWaitlist</span>,
              </h3>
                <h2>
                  <span class="text-warning">#GetReady</span>
                </h2>
<!--                <h3>-->
<!--                  <span class="text-primary">#BeAmongTheFirst</span>-->
<!--                </h3>-->
                <h2>
                  <span class="text-white h6">to join the All New </span>
  								<span class="text-white-50 text-outline">#BooomersClub</span>
  							</h2>
                <br/>
                <h4 class="text-uppercase">earn while you share</h4>
  							<p class="text-white text-small">
  								Membership request fee, terms and conditions apply
  							</p>
              <form action="" method="POST">

                <div class="form-group row">
                  <div class="col-sm-12">
                    <div class="input-group text-black-50">
                      <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button" disabled>Country</button>
                      </div>
                      <select class="form-control" id="address-country" name="country" required></select>
                    </div>

                    <div class="input-group text-black-50">
                      <input  id="phone" type="tel" class="form-control" name="phone" placeholder="Mobile Number..." aria-label="Enter Mobile Number..." aria-describedby="basic-addon" required>
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" name="submit">Join Waitlist!</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <span id="valid-msg" class="hide"></span>
                    <span id="error-msg" class="hide"></span>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <!-- <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li> -->
<!--        <li class="list-unstyled-item">-->
<!--          <a href="https://www.youtube.com/channel/UCtsKXK9lC6ShePjyh82aOkA">-->
<!--            <i class="fa fa-bell"></i>-->
<!--          </a>-->
<!--        </li>-->
<!--        <li class="list-unstyled-item">-->
<!--          <a href="https://youtu.be/SznPi2D1CRk">-->
<!--            <i class="fab fa-youtube"></i>-->
<!--          </a>-->
<!--        </li>-->
<!--        <li class="list-unstyled-item">-->
<!--          <a href="https://youtu.be/lpChxmJr17E">-->
<!--            <i class="fab fa-youtube"></i>-->
<!--          </a>-->
<!--        </li>-->
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

    <script src="vendor/tel-input/js/intlTelInput.js?233551838987"></script>
    <script src="vendor/tel-input/js/utils.js?233551838987"></script>
    <!-- <script src="static/vendor/tel-input/js/intlTelInput.min.js?1575016932390"></script> -->
    <script src="vendor/tel-input/js/defaultCountryIp.js?233551838987"></script>
    <script src="vendor/tel-input/js/hiddenInput.js?233551838987"></script>
    <script src="vendor/tel-input/js/countrySync.js?233551838987"></script>
    <script src="vendor/tel-input/js/isValidNumber.js?233551838987"></script>


  </body>

</html>
