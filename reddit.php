<!--
reddit.php
David Scholten


Log/Version:

0.1
2015-02-01
First design. This page will load 'Reddit.com'.
Added a dropdown menu to select an amount of time before reloading itself.
Menu reloads page on change.

-->


<?php

	$i_reloadtime = $_POST['reload_time'];

	if ($i_reloadtime <= 1)
		{
			$i_reloadtime = 1;
			$s_min = "minute";
		}
	else
		{
		$s_min = "minutes";
		}

	$out = "Reloading every&nbsp".$i_reloadtime."&nbsp".$s_min;


	$out .= "<form action='reddit.php' method='post'>
			<select id='reload_time' name='reload_time' onchange='this.form.submit()'>
			<option selected value='0'>Change Time</option>
			<option value='1'>1 Minute</option>
			<option value='5'>5 Minutes</option>
			<option value='10'>10 Minutes</option>
			</select>
			<noscript><input type='submit' value='Submit'></noscript>
			</form>";

	$out .= "<br>";

	print $out;

readfile('https://www.reddit.com/'); // outputs contents of Reddit.com

?>
