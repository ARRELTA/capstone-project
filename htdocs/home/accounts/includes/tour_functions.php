<?php

	include_once './functions.php';
	if (isset($_POST["CREATE"]) || isset($_POST["ALTER"])) {
		
		//Main Parameters
		$title = $_POST["Tourney-Title"]; 
		$type = $_POST["Tourney-Type"];
		$url = $_POST["Tourney-URL"];
		$entrants = $_POST["Entrant-Limit"];
		$year = sprintf('%04d', $_POST["StartTime_YYYY"]); if ($year < 1000) {$year+= 2000;}
		$month = sprintf('%02d', $_POST["StartTime_MM"]); 
		$day = sprintf('%02d', $_POST["StartTime_DD"]);
		$hour = ($_POST["StartTime_HR"] == 12 ? 0 : $_POST["StartTime_HR"]); $hour = sprintf('%02d', $hour + $_POST["Daylight"]); 
		$minute = sprintf('%02d', $_POST["StartTime_MIN"]);
		$checkIn = $_POST["CheckIn-HH"]*60+$_POST["CheckIn-MM"];
		
		$desc = (isset($_POST["Tourney-Description"]) ? $_POST["Tourney-Description"] : " ");
		$tid = (isset($_POST["ALTER"]) ? $_POST["Tournament-ID"] : " ");
	
		//Clean data
		mass_clean($title, $type, $url, $entrants, $desc);		
		data_clean($tid);
		//Additional Parameters
		$thirdPlaceMatch = (isset($_POST["thirdPlace"]) ? $_POST["thirdPlace"] : true);
		$grandFinalsModifier = (isset($_POST["Grand Finals Mod"]) ? $_POST["Grand Finals Mod"] : null); 
		$ptsMatchWin = (isset($_POST["Points Match Win"]) ? $_POST["Points Match Win"] : 1.0); 
		$ptsMatchTie = (isset($_POST["Points Match Tie"]) ? $_POST["Points Match Tie"] : 0.5);
		$ptsGameWin = (isset($_POST["Points Game Win"]) ? $_POST["Points Game Win"] : 1.0);
		$ptsGameTie = (isset($_POST["Points Game Tie"]) ? $_POST["Points Game Tie"] : 1.0);
		$ptsMatchWinS = (isset($_POST["Points Match Win S"]) ? $_POST["Points Match Win S"] : 1.0);
		$ptsMatchTieS = (isset($_POST["Points Match Tie S"]) ? $_POST["Points Match Tie S"] : 0.5);
		$ptsGameWinS = (isset($_POST["Points Game Win S"]) ? $_POST["Points Game Win S"] : 1.0);
		$ptsGameTieS = (isset($_POST["Points Game Tie S"]) ? $_POST["Points Game Tie S"] : 1.0);
		$ptsByeS = (isset($_POST["Points Bye S"]) ? $_POST["Points Bye S"] : 1.0);
		$roundNumberS = (isset($_POST["Rounds Number S"]) ? $_POST["Rounds Number S"] : ceil($entrants*0.334));
	
		//Clean data
		mass_clean($thirdPlaceMatch, $grandFinalsModifier, $ptsMatchWin, $ptsMatchTie, $ptsGameWin, $ptsGameTie, 
		$ptsMatchWinS, $ptsMatchTieS, $ptsGameWinS, $ptsGameTieS, $ptsByeS, $roundNumberS);
	
		//Add parameters to keyed arrays for argument passing
		$parameters = array(); $optionals = array();
		$parameters["name"] = $title; $parameters["tournament_type"] = $type; $parameters["url"] = $url;
		$parameters["signup_cap"] = $entrants; $parameters["start_at"] = $year.'-'.$month.'-'.$day.'-T'.$hour.':'.$minute.':00-04:00';
		$parameters["check_in_duration"] = $checkIn; $parameters["description"] = $desc;
		if (isset($_POST["ALTER"])) {$parameters["TID"] = $tid;}
	
		$optionals["hold_third_place_match"] = $thirdPlaceMatch; $optionals["grand_finals_modifier"] = $grandFinalsModifier;
		$optionals["rr_pts_for_match_win"] = $ptsMatchWin; $optionals["rr_pts_for_match_tie"] = $ptsMatchTie; 
		$optionals["rr_pts_for_game_win"] = $ptsGameWin; $optionals["rr_pts_for_game_tie"] = $ptsGameTie; 
		$optionals["pts_for_match_win"] = $ptsMatchWinS; $optionals["pts_for_match_tie"] = $ptsMatchTieS; 
		$optionals["pts_for_game_win"] = $ptsGameWinS; $optionals["pts_for_game_tie"] = $ptsGameTieS; 
		$optionals["pts_for_bye"] = $ptsByeS; $optionals["swiss_rounds"] = $roundNumberS;
	
		//Convert parameter arrays to JSON strings for passing
		$paramsA = base64_encode(json_encode($parameters)); $paramsB = base64_encode(json_encode($optionals));
		if (isset($_POST["CREATE"])) {
			$command = escapeshellcmd("python ../../py/tourney_create.py ".$paramsA." ".$paramsB);
			exec($command);
		}
		if (isset($_POST["ALTER"])) {
			$command = escapeshellcmd("python ../../py/tourney_edit.py ".$paramsA." ".$paramsB);
			exec($command);
		}
	}
	elseif (isset($_POST["DESTROY"])) {
		$url = $_POST["Tourney-URL"]; $c_url = $_POST["URL-Confirm"];
		mass_clean($url, $c_url);
		if ($url == $c_url) {
			$command = escapeshellcmd("python ../../py/tourney_destroy.py ".$url);
			exec($command);
		}
	}
	elseif (isset($_POST["GET_SOON"])) {
		
	}
	elseif (isset($_POST["GET_CURRENT"])) {
		
	}
	
?>