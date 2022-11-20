<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 30 2022 23:33:55 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6359bb262d17d149c8b4b277" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>View Tournaments</title>
  <meta content="Ongoing Tournaments" property="og:title">
  <meta content="Ongoing Tournaments" property="twitter:title">
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
      <div class="div-block-11">
        <h1 class="heading-3">-View Tournaments-</h1>
        <div class="margin-bottom-24px-2">Onward, to victory!</div>
        <div class="login-container w-container">
          <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
            <div class="tabs-menu w-tab-menu">
              <a data-w-tab="Tab 1" class="tab-link-tab-1 w-inline-block w-tab-link w--current">
                <div class="text-block-5">UPCOMING</div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
                <div class="text-block-6">ONGOING</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
                <div class="text-block-7">FINISHED</div>
              </a>
            </div>
            <div class="w-tab-content">
              <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
                <div class="w-layout-grid grid-10">
                  <div id="w-node-a6694525-c603-8d95-f4fe-92c34208f48a-c8b4b277">Tournament ID</div>
                  <div id="w-node-_06632bd5-ea28-a304-4fc1-829cebe5f9cf-c8b4b277">Name</div>
                  <div id="w-node-_8149847c-c36f-ab6c-4095-a975a333a24c-c8b4b277">Date</div>
                  <div id="w-node-c5d7bf9e-7f24-a922-5e58-f2e0c28c791f-c8b4b277">Time</div>
                  <div id="w-node-_541d323d-ef66-d04c-f037-739ed5e4352b-c8b4b277">Entrants</div>
                  <div id="w-node-d449dc05-9191-7901-017a-d0f822135d68-c8b4b277">Link</div>
                </div>
                <div class="div-block-15">
                  <div class="w-layout-grid grid-14">
                    <div id="w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277" class="div-block-14">
                      <div id="w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277" class="text-block-8">Tournament ID</div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane">
                <div class="w-layout-grid grid-10">
                  <div id="w-node-_52ab7a58-ae2d-27c7-e440-2ef55366eefa-c8b4b277">Tournament ID</div>
                  <div id="w-node-_52ab7a58-ae2d-27c7-e440-2ef55366eefc-c8b4b277">Name</div>
                  <div id="w-node-_52ab7a58-ae2d-27c7-e440-2ef55366eefe-c8b4b277">Date</div>
                  <div id="w-node-_52ab7a58-ae2d-27c7-e440-2ef55366ef00-c8b4b277">Time</div>
                  <div id="w-node-_52ab7a58-ae2d-27c7-e440-2ef55366ef02-c8b4b277">Entrants</div>
                  <div id="w-node-_52ab7a58-ae2d-27c7-e440-2ef55366ef04-c8b4b277">Link</div>
                </div>
              </div>
              <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane">
                <div class="w-layout-grid grid-10">
                  <div id="w-node-_2862b524-9a7f-d40f-41a8-0f879ff9a9a4-c8b4b277">Tournament ID</div>
                  <div id="w-node-_2862b524-9a7f-d40f-41a8-0f879ff9a9a6-c8b4b277">Name</div>
                  <div id="w-node-_2862b524-9a7f-d40f-41a8-0f879ff9a9a8-c8b4b277">Date</div>
                  <div id="w-node-_2862b524-9a7f-d40f-41a8-0f879ff9a9aa-c8b4b277">Time</div>
                  <div id="w-node-_2862b524-9a7f-d40f-41a8-0f879ff9a9ac-c8b4b277">Entrants</div>
                  <div id="w-node-_2862b524-9a7f-d40f-41a8-0f879ff9a9ae-c8b4b277">Link</div>
                </div>
              </div>
            </div>
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