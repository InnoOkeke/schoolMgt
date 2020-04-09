<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0077)file:///C:/Users/Emi/AppData/Local/Temp/Web%20Page%20Maker/Preview/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>School Management System - Login</title>
<meta name="author" content="Innocent Okeke">
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
	width: 1293px;
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
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "" || $password =="" ){
	echo '<script type= text/javascript>';
	echo 'alert("Please Enter a Username and Password")';
	echo '</script>';
	}
		elseif($username != USER || $password !=PASSWORD){
			echo '<script type= text/javascript>';
			echo 'alert("FAILED: The Username / Password Does Not match!")';
			echo '</script>';
	}
	else{
		header("Location: home.php");
	}
}
?>
<div id="container">
<div id="roundrect1" style="position:absolute; overflow:hidden; left:73px; top:33px; width:1147px; height:563px; z-index:0"><img border="0" width="100%" height="100%" alt="" src="./index_files/shapeN0LJG.gif"></div>

<div id="text1" style="position:absolute; overflow:hidden; left:105px; top:51px; width:260px; height:67px; z-index:1">
<img border="0" src="./index_files/text827854609.gif" alt="" title=""></div>

<div id="hr1" style="position:absolute; overflow:hidden; left:105px; top:131px; width:1087px; height:17px; z-index:2">
<hr size="4" width="1087" color="#C0C0C0">
</div>

<div id="text2" style="position:absolute; overflow:hidden; left:112px; top:167px; width:292px; height:25px; z-index:3">
<div class="wpmd">
<div><font face="Verdana" class="ws11">School Management System Login</font></div>
</div></div>

<!--[if IE]><div id="table1" style="position:absolute; overflow:hidden; left:107px; top:201px; width:477px; height:162px; z-index:4; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table1" style="position:absolute; overflow:hidden; left:107px; top:201px; width:475px; height:160px; z-index:4; border:#C0C0C0 1px solid"><!--<![endif]-->

<div class="wpmd">
<div><table bgcolor="#FFFFFF" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="513" height="416"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<form name="loginform" method="POST" action="index.php" style="margin:0px">
<input name="username" type="text" style="position:absolute;width:247px;left:266px;top:226px;z-index:7">
<input name="password" type="password" style="position:absolute;width:246px;left:265px;top:264px;z-index:9">
<input name="submit" type="submit" style="position:absolute;left:294px;top:309px;z-index:10">
</form>

<div id="text3" style="position:absolute; overflow:hidden; left:150px; top:226px; width:104px; height:30px; z-index:6">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Username :</font></div>
</div></div>

<div id="text4" style="position:absolute; overflow:hidden; left:153px; top:266px; width:95px; height:26px; z-index:8">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Password :</font></div>
</div></div>

<div id="image1" style="position:absolute; overflow:hidden; left:613px; top:175px; width:568px; height:360px; z-index:11"><img src="./index_files/paste44.jpg" alt="" title="" border="0" width="568" height="360"></div>

<div id="hr2" style="position:absolute; overflow:hidden; left:83px; top:562px; width:1115px; height:17px; z-index:12">
<hr size="2" width="1115">
</div>

<div id="text5" style="position:absolute; overflow:hidden; left:108px; top:575px; width:966px; height:22px; z-index:13">
<div class="wpmd">
<div><font face="Verdana" class="ws7">Nowtech Nigeria </font><font class="ws7">©</font><font face="Verdana" class="ws7"> 2018 All rights Reserved.</font></div>
</div></div>

<div id="text6" style="position:absolute; overflow:hidden; left:108px; top:472px; width:480px; height:65px; z-index:14">
<div class="wpmd">
<div><font face="Verdana" class="ws7">Edu Plus School Management System </font></div>
<div><font face="Verdana" class="ws7"><br></font></div>
<div><font face="Verdana" class="ws7">This Area is reserved for Administrative purposes Only. Unauthorized Login Should immediately be reported to Administrator</font></div>
<div><font face="Verdana" class="ws7"><br></font></div>
<div><font face="Verdana" class="ws7"> </font></div>
</div></div>

</div>



</body>
</html>