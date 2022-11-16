<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 30 2022 23:33:55 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6359c6304f48fc14656efbde" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>Delete Tournament</title>
  <meta content="Delete Tournament" property="og:title">
  <meta content="Delete Tournament" property="twitter:title">
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
  <div class="bg-tourney"></div>
  <?php include_once '../accounts/includes/navbar.php'; ?>
  <div class="section-4 wf-section">
    <div class="div-block-2">
      <div class="login-container w-container">
        <h1 class="login-header">-Delete Tournament-</h1>
        <div class="text-block-2">You had one job.</div>
        <div class="form-block w-form">
          <form id="wf-form-Tourn-Create-Form" name="wf-form-Tourney-Creation-Form" data-name="Tourney Creation Form" method="post" class="form registration-form">
            <div class="w-layout-grid grid-2">
              <div id="w-node-_1dca2ac7-6807-972d-3018-e495fe6e088a-656efbde" class="registration-divider tournament-divider"><label for="Tournament-ID" class="field-label">Tournament ID</label><input type="number" class="login-field id-field w-input" maxlength="256" name="Entrant-Limit" data-name="Entrant-Limit" placeholder="" id="Tournament-ID" required=""></div>
              <div id="w-node-ea276d77-aba3-1c4e-0a8f-5c2e7a863d71-656efbde" class="registration-divider tournament-divider"><label for="Tournament-ID-Confirm" class="field-label">Confirm Tournament ID</label><input type="number" class="login-field id-field w-input" maxlength="256" name="Entrant-Limit" data-name="Entrant-Limit" placeholder="" id="Tournament-ID-Confirm" required=""></div>
            </div>
            <div class="w-form-formrecaptcha recaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled g-recaptcha-invalid-key"></div><input type="submit" data-wait="Wait..." value="Submit" class="button-primary form-button w-button">
          </form>
          <div class="success-message w-form-done">
            <div>The tournament should be gone...<br><br>Go check the relevant tournaments page to make sure.</div>
          </div>
          <div class="error-message w-form-fail">
            <div class="error-title">Something went wrong...</div>
            <div class="error-message">Make sure you&#x27;re entering your credentials in correctly prior to submission.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6341b48ee2412d37b9bc61cf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>