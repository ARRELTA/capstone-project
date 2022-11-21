<?php
	function printEntries($state) {
		$entries = []; $str = "";
		$command0 = escapeshellcmd("python ../../py/tourney_data.py ".$state); $entries = json_decode(exec($command0),true);
		foreach ($entries as $tour) {
			echo "<div class='w-layout-grid grid-14'>
                    <div id='w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277' class='div-block-14'>
                      <div id='w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277' class='text-block-8'>${tour["id"]}</div>
                    </div>
					<div id='w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277' class='div-block-14'>
                      <div id='w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277' class='text-block-8'>${tour["name"]}</div>
                    </div>
					<div id='w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277' class='div-block-14'>
                      <div id='w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277' class='text-block-8'>${tour["date"]}</div>
                    </div>
					<div id='w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277' class='div-block-14'>
                      <div id='w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277' class='text-block-8'>${tour["time"]}</div>
                    </div>
					<div id='w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277' class='div-block-14>
                      <div id='w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277' class='text-block-8'>${tour["entrants"]}</div>
                    </div>
					<div id='w-node-_23be281a-f926-aba6-c499-786e853565ce-c8b4b277' class='div-block-14'>
                      <div id='w-node-_275a242c-7a54-1c1f-aa02-eb2a8712f696-c8b4b277' class='text-block-8'>${tour["url"]}</div>
                    </div>
                  </div>";
		}
	}
?>