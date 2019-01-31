<?php

mysql_connect("localhost", "thezdin_thezdin", "mandy") or die(mysql_error());

mysql_select_db("thezdin_wedding") or die(mysql_error());

$data = mysql_query("SELECT * FROM rsvp ORDER BY primary_name")
or die(mysql_error());

	$count = 1;

echo "<p class=\"rsvp\">";



	while($info = mysql_fetch_array( $data )) {
		
		echo "<span class=\"primary\">" . $count . " - " . "<a href=mailto:" . $info['email'] . ">" .  $info['primary_name'] . "</a> >> ";
		
		echo $info['relationship'] . "</span>";
		
		// CHECK IF THERE ARE GUESTS
		
		if ($info['name2'] == "" && $info['name3'] == "" && $info['name4'] == "" && $info['name5'] == "" && $info['name6'] == "") {
		
			echo "</p>";		
			
			$count = $count + 1;

			}
			
		// IF THERE ARE GUESTS, DISPLAY THEM
		
		else {
			
			echo "<br /><br /><span class=\"guests\">Guests: ";
			if ($info['name6'] == ""){
			
			}
			else {
			echo $info['name2'] . ", " . $info['name3'] . ", " . $info['name4'] . ", " . $info['name5'] . $info['name6'];
			}
			
			if ($info['name5'] == ""){
			
			}
			else {
			echo $info['name2'] . ", " . $info['name3'] . ", " . $info['name4'] . ", " . $info['name5'];
			}
				
			if ($info['name4'] == ""){
			
			}
			else {
			echo $info['name2'] . ", " . $info['name3'] . ", " . $info['name4'];
			
			}	
				
			if ($info['name3'] == ""){
			
			}
			else {
			echo $info['name2'] . ", " . $info['name3'];
			}
	
	
			if ($info['name2'] == ""){
			
			}
			else {
			echo $info['name2'];
			}
		
			echo "</span>";
			echo "</p>";
		
			$count = $count + 1;
		
			//END GUEST NAMES
		
			}
		
		}

?>