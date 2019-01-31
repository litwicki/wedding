<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>A Litwicki Wedding | September 15, 2007</title>
<link rel="stylesheet" type="text/css" href="inc/style.css">
</head>

<body>

<div align="center">
	<table border="2" width="800" id="table1" cellspacing="0" cellpadding="2" bordercolor="#C9C4E1" height="100%" bgcolor="#FFFFFF" style="border-collapse: collapse">
		<tr>
			<td valign="top">
			<div align="center">
				<table border="0" width="800" id="table2" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td width="800" valign="top" height="210">
						<img border="0" src="images/top.jpg" width="800" height="210"></td>
					</tr>
					<tr>
						<td width="800" valign="top" height="1000">
						<table border="0" width="100%" id="table5" cellspacing="0" cellpadding="0">
							<tr>
								<td width="200" style="border-right: 1px dotted #c9c4e1" valign="top"><?php include("inc/nav.txt") ?></td>
								<td width="600" valign="top">
						<table width="100%" id="table6" cellspacing="0" cellpadding="10">
							
														<tr>
								<td width="600" valign="top" colspan="2"><?PHP
$number=10;
include("/home/thezdin/public_html/wedding/journal/show_news.php");
?>								</td>
							</tr>

							<tr>
								<td width="335" valign="top" bgcolor="#AD9FB7">
								<p align="center">
								<font face="Times New Roman" style="font-weight: bold italic; font-style:italic" size="4">
								<b>Countdown to Wedding Day:</b></font></td>
								<td width="265" valign="top" bgcolor="#AD9FB7">
							
							
							
							<font face="Times New Roman" style="font-weight: bold italic; font-weight: 700; font-style:italic">
							
							
							
							<?php
// countdown function
// parameters: (year, month, day, hour, minute)
countdown(2007,9,15,12,0);

function countdown($year, $month, $day, $hour, $minute)
{
  // make a unix timestamp for the given date
  $the_countdown_date = mktime($hour, $minute, 0, $month, $day, $year, -1);

  // get current unix timestamp
  $today = time();

  $difference = $the_countdown_date - $today;
  if ($difference < 0) $difference = 0;

  $days_left = floor($difference/60/60/24);
  $hours_left = floor(($difference - $days_left*60*60*24)/60/60);
  $minutes_left = floor(($difference - $days_left*60*60*24 - $hours_left*60*60)/60);
  
  // OUTPUT

  echo "<b>" . $days_left." days, ".$hours_left." hours, ".$minutes_left." minutes!" . "</b>";
}
?>
							
							
							
							</font>
							
							
							
							</td>
							</tr>
							<tr>
								<td width="335" valign="top" style="border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom: 1px dotted #C9C4E1">
								<font face="Arial" size="2">This is a celebration of Jake 
					Litwicki &amp; Alanna Woldman planning our wedding for <b>September 
					15, 2007</b>.</font><p><font face="Arial" size="2">We've 
					included some basic information and details about local 
					restaurants and hotels and such. If you have other questions 
					please feel free to talk to <b>Alanna</b>, not Jake (I 
					wouldn't know).</font></p>
					<p><font face="Arial" size="2">We've also included a small 
					journal of our thoughts and the random happenings in our 
					life up to the big day. </font></p>
								</td>
								<td width="265" valign="top" style="border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom: 1px dotted #C9C4E1">
								<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="265" height="200" id="wedding_slideshow">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="inc/wedding_slideshow.swf" />
<param name="quality" value="High" />
<param name="bgcolor" value="#FFFFFF" />
<embed src="inc/wedding_slideshow.swf" quality="High" bgcolor="#FFFFFF" width="265" height="200" name="wedding_slideshow" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object></td>
							</tr>
						</table>
								</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td width="800" height="95" background="images/footer.gif">
						<div align="center">
						<table border="0" width="90%" id="table4" cellspacing="0" cellpadding="0">
							<tr>
								<td><?php include("inc/footer.txt") ?></td>
							</tr>
						</table>
						</div>
						</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
		</table>
</div>

</body>

</html>