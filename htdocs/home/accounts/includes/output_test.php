<?php
	$output = "";
	$Alpha = "And";
	$Beta = "Goodbye!";
	$command = escapeshellcmd("python ../../py/output_test.py ${Alpha} ${Beta}");
	$output = exec($command);
	echo $output;
?>