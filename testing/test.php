<html>

<head>

<title>Jake & Alanna | MARRIED 9/15/07!</title>
<link rel="stylesheet" type="text/css" href="../inc/style.css">


</head>

<body>
<div id="wrapper" align="center">
	<table align="center" width="800">
		<tr>
			<td valign="top" height="200">
			<img border="0" src="../images/header.jpg" width="800" height="242"></td>
		</tr>
		<tr>
			<td class="navtd" height="35">
			<?php include ("nav.txt") ?>
			</td>
		</tr>
		<tr>
			<td>
			<table border="0" width="100%" id="table2" cellspacing="0" cellpadding="10">
				<tr>
					<td>
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="400" height="240" id="wedding_slideshow" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="../inc/wedding_slideshow.swf" />
<param name="quality" value="High" /><param name="bgcolor" value="#ffffff" />
<embed src="../inc/wedding_slideshow.swf" quality="High" bgcolor="#ffffff" width="400" height="240" name="wedding_slideshow" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object></td>
					<td width="100%" valign="top">
					<b><font face="Georgia" size="5">Check out who all is going 
					to be at the big event!</font></b><p>
					<font face="Arial" size="2">We've invited friends and family 
					from both sides of our lives as well as a lot of our 
					friends. If for whatever reason you want to talk to each 
					other before the wedding we've included everyone's email 
					address with the listings below so you can all keep in touch 
					as well.</font></p>
					<p><font face="Arial" size="2">We can't wait to see you at 
					the wedding!</font></td>
				</tr>
			</table></td>
		</tr>
		<tr>
			<td height="100%" valign="top">
			
			
<?php


mysql_connect("localhost", "thezdin_thezdin", "mandy") or die(mysql_error());

mysql_select_db("thezdin_wedding") or die(mysql_error());

$data = mysql_query("SELECT * FROM rsvp")
or die(mysql_error());

echo "<p class=\"rsvp\">";

	while($info = mysql_fetch_array( $data )) {
		
		echo "<a href=mailto:" . $info['email'] . ">" .  $info['primary_name'] . "</a> - ";
		
		echo $info['relationship'];
		
		// PARSE GUEST NAMES
		
		echo "<br />Guests: " . $info['name2'] . ", " . $info['name3'] 
		. ", " . $info['name4'] . ", " . $info['name5'] . ", " . $info['name6'];
		
		echo "</p>";
		
		//END GUEST NAMES
		
		}

?>		

	
			
			
			</td>
		</tr>
		<tr>
			<td class="navtd" height="40"><?php include("footer.txt") ?></td>
		</tr>
	</table>
</div>

</body>

</html>