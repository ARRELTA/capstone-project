<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 30 2022 23:33:55 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6359bf67d68d8142a3c4f7b9" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>Edit Tournament</title>
  <meta content="Edit Tournament" property="og:title">
  <meta content="Edit Tournament" property="twitter:title">
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
        <h1 class="login-header">-Edit Tournament-</h1>
        <div class="text-block-2">Because life sucks sometimes.</div>
        <div class="form-block w-form">
          <form id="wf-form-Tourn-Create-Form" name="wf-form-Tourney-Creation-Form" data-name="Tourney Creation Form" method="post" action="../accounts/includes/tour_functions.php" class="form registration-form">
            <div id="w-node-_8d5d83a4-a27b-4fac-0296-7102b3651e5b-a3c4f7b9" class="registration-divider tournament-divider"><label for="Tournament-ID" class="field-label">Tournament ID or URL</label><input type="text" class="login-field id-field w-input" maxlength="256" name="Tournament-ID" data-name="Tournament-ID" placeholder="" id="Tournament-ID" required=""></div>
            <div class="w-layout-grid grid-3 edit-grid">
              <div id="w-node-ef20ee92-3eaf-930c-1162-18f4746b3517-a3c4f7b9" class="registration-divider tournament-divider"><label for="Tourney-Title" class="field-label">Title</label><input type="text" class="login-field w-input" maxlength="256" name="Tourney-Title" data-name="Tourney-Title" placeholder="e.g. John" id="Tourney-Title"></div>
              <div id="w-node-_8103de59-c632-97d3-9531-640b9672d9a6-a3c4f7b9" class="registration-divider tournament-divider"><label for="Tourney-Type" class="field-label">Type</label><select id="Tourney-Type" name="Tourney-Type" data-name="Tourney-Type" class="select-field w-select">
                  <option value="">Select one...</option>
                  <option value="single elimination">Single Elimination</option>
                  <option value="double elimination">Double Elimination</option>
                  <option value="round robin">Round Robin</option>
                  <option value="swiss">Swiss</option>
                </select></div>
              <div id="w-node-_1dca2ac7-6807-972d-3018-e495fe6e0886-a3c4f7b9" class="registration-divider tournament-divider"><label for="Tourney-URL" class="field-label-2">URL</label><input type="text" class="login-field w-input" maxlength="256" name="Tourney-URL" data-name="Tourney-URL" placeholder="e.x. new_tournament" id="Tourney-URL"></div>
              <div id="w-node-_1dca2ac7-6807-972d-3018-e495fe6e088a-a3c4f7b9" class="registration-divider tournament-divider"><label for="Entrant-Limit" class="field-label">Entrant Limit</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Entrant-Limit" data-name="Entrant-Limit" placeholder="" id="Entrant-Limit"></div>
              <div id="w-node-_2ac18de0-5515-bfe0-0005-1ab538d87c0b-a3c4f7b9" class="registration-divider tournament-divider"><label for="StartTime_HH" class="field-label">Start Time</label>
                <div class="w-layout-grid grid-4">
					<input type="number" class="login-field duration-field w-node-_2ac18de0-5515-bfe0-0005-1ab538d87c12-a3c4f7b9 w-input" maxlength="256" name="StartTime_DD" data-name="StartTime_DD" placeholder="DD" id="StartTime_DD-2" min="1" max="31">
					<input type="number" class="login-field duration-field w-node-c7c5ca6a-26eb-85a7-1e3e-d034b85d7bde-a3c4f7b9 w-input" maxlength="256" name="StartTime_MM" data-name="StartTime_MM" placeholder="MM" id="StartTime_MM-2" min="1" max="12">
					<input type="number" class="login-field year-field w-node-d37991c8-6ae9-85a9-dab6-880e0f2b3810-a3c4f7b9 w-input" maxlength="256" name="StartTime_YYYY" data-name="Start Time_YYYY" placeholder="YYYY" id="Start-Time_YYYY" min="2000" max="9999">
					<input type="number" class="login-field duration-field w-node-_90aa041a-657e-3c34-3e14-d9994fc791ef-a3c4f7b9 w-input" maxlength="256" name="StartTime_HR" data-name="StartTime_HR" placeholder="HH" id="StartTime_HH-2" min="1" max="24">
					<input type="number" class="login-field duration-field w-node-f3efc254-fee3-0567-2e27-4dfc1733d9a8-a3c4f7b9 w-input" maxlength="256" name="StartTime_MIN" data-name="StartTime_MIN" placeholder="MM" id="StartTime_MM-3" min="0" max="59">
					<select id="daylight-field" name="Daylight" data-name="Daylight" class="login-field daylight-field w-node-_6491fa5f-95e4-b6b0-5cac-208ac723fc15-a3c4f7b9 w-select">
						<option value=>--</option>
						<option value="0">AM</option>
						<option value="12">PM</option>
					</select>
				</div>
              </div>
              <div id="w-node-_2ac18de0-5515-bfe0-0005-1ab538d87c0f-a3c4f7b9" class="registration-divider tournament-divider"><label for="CheckIn_HH" class="field-label">Check-In Duration</label>
                <div class="w-layout-grid grid-5">
					<input type="number" class="login-field duration-field w-node-a9f71769-e1fe-6be3-4387-dcf19db52157-a3c4f7b9 w-input" maxlength="256" name="CheckIn-HH" data-name="CheckIn-HH" placeholder="HH" id="CheckIn_HH-2" min="0">
					<input type="number" class="login-field duration-field w-input" maxlength="256" name="CheckIn-MM" data-name="CheckIn-MM" placeholder="MM" id="CheckIn-MM" min="0" max="55" step="5">
				</div>
              </div>
            </div>
            <div class="single-elimination-controls">
              <div class="registration-divider checkbox-div"><label class="w-checkbox checkbox-field w-clearfix">
                  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="thirdPlace" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label w-form-label" for="checkbox"><strong class="bold-text">Hold Third Place Match?</strong></span>
                </label></div>
            </div>
            <div id="double-elim-div" class="double-elimination-controls">
              <div class="registration-divider checkbox-div"><label for="Grand-Finals-Mod" class="field-label description-label">Grand Finals Modifier</label><select id="Grand-Finals-Mod" name="Grand-Finals-Mod" data-name="Grand Finals Mod" class="select-field w-select">
                  <option value="">Standard</option>
                  <option value="single match">Single Match</option>
                  <option value="skip">No Match</option>
                </select></div>
            </div>
            <div id="round-robin-div" class="round-robin-controls">
              <div class="w-layout-grid grid-7">
                <div class="registration-divider checkbox-div"><label for="Points-Match-Win" class="field-label description-label">Points for Match Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Win" data-name="Points-Match-Win" placeholder="" id="Points-Match-Win"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Match-Tie-2" class="field-label description-label">Points for Match Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Tie" data-name="Points Match Tie" placeholder="" id="Points-Match-Tie-2"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Win" class="field-label description-label">Points for Game Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Win" data-name="Points Game Win" placeholder="" id="Points-Game-Win"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Tie-2" class="field-label description-label">Points for Game Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Tie" data-name="Points Game Tie" placeholder="" id="Points-Game-Tie-2""></div>
              </div>
            </div>
            <div id="round-robin-div" class="swiss-controls">
              <div class="w-layout-grid grid-6">
                <div class="registration-divider checkbox-div"><label for="Points-Match-Win-S" class="field-label description-label">Points for Match Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Win-S" data-name="Points Match Win S" placeholder="" id="Points-Match-Win-S"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Match-Tie-S-2" class="field-label description-label">Points for Match Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Tie-S" data-name="Points Match Tie S" placeholder="" id="Points-Match-Tie-S"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Win-S" class="field-label description-label">Points for Game Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Win-S" data-name="Points Game Win S" placeholder="" id="Points-Game-Win-S"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Tie-S" class="field-label description-label">Points for Game Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Tie-S" data-name="Points Game Tie S" placeholder="" id="Points-Game-Tie-S"></div>
                <div class="registration-divider checkbox-div"><label for="Points-Bye-S-2" class="field-label description-label">Points for Bye</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Bye-S" data-name="Points Bye S" placeholder="" id="Points-Bye-S-2"></div>
                <div class="registration-divider checkbox-div"><label for="Rounds-Number-S-2" class="field-label description-label">Number of Rounds</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Rounds-Number-S" data-name="Rounds Number S" placeholder="" id="Rounds-Number-S-2"></div>
              </div>
            </div>
            <div class="div-block-4 description-block">
              <div class="w-layout-grid grid-9">
                <div id="w-node-_54389415-6d95-f368-abec-f9078a4df58e-a3c4f7b9">
					<label for="Tourney-Desc" class="field-label description-label">Description / Instructions</label>
					<textarea id="Tourney-Description" name="Tourney-Description" maxlength="5000" data-name="Tourney-Description" placeholder="Add your message or instructions here!" class="login-field description-field w-input"></textarea>
				</div>
                <div class="w-form-formrecaptcha recaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled g-recaptcha-invalid-key"></div>
              </div>
            </div><input type="submit" data-wait="Wait..." name="ALTER" value="Submit" class="button-primary form-button w-button">
          </form>
          <div class="success-message w-form-done">
            <div>You should be logged in right about now...<br><br>If that isn&#x27;t the case, <a href="#">click here</a>.</div>
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
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>