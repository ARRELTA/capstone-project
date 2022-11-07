<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Mon Oct 31 2022 16:23:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63423afc6a3b910e926d57ab" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>UNCP Smash Hub - Account Registration</title>
  <meta content="UNCP Smash Hub - Account Registration" property="og:title">
  <meta content="UNCP Smash Hub - Account Registration" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/uncp-ssbu.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body-a">
  <div class="bg-left"></div>
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-center-container shadow-three w-nav">
    <div class="container">
      <div class="navbar-wrapper-three">
        <a href="../index.html" class="navbar-brand-three w-nav-brand"><img src="../images/uncp-logo.svg" loading="lazy" id="UNCP-Logo" alt="" class="image"></a>
        <link rel="prerender" href="/">
        <nav role="navigation" class="nav-menu-wrapper-three w-nav-menu">
          <div class="nav-menu-three">
            <ul role="list" class="nav-menu-block w-list-unstyled">
              <li class="nav-menu-item">
                <a href="../about-us.html" target="_blank" class="nav-link non-indicator-link">About</a>
                <link rel="prefetch" href="/about-us">
              </li>
              <li class="nav-menu-item">
                <a href="../contact-us.html" class="nav-link non-indicator-link">Contact</a>
              </li>
              <li class="nav-menu-item">
                <div data-hover="false" data-delay="0" class="nav-dropdown w-dropdown">
                  <div class="nav-dropdown-toggle w-dropdown-toggle">
                    <div class="text-block">Tournaments</div>
                    <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                  </div>
                  <nav class="nav-dropdown-list shadow-three mobile-shadow-hide w-dropdown-list">
                    <a href="../tournaments/view-tournaments.html" class="nav-dropdown-link w-dropdown-link">Upcoming</a>
                    <a href="../tournaments/view-tournaments.html" class="nav-dropdown-link w-dropdown-link">Ongoing</a>
                    <a href="#" class="nav-dropdown-link w-dropdown-link">Recent Winners</a>
                    <a href="../tournaments/new-tournament.html" class="nav-dropdown-link admin-link w-dropdown-link">Create Tournament</a>
                    <a href="../tournaments/delete-tournament.html" class="nav-dropdown-link admin-link w-dropdown-link">Delete Tournament</a>
                    <a href="../tournaments/edit-tournament.html" class="nav-dropdown-link admin-link w-dropdown-link">Edit Tournament</a>
                  </nav>
                </div>
              </li>
            </ul>
            <ul role="list" class="nav-menu-block w-list-unstyled">
              <li class="nav-menu-item">
                <a href="../login.php" class="nav-link-accent non-indicator-link">Log In</a>
                <link rel="prerender" href="/accounts/login">
              </li>
              <li class="mobile-margin-top-10">
                <a href="../accounts/register.html" aria-current="page" class="button-primary w-button w--current">CREATE ACCOUNT</a>
                <link rel="prerender" href="/accounts/register">
              </li>
            </ul>
          </div>
        </nav>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-4 wf-section">
    <div class="div-block-2">
      <div class="login-container w-container">
        <h1 class="login-header">-Account Registration-</h1>
        <div class="text-block-2">Come one, come all.</div>
        <div class="div-block-3"></div>
        <div class="form-block w-form">
          <form id="wf-form-Registration-Form" name="wf-form-Registration-Form" data-name="Registration Form"  method="post" action="includes/register_account.php" class="form registration-form">
            <div class="w-layout-grid grid">
              <div class="registration-divider"><label for="name" class="field-label">First Name</label><input type="text" class="login-field w-input" maxlength="256" name="F_Name" data-name="F_Name" placeholder="e.g. John" id="name" required=""></div>
              <div class="registration-divider"><label for="email-4" class="field-label">Last Name</label><input type="text" class="login-field w-input" maxlength="256" name="L_Name" data-name="L_Name" placeholder="e.g. Doe" id="email-4" required=""></div>
              <div class="registration-divider"><label for="Email-5" class="field-label-2">Email Address</label><input type="email" class="login-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="e.x. user@domain.com" id="Email-5" required=""></div>
              <div class="registration-divider"><label for="email-4" class="field-label">Username</label><input type="text" class="login-field w-input" maxlength="256" name="displayname" data-name="displayname" placeholder="e.g. JDoe11" id="email-4" required=""></div>
              <div class="registration-divider"><label for="Password" class="field-label">Password</label><input type="password" class="login-field w-input" maxlength="256" name="PWD" data-name="PWD" placeholder="" id="Password" required=""></div>
              <div class="registration-divider"><label for="Confirm-Password" class="field-label">Confirm Password</label><input type="password" class="login-field password-field w-input" maxlength="256" name="cPWD" data-name="cPWD" placeholder="" id="Confirm-Password" required=""></div>
            </div>
            <div class="div-block-3"></div><button type="submit" name="submit" value="Submit" class="button-primary form-button w-button">
          </form>
		  <p>Submit</p>
        </div>
		<?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invalidUname") {
        echo "<p>Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
      }
	  else if ($_GET["error"] == "passwordTooshort") {
        echo "<p>Password must be at least 8 chars!</p>";
      }
      else if ($_GET["error"] == "passwordMismatch") {
        echo "<p>Passwords don't match!</p>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong!</p>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username already taken!</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
    }
  ?>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6341b48ee2412d37b9bc61cf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>