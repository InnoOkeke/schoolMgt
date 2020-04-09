<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0077)file:///C:/Users/Emi/AppData/Local/Temp/Web%20Page%20Maker/Preview/page2.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Staff / Teacher Management</title>
<meta name="generator" content="Web Page Maker">
<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}
.ws7 {font-size: 9.3px;}
.ws8 {font-size: 11px;}
.ws9 {font-size: 12px;}
.ws10 {font-size: 13px;}
.ws11 {font-size: 15px;}
.ws12 {font-size: 16px;}
.ws14 {font-size: 19px;}
.ws16 {font-size: 21px;}
.ws18 {font-size: 24px;}
.ws20 {font-size: 27px;}
.ws22 {font-size: 29px;}
.ws24 {font-size: 32px;}
.ws26 {font-size: 35px;}
.ws28 {font-size: 37px;}
.ws36 {font-size: 48px;}
.ws48 {font-size: 64px;}
.ws72 {font-size: 96px;}
.wpmd {font-size: 13px;font-family: Arial,Helvetica,Sans-Serif;font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
 margin-top: 0px;
 margin-bottom: 0px;
}
</style>

<style type="text/css">
div#container
{
	position:relative;
	width: 1277px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body bgcolor="#D4D4D4">
<?php
require_once('inc/config.php');

if(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$fullname  = $_POST['fullname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$username  = $_POST['username'];
	$password = $_POST['password'];
	$rpassword = $_POST['rpassword'];

	if($title =="" || $fullname =="" || $address =="" || $email =="" ||$telephone =="" || $username =="" || $password =="" || $rpassword =="" )
  {

		echo '<script type= text/javascript>';
		echo 'alert("Re Validate Your Information")';
		echo '</script>';
  }
	else{
		//$con  = mysqli_connect(DBHOST,DBUSER,DBPASS,DB) or die('Cannot Connect to database');
		echo '<script type= text/javascript>';
		echo 'alert("Ok!")';
		echo '</script>';
	}
	
}

?>
<div id="container">
<div id="roundrect1" style="position:absolute; overflow:hidden; left:69px; top:17px; width:1139px; height:704px; z-index:0"><img border="0" width="100%" height="100%" alt="" src="./tInformation_files/shapeIUEPN.gif"></div>

<div id="text1" style="position:absolute; overflow:hidden; left:105px; top:51px; width:260px; height:67px; z-index:1">
<img border="0" src="./tInformation_files/text836567937.gif" alt="" title=""></div>

<div id="hr1" style="position:absolute; overflow:hidden; left:105px; top:131px; width:1087px; height:17px; z-index:2">
<hr size="4" width="1087" color="#C0C0C0">
</div>

<div id="table1" style="position:absolute; overflow:hidden; left:80px; top:757px; width:1122px; height:140px; z-index:3">
<div class="wpmd">
<div><table bgcolor="#D4D4D4" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="999" height="119"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<div id="text2" style="position:absolute; overflow:hidden; left:102px; top:165px; width:336px; height:27px; z-index:4">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Staff&nbsp; / Teacher Maintenance </font></div>
</div></div>

<!--[if IE]><div id="table2" style="position:absolute; overflow:hidden; left:100px; top:208px; width:1088px; height:453px; z-index:5; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table2" style="position:absolute; overflow:hidden; left:100px; top:208px; width:1086px; height:451px; z-index:5; border:#C0C0C0 1px solid"><!--<![endif]-->

<div class="wpmd">
<div><table bgcolor="#FFFFFF" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="839" height="636"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<form name="regform" method="POST" action="action.php" style="margin:0px" enctype="multipart/form-data">
<select name="title" style="position:absolute;left:316px;top:280px;width:200px;z-index:10">
<option value="">Please Select</option>
<option value="">Mr</option>
<option value="">Ms</option>
<option value="">Mrs</option>
<option value="">Dr</option>
<option value="">Prof</option>
<option value="">Sir</option>
<option value="">Other</option>
</select>
<input name="fullname" type="text" style="position:absolute;width:200px;left:314px;top:326px;z-index:12">
<textarea name="address" style="position:absolute;left:313px;top:380px;width:200px;height:125px;z-index:15"></textarea>
<input name="email" type="text" style="position:absolute;width:200px;left:309px;top:529px;z-index:17">
<input name="telephone" type="text" style="position:absolute;width:200px;left:307px;top:572px;z-index:19">
<input name="username" type="text" style="position:absolute;width:200px;left:751px;top:273px;z-index:24">
<input name="password" type="password" style="position:absolute;width:200px;left:751px;top:320px;z-index:25">
<input name="rpassword" type="password" style="position:absolute;width:200px;left:750px;top:367px;z-index:26">
<input name="passport" type="file" style="position:absolute;width:297px;left:569px;top:620px;z-index:28">
<input name="submit" type="submit" value="Enter Information" style="position:absolute;left:1011px;top:627px;z-index:29">
</form>

<div id="hr2" style="position:absolute; overflow:hidden; left:98px; top:671px; width:1093px; height:17px; z-index:7">
<hr size="2" width="1093">
</div>

<div id="text3" style="position:absolute; overflow:hidden; left:112px; top:687px; width:966px; height:22px; z-index:8">
<div class="wpmd">
<div><font face="Verdana" class="ws7">Nowtech Nigeria </font><font class="ws7">©</font><font face="Verdana" class="ws7"> 2018 All rights Reserved.</font></div>
</div></div>

<div id="text4" style="position:absolute; overflow:hidden; left:145px; top:279px; width:55px; height:28px; z-index:9">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Title : </font></div>
</div></div>

<div id="text5" style="position:absolute; overflow:hidden; left:144px; top:327px; width:108px; height:24px; z-index:11">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Name in Full : </font></div>
</div></div>

<div id="text6" style="position:absolute; overflow:hidden; left:142px; top:238px; width:291px; height:25px; z-index:13">
<div class="wpmd">
<div><font face="Verdana" class="ws11"><b>Personal Information</b></font></div>
</div></div>

<div id="text7" style="position:absolute; overflow:hidden; left:156px; top:378px; width:150px; height:90px; z-index:14">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Address : </font></div>
</div></div>

<div id="text8" style="position:absolute; overflow:hidden; left:133px; top:529px; width:150px; height:27px; z-index:16">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Email Address : </font></div>
</div></div>

<div id="text9" style="position:absolute; overflow:hidden; left:130px; top:576px; width:162px; height:24px; z-index:18">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Telephone Number : </font></div>
</div></div>

<div id="text10" style="position:absolute; overflow:hidden; left:585px; top:237px; width:444px; height:24px; z-index:20">
<div class="wpmd">
<div><font face="Verdana" class="ws11"><b>School Management Portal Login Information</b></font></div>
</div></div>

<div id="text11" style="position:absolute; overflow:hidden; left:586px; top:278px; width:150px; height:23px; z-index:21">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Username : </font></div>
</div></div>

<div id="text12" style="position:absolute; overflow:hidden; left:583px; top:324px; width:93px; height:23px; z-index:22">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Password : </font></div>
</div></div>

<div id="text13" style="position:absolute; overflow:hidden; left:582px; top:370px; width:150px; height:23px; z-index:23">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Retype Password : </font></div>
</div></div>

<div id="text14" style="position:absolute; overflow:hidden; left:581px; top:435px; width:444px; height:24px; z-index:27">
<div class="wpmd">
<div><font face="Verdana" class="ws11"><b>Passport Photograph</b></font></div>
</div></div>

</div>



</body></html>