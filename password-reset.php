<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 30 2022 23:33:55 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6351cb89c22c17b3dc715c44" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>UNCP Smash Hub - Password Reset</title>
  <meta content="UNCP Smash Hub - Password Reset" property="og:title">
  <meta content="UNCP Smash Hub - Password Reset" property="twitter:title">
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
  <div id="BG" class="bg"></div>
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
                <a href="../accounts/login.html" class="nav-link-accent non-indicator-link">Log In</a>
                <link rel="prerender" href="/accounts/login">
              </li>
              <li class="mobile-margin-top-10">
                <a href="../accounts/register.html" class="button-primary w-button">CREATE ACCOUNT</a>
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
    <div class="div-block-2 reset-div">
      <div class="login-container w-container">
        <h1 class="login-header">-Password Reset-</h1>
        <div class="text-block-2">Bring in the new you.</div>
        <div class="div-block-3"></div>
        <div class="form-block w-form">
          <form id="wf-form-Login-Form" name="wf-form-Login-Form" data-name="Login Form" method="post" class="form password-reset-form">
            <div class="w-layout-grid grid-2">
              <div class="registration-divider"><label for="name" class="field-label-2">Password</label><input type="text" class="login-field w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required=""></div>
              <div class="registration-divider"><label for="email" class="field-label-2">Confirm Password</label><input type="email" class="login-field w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="email" required=""></div>
            </div>
            <div class="div-block-3"></div>
            <div class="w-form-formrecaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled g-recaptcha-invalid-key"></div>
            <div class="div-block-3"></div><input type="submit" data-wait="Wait..." value="Submit" class="button-primary form-button w-button">
            <div class="div-block-3"></div>
          </form>
          <div class="success-message w-form-done">
            <div>You should be logged in right about now...<br><br>If that isn&#x27;t the case, <a href="#">click here</a>.</div>
          </div>
          <div class="error-message w-form-fail">
            <div class="error-title">Something went wrong...</div>
            <div class="error-message reset-message">Make sure you&#x27;re entering your passwords match prior to submission.</div>
          </div>
        </div>
        <div class="div-block-5"></div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6341b48ee2412d37b9bc61cf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>