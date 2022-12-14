<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Mon Nov 14 2022 01:26:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6341b48ee2412d15e8bc61d0" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>UNCP Smash Hub - Home</title>
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
<body class="body-a">
  <div id="BG" class="bg"></div>
  <?php require_once './accounts/includes/navbar.php'; ?>
  <div class="div-block home-panel" id="homepanel">
    <div class="div-block-9"></div>
    <div class="w-layout-grid home-grid">
      <div class="hero-container w-container">
        <section class="hero-without-image-2 wf-section">
          <div class="container-2">
            <div class="hero-wrapper-two">
              <h1 class="heading-3">Free To Play, Free For All.</h1>
              <p class="margin-bottom-24px-2">The Super Smash Brothers franchise prides itself on its character inclusivity; we&#x27;re the same with your university&#x27;s students. Account creation costs nothing, as is tournament admission.</p>
              <div class="w-layout-grid grid-11">
                <a href="https://discord.gg/mB2c7Q43Tv" target="_blank" class="button-primary-2 w-button">VISIT OUR??DISCORD!</a>
                <a id="tourney-button" href="#" class="button-primary-2 w-button" onclick="showPopup()">TOURNAMENTS</a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <section class="testimonial-slider-small-2 wf-section">
        <div class="container-2">
          <h2 class="centered-heading">Loud and Proud.</h2>
          <p class="centered-subheading">The in-game fighters aren&#x27;t quiet, and neither are our members! Hear what some of them have to say about us.</p>
          <div data-delay="4000" data-animation="slide" class="testimonial-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="true" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="w-slider-mask">
              <div class="testimonial-slide-wrapper w-slide">
                <div class="testimonial-card">
                  <p class="testimonial-paragraph">Blah Blah Blah<br>???</p>
                  <div class="testimonial-info"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a28a812aad9_placeholder%202.svg" loading="lazy" alt="" class="testimonial-image">
                    <div>
                      <h3 class="testimonial-author">MaskedKing</h3>
                      <div class="tagline">High-Level Player</div>
                    </div>
                    <div class="testimonial-icon-wrapper"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a6c9412aae6_double-quotes-l.svg" loading="lazy" alt="" class="testimonial-quote"></div>
                  </div>
                </div>
              </div>
              <div class="testimonial-slide-wrapper w-slide">
                <div class="testimonial-card">
                  <p class="testimonial-paragraph">If your up a million miles, your opponent&#x27;s only win condition is probably you SD&#x27;ing.<br>???<br>If you play risky offstage or near the edges even and SD, you got outplayed by an opponent who understood their win condition.<br>???<br>Of course tact is involved, you&#x27;d never say that to a person.</p>
                  <div class="testimonial-info"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a28a812aad9_placeholder%202.svg" loading="lazy" alt="" class="testimonial-image">
                    <div>
                      <h3 class="testimonial-author">LocusSK</h3>
                      <div class="tagline">High-Level Player</div>
                    </div>
                    <div class="testimonial-icon-wrapper"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a6c9412aae6_double-quotes-l.svg" loading="lazy" alt="" class="testimonial-quote"></div>
                  </div>
                </div>
              </div>
              <div class="testimonial-slide-wrapper w-slide">
                <div class="testimonial-card">
                  <p class="testimonial-paragraph">Blah</p>
                  <div class="testimonial-info"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a28a812aad9_placeholder%202.svg" loading="lazy" alt="" class="testimonial-image">
                    <div>
                      <h3 class="testimonial-author">???</h3>
                      <div class="tagline">Player</div>
                    </div>
                    <div class="testimonial-icon-wrapper"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a6c9412aae6_double-quotes-l.svg" loading="lazy" alt="" class="testimonial-quote"></div>
                  </div>
                </div>
              </div>
              <div class="testimonial-slide-wrapper w-slide">
                <div class="testimonial-card">
                  <p class="testimonial-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  <div class="testimonial-info"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a28a812aad9_placeholder%202.svg" loading="lazy" alt="" class="testimonial-image">
                    <div>
                      <h3 class="testimonial-author">Profile name</h3>
                      <div class="tagline">CEO / Creative IT</div>
                    </div>
                    <div class="testimonial-icon-wrapper"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a6c9412aae6_double-quotes-l.svg" loading="lazy" alt="" class="testimonial-quote"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonial-slider-left w-slider-arrow-left">
              <div class="arrow-wrapper"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a0e4912aadb_Chevron%20right-1.svg" loading="lazy" alt="Slider (Right)" class="slider-arrow-embed"></div>
            </div>
            <div class="testimonial-slider-right w-slider-arrow-right">
              <div class="arrow-wrapper"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a7ce212aacc_Chevron%20right.svg" loading="lazy" alt="Slider (Left)" class="slider-arrow-embed"></div>
            </div>
            <div class="testimonial-slide-nav w-slider-nav w-round"></div>
          </div>
        </div>
      </section>
      <section class="logos-quote-divider wf-section">
        <div class="container-3">
          <div class="clients-wrapper-two">
            <div class="clients-info-two">
              <div class="clients-quote-two">A Little Incentive Never Hurt Anybody.</div>
              <div class="clients-divider"></div>
              <div class="clients-info">
                <div class="text-block-3">Take a look at some of the gift cards we offer to tournament medalists.</div>
              </div>
            </div>
            <div class="clients-grid"><img src="images/visa-logo.png" loading="lazy" id="w-node-_81650f77-0805-4571-e1b3-b6579bcb7716-e8bc61d0" alt="Ephicient logo" class="clients-image-two"><img src="images/logo_steam.svg" loading="lazy" id="w-node-_81650f77-0805-4571-e1b3-b6579bcb7717-e8bc61d0" alt="OE logo" class="clients-image-two"><img src="images/brandhistory_mc1996_100_2x.png" loading="lazy" id="w-node-_81650f77-0805-4571-e1b3-b6579bcb7718-e8bc61d0" srcset="images/brandhistory_mc1996_100_2x-p-500.png 500w, images/brandhistory_mc1996_100_2x-p-800.png 800w, images/brandhistory_mc1996_100_2x-p-1080.png 1080w, images/brandhistory_mc1996_100_2x.png 1200w" alt="2020INC logo" sizes="161.71875px" class="clients-image-two"><img src="images/Nintendo_red_logo.svg.png" loading="lazy" id="w-node-_81650f77-0805-4571-e1b3-b6579bcb7719-e8bc61d0" srcset="images/Nintendo_red_logo.svg-p-500.png 500w, images/Nintendo_red_logo.svg-p-800.png 800w, images/Nintendo_red_logo.svg-p-1080.png 1080w, images/Nintendo_red_logo.svg.png 1280w" alt="The Paak logo" sizes="200px" class="clients-image-two"><img src="images/Amazon_icon.svg.png" loading="lazy" id="w-node-_81650f77-0805-4571-e1b3-b6579bcb771a-e8bc61d0" srcset="images/Amazon_icon.svg-p-500.png 500w, images/Amazon_icon.svg-p-800.png 800w, images/Amazon_icon.svg-p-1080.png 1080w, images/Amazon_icon.svg-p-1600.png 1600w, images/Amazon_icon.svg-p-2000.png 2000w, images/Amazon_icon.svg.png 2500w" alt="Pipelinx.co logo" sizes="100px" class="clients-image-two"><img src="images/blockbuster-logo.svg" loading="lazy" id="w-node-_81650f77-0805-4571-e1b3-b6579bcb771b-e8bc61d0" alt="AriseHealth logo" class="clients-image-two"></div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div id="tourney-popup" class="div-block tourney-panel">
    <div class="div-block-12">
      <div>
        <h1 class="heading-3 tourney-heading">-Tournaments Menu-</h1>
      </div>
      <div class="container-6 w-container">
        <a id="ongoing-tourneys" href="./tournaments/view-tournaments.php" class="tourney-button w-button">VIEW<br>TOURNAMENTS</a>
        <a id="winners-circle" href="#" class="tourney-button w-button">WINNER&#x27;S<br>CIRCLE</a>
		<?php
			if (isset($_SESSION["userName"])) {
				echo "<a href='./tournaments/new-tournament.php' class='tourney-button w-button'>CREATE<br>TOURNAMENT</a>";
				echo "<a href='./tournaments/edit-tournament.php' class='tourney-button w-button'>EDIT<br>TOURNAMENT</a>";
				echo "<a href='./tournaments/delete-tournament.php' class='tourney-button w-button'>DELETE<br>TOURNAMENT</a>";
			}
        ?>
      </div>
	  <p class="margin-bottom-24px-2" onclick="hidePopup()">Back To Home</p>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6341b48ee2412d37b9bc61cf" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
	// When the user clicks on <div>, open the popup
	function showPopup() {
	var popup = document.getElementById("tourney-popup");
	popup.style.display="inline-flex";
	}
  </script>
  <script>
	// When the user clicks on <div>, open the popup
	function hidePopup() {
	var popup = document.getElementById("tourney-popup");
	popup.style.display="none";
	}
  </script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>