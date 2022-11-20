<head>
  <meta charset="utf-8">
  <title>Internal Server Error</title>
  <meta content="Internal Server Error" property="og:title">
  <meta content="Internal Server Error" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/uncp-ssbu.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="utility-page-wrap">
    <div class="utility-page-content"><img src="images/internal-server-error.png" loading="lazy" srcset="images/internal-server-error.png 500w" sizes="(max-width: 479px) 100vw, 325px" alt="" class="image-4">
      <h2>Internal Server Error</h2>
	  <?php
		$num = rand(1,5);
		switch ($num) {
			case 1:
				echo "<div>Server machine&#x27;s broke, come back later.</div>"; break;
			case 2:
				echo "<div>Something went wrong on our end.\nWe&#x27;re working on it.</div>"; break;
			case 3:
				echo "<div>Bottom Text</div>"; break;
			case 4:
				echo "<div>Nothing's exploding...we think.\nTry again later.</div>"; break;
			case 5:
				echo "<div>You might wanna reload the page.</div>"; break;
		}
	  ?>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6341b48ee2412d37b9bc61cf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>