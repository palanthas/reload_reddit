<!--
reload_reddit.php
David Scholten


Log/Version:

0.1
2015-02-01
First design. This page is call by and will reload 'reddit.php'.

-->

<?php

$i_reloadtime = $_GET['reload_time'];

$out = "Reload Every&nbsp;&nbsp;";

$out .= "<form action="test.php" method="post">
		<select name='reload_time'>
		<option value='1'>1 Minute</option>
		<option value='5'>5 Minutes</option>
		<option value='10'>10 Minutes</option>
		</select></form>";

$out .= "<br>";

print $out;

?>
