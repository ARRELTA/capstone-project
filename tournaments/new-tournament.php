<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 30 2022 23:33:55 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63558614c396aeb2114d5da7" data-wf-site="6341b48ee2412d37b9bc61cf">
<head>
  <meta charset="utf-8">
  <title>UNCP Smash Hub - New Tournament</title>
  <meta content="UNCP Smash Hub - New Tournament" property="og:title">
  <meta content="UNCP Smash Hub - New Tournament" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/uncp-ssbu.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <!-- Navbar scripting-->
  <script src="../js/modular_navbar.js" type="text/javascript" defer></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body-a">
  <div class="bg-tourney"></div>
  <navbar-modular></navbar-modular>
  <div class="section-4 wf-section">
    <div class="div-block-2">
      <div class="login-container w-container">
        <h1 class="login-header">-New Tournament-</h1>
        <div class="text-block-2">For when boredom fails you.</div>
        <div class="form-block w-form">
          <form id="wf-form-Tourn-Create-Form" name="wf-form-Tourney-Creation-Form" data-name="Tourney Creation Form" method="post" class="form registration-form">
            <div class="w-layout-grid grid-3">
              <div id="w-node-ef20ee92-3eaf-930c-1162-18f4746b3517-114d5da7" class="registration-divider tournament-divider"><label for="Tourney-Title" class="field-label">Title</label><input type="text" class="login-field w-input" maxlength="256" name="Tourney-Title" data-name="Tourney-Title" placeholder="e.g. John" id="Tourney-Title" required=""></div>
              <div id="w-node-_8103de59-c632-97d3-9531-640b9672d9a6-114d5da7" class="registration-divider tournament-divider"><label for="Tourney-Type" class="field-label">Type</label><select id="Tourney-Type" name="Tourney-Type" data-name="Tourney-Type" required="" class="select-field w-select">
                  <option value="">Select one...</option>
                  <option value="single">Single Elimination</option>
                  <option value="double">Double Elimination</option>
                  <option value="round">Round Robin</option>
                  <option value="swiss">Swiss</option>
                </select></div>
              <div id="w-node-_1dca2ac7-6807-972d-3018-e495fe6e0886-114d5da7" class="registration-divider tournament-divider"><label for="Tourney-URL" class="field-label-2">URL</label><input type="text" class="login-field w-input" maxlength="256" name="Tourney-URL" data-name="Tourney-URL" placeholder="e.x. new_tournament" id="Tourney-URL"></div>
              <div id="w-node-_1dca2ac7-6807-972d-3018-e495fe6e088a-114d5da7" class="registration-divider tournament-divider"><label for="Entrant-Limit" class="field-label">Entrant Limit</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Entrant-Limit" data-name="Entrant-Limit" placeholder="" id="Entrant-Limit"></div>
              <div id="w-node-_2ac18de0-5515-bfe0-0005-1ab538d87c0b-114d5da7" class="registration-divider tournament-divider"><label for="StartTime_HH" class="field-label">Start Time</label>
                <div class="w-layout-grid grid-4"><input type="number" class="login-field duration-field w-node-_2ac18de0-5515-bfe0-0005-1ab538d87c12-114d5da7 w-input" maxlength="256" name="StartTime_DD" data-name="StartTime_DD" placeholder="DD" id="StartTime_DD-2" required=""><input type="number" class="login-field duration-field w-node-c7c5ca6a-26eb-85a7-1e3e-d034b85d7bde-114d5da7 w-input" maxlength="256" name="StartTime_MM" data-name="StartTime_MM" placeholder="MM" id="StartTime_MM-2" required=""><input type="number" class="login-field year-field w-node-d37991c8-6ae9-85a9-dab6-880e0f2b3810-114d5da7 w-input" maxlength="256" name="Start-Time_YYYY" data-name="Start Time_YYYY" placeholder="YYYY" id="Start-Time_YYYY" required=""><input type="number" class="login-field duration-field w-node-_90aa041a-657e-3c34-3e14-d9994fc791ef-114d5da7 w-input" maxlength="256" name="StartTime_HH" data-name="StartTime_HH" placeholder="HH" id="StartTime_HH-2" required=""><input type="number" class="login-field duration-field w-node-f3efc254-fee3-0567-2e27-4dfc1733d9a8-114d5da7 w-input" maxlength="256" name="StartTime_MM" data-name="StartTime_MM" placeholder="MM" id="StartTime_MM-3" required=""><select id="daylight-field" name="Daylight" data-name="Daylight" required="" class="login-field daylight-field w-node-_6491fa5f-95e4-b6b0-5cac-208ac723fc15-114d5da7 w-select">
                    <option value="0">AM</option>
                    <option value="12">PM</option>
                  </select></div>
              </div>
              <div id="w-node-_2ac18de0-5515-bfe0-0005-1ab538d87c0f-114d5da7" class="registration-divider tournament-divider"><label for="CheckIn_HH" class="field-label">Check-In Duration</label>
                <div class="w-layout-grid grid-5"><input type="number" class="login-field duration-field w-node-a9f71769-e1fe-6be3-4387-dcf19db52157-114d5da7 w-input" maxlength="256" name="CheckIn_HH-2" data-name="Check In HH 2" placeholder="HH" id="CheckIn_HH-2" required=""><input type="number" class="login-field duration-field w-input" maxlength="256" name="CheckIn-MM" data-name="CheckIn-MM" placeholder="MM" id="CheckIn-MM" required=""></div>
              </div>
            </div>
            <div class="single-elimination-controls">
              <div class="registration-divider checkbox-div"><label class="w-checkbox checkbox-field w-clearfix">
                  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label w-form-label" for="checkbox"><strong class="bold-text">Hold Third Place Match?</strong></span>
                </label></div>
            </div>
            <div id="double-elim-div" class="double-elimination-controls">
              <div class="registration-divider checkbox-div"><label for="Grand-Finals-Mod" class="field-label description-label">Grand Finals Modifier</label><select id="Grand-Finals-Mod" name="Grand-Finals-Mod" data-name="Grand Finals Mod" required="" class="select-field w-select">
                  <option value="">Standard</option>
                  <option value="single match">Single Match</option>
                  <option value="skip">No Match</option>
                </select></div>
            </div>
            <div id="round-robin-div" class="round-robin-controls">
              <div class="w-layout-grid grid-7">
                <div class="registration-divider checkbox-div"><label for="Points-Match-Win" class="field-label description-label">Points for Match Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Win" data-name="Points-Match-Win" placeholder="" id="Points-Match-Win" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Match-Tie-2" class="field-label description-label">Points for Match Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Tie" data-name="Points Match Tie" placeholder="" id="Points-Match-Tie-2" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Win" class="field-label description-label">Points for Game Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Win" data-name="Points Game Win" placeholder="" id="Points-Game-Win" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Tie-2" class="field-label description-label">Points for Game Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Tie" data-name="Points Game Tie" placeholder="" id="Points-Game-Tie-2" required=""></div>
              </div>
            </div>
            <div id="round-robin-div" class="swiss-controls">
              <div class="w-layout-grid grid-6">
                <div class="registration-divider checkbox-div"><label for="Points-Match-Win-S" class="field-label description-label">Points for Match Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Win-S" data-name="Points Match Win S" placeholder="" id="Points-Match-Win-S" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Match-Tie-S-2" class="field-label description-label">Points for Match Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Match-Tie-S" data-name="Points Match Tie S" placeholder="" id="Points-Match-Tie-S-2" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Win-S" class="field-label description-label">Points for Game Win</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Win-S" data-name="Points Game Win S" placeholder="" id="Points-Game-Win-S" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Game-Tie-S" class="field-label description-label">Points for Game Tie</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Game-Tie-S" data-name="Points Game Tie S" placeholder="" id="Points-Game-Tie-S" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Points-Bye-S-2" class="field-label description-label">Points for Bye</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Points-Bye-S" data-name="Points Bye S" placeholder="" id="Points-Bye-S-2" required=""></div>
                <div class="registration-divider checkbox-div"><label for="Rounds-Number-S-2" class="field-label description-label">Number of Rounds</label><input type="number" class="login-field number-field w-input" maxlength="256" name="Rounds-Number-S" data-name="Rounds Number S" placeholder="" id="Rounds-Number-S-2" required=""></div>
              </div>
            </div>
            <div class="div-block-4 description-block"><label for="Tourney-Desc" class="field-label description-label">Description / Instructions</label><textarea id="Tourney-Desc" name="Tourney-Desc" maxlength="5000" data-name="field" placeholder="Add your message or instructions here!" class="login-field description-field w-input"></textarea></div>
            <div class="w-form-formrecaptcha recaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled g-recaptcha-invalid-key"></div><input type="submit" data-wait="Wait..." value="Submit" class="button-primary form-button w-button">
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