<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 30 2022 23:33:55 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63423cb0e45e01666de6a92e" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>UNCP Smash Hub - Account Login</title>
  <meta content="UNCP Smash Hub - Account Login" property="og:title">
  <meta content="UNCP Smash Hub - Account Login" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/uncp-ssbu.webflow.css" rel="stylesheet" type="text/css">
  <!-- Navbar scripting-->
  <script src="../../js/modular_navbar.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body-a">
  <div class="bg-right"></div>
  <navbar-modular></navbar-modular>
  <div class="section-5 wf-section">
    <div class="div-block-2">
      <div class="login-container w-container">
        <h1 class="login-header">-Account Login-</h1>
        <div class="text-block-2">Login to get started.</div>
        <div class="div-block-3"></div>
        <div class="form-block w-form">
          <form id="wf-form-Login-Form" name="wf-form-Login-Form" data-name="Login Form" method="post" action="./includes/login_account.php" class="form">
            <div class="w-layout-grid grid-2">
              <div class="registration-divider"><label for="username" class="field-label-2">Username or Email</label><input type="text" class="login-field w-input" maxlength="256" name="displayname" data-name="Username" placeholder="" id="username" required=""></div>
              <div class="registration-divider"><label for="password" class="field-label-2">Password</label><input type="password" class="login-field w-input" maxlength="256" name="PWD" data-name="Password" placeholder="" id="pwd" required=""></div>
            </div>
            <div class="div-block-3"></div><button type="submit" name="submit" value="Submit" class="button-primary form-button w-button">
            <div class="div-block-3"></div>
          </form>
		  <p>Submit</p>
        </div>
		<?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
		?>
        <div class="div-block-5">
          <div>Password not working? Click <a href="../accounts/password-reset.html">here</a>
            <link rel="prefetch" href="/accounts/password-reset">.
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6341b48ee2412d37b9bc61cf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>