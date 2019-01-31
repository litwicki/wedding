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
						<table width="600" id="table8" cellspacing="0" cellpadding="10">
							<tr>
								<td valign="top">
								We want to know who's going to be there with us 
								on the big day, if you could give us your email 
								address and some simple information that'd be 
								very helpful in keeping track for planning 
								details.<p>It's harmless and simple, we promise!</p>
								<hr></td>
							</tr>
							<tr>
								<td valign="top">
								<?php
			
mysql_connect('localhost', 'thezdin_thezdin', 'mandy') or die('Could not connect: ' . mysql_error());

mysql_select_db('thezdin_wedding') or die('Could not select database');
			
if(isset($_POST['add']))
{
$email 			= $_POST['email'];
$primary_name 	= $_POST['primary_name'];
$relationship 	= $_POST['relationship'];
$name2 			= $_POST['name2'];
$name3 			= $_POST['name3'];
$name4 			= $_POST['name4'];
$name5 			= $_POST['name5'];
$name6 			= $_POST['name6'];

// FORM VALIDATION

$flag = "OK";   
$error = "";
    
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {

	$error = $error. "( ERROR: Please enter a valid email address.  )<br />";
	$flag = "NOTOK";
        
} 


if ($primary_name == "") {

	$error=$error."( ERROR: Please enter your full name.  )<br />";
	$flag = "NOTOK";

}

if (ctype_digit($primary_name)) {

	$error=$error."( ERROR: Please use only letters for your Full Name. )<BR>";
	$flag = "NOTOK";
	
}

if (ctype_cntrl($primary_name)) {

	$error=$error."( ERROR: Please use only letters for your Full Name. )<BR>";
	$flag = "NOTOK";
	
}

if (ctype_punct($primary_name)) {

	$error=$error."( ERROR: Please use only letters for your Full Name. )<BR>";
	$flag = "NOTOK";
	
}

if($flag <>"OK"){

echo "<div id=\"error\" align=\"center\">$error <br /> <input type='button' value='Retry' onClick='history.go(-1)'></div>";
}

else { 

$query = "INSERT INTO rsvp VALUES ('$email','$primary_name','$relationship','$name2','$name3','$name4','$name5','$name6')";

mysql_query($query) or die('Something got screwed up - email Jake: thezdin@comcast.net!' . mysql_error());

echo "<p style=\"font-size: 22px; font-family: Georgia; font-color: #c9ce41;\">We can't wait to see you at the Wedding!</p>";

} 


}
else
{
?>

<form method="post">
<div align="center">
<table border="0" cellspacing="0" cellpadding="10" id="table9">
<tr >
<td class="rsvp-form" width="300"><b><font face="Georgia">Email Address</font></b></td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="email" id="email" size="25" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300"><b><font face="Georgia">Full Name</font></b></td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="primary_name" id="primary_name" size="20" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300"><b><font face="Georgia">What relation are you 
to one of these fine individuals?</font></b></td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="relationship" id="primary_name0" size="30" style="font-weight: 700" value="Friend, Uncle, Wedding Crasher.."></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300"><font face="Georgia"><b>Who's coming with you?</b></font></td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="name2" id="name2" size="20" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300">&nbsp;</td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="name3" id="name3" size="20" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300">&nbsp;</td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="name4" id="name4" size="20" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300">&nbsp;</td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="name5" id="name5" size="20" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300">&nbsp;</td>
<td class="rsvp-form"><font face="Georgia" size="3">
<input name="name6" id="name6" size="20" style="font-weight: 700"></font></td>
</tr>
<tr >
<td class="rsvp-form" width="300">&nbsp;</td>
<td class="rsvp-form"><font size="3" face="Arial">
<input name="add" type="submit" id="add" value="RSVP" style="font-weight: 700"></font></td>
</tr>

</table>
</div>
</form>

<?php
}
?></td>
							</tr>
							<tr>
								<td valign="top">
								<hr>
								<p>If you want to check out who all is going to 
								the wedding check out the <b>
								<a href="rsvp_view.php">RSVP List!</a></b></td>
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