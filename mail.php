<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="iso-8859-1">
      <title>GrandFone | Contact Us</title>
      <link rel="STYLESHEET" type="text/css" href="styles/contactForm.css">
      <script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
      <script type="text/javascript" src="scripts/mootools.js"></script>
  <script type="text/javascript" src="scripts/domready_fix.js"></script>
  <script type="text/javascript" src="scripts/modal.js"></script>
  <script type="text/javascript" src="scripts/k2.js"></script>
  <script type="text/javascript" src="scripts/jcomments-v2.1.js?v=2"></script>
  <script type="text/javascript" src="scripts/ajax.js"></script>
  <script type="text/javascript" src="scripts/caption.js"></script>
<link rel="stylesheet" href="styles/style1.css" type="text/css">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

<style>
   td h3,td h3 span{
      font-size: 14px;
      font-weight: bold;
   }
</style>

<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1"  style="background-image:url('images/headerTexture.jpg')">
  <header id="header" class="clear">
    <hgroup>
      <div><img src="images/logo1.png"></div>
    </hgroup>
  </header>
</div>
<div class="wrapper row2">
  <nav id="topnav" class="clear">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Rates</a></li>
      <li><a href="#">Dialers</a>
        <ul>
          <li><a href="pc_download.html">PC Dialer</a></li>
          <li><a href="mobile_download.html">Mobile Dialer</a></li>
        </ul>
      </li>
      <li><a href="#">Login</a>
        <ul>
          <li><a href="http://login.grandfone.net/">Reseller Old</a></li>
          <li><a href="http://reseller.grandfone.net/">Reseller</a></li>
        </ul>
      </li>
  <li  class="last active"><a href="contact_us.html">Contact US</a></li>
    </ul>
  </nav>
</div>
<!-- Footer -->

<div class="wrapper row3">
  <div id="container" class="clear"  style="min-height:300px">
<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $name = $_REQUEST['name'] ;
	$subject=$_REQUEST['subject'];
    $message = $_REQUEST['comment'] ;
    mail("grandfonesales@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    echo "<h2>Your message have been submitted to the Admin. We will contact you soon.</h2>";
    }
  }
  else{
	 echo "<h2>Our server is experiencing some problem, Please try again later.</h2>";
  }
?>
  </div>
</div>
<div class="wrapper row5">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Grandfone.net</a></p>
    <p class="fl_right">Designed by&nbsp;<a href="http://www.sksarts.com/" title="">SKS Arts</a></p>
  </footer>
</div>
</body>
</html>
