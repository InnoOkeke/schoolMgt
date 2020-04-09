<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0077)file:///C:/Users/Emi/AppData/Local/Temp/Web%20Page%20Maker/Preview/page5.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Teacher Login</title>
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
	width: 1273px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body bgcolor="#EBEBEB">
<div id="container">
<div id="roundrect1" style="position:absolute; overflow:hidden; left:20px; top:17px; width:1233px; height:591px; z-index:0"><img border="0" width="100%" height="100%" alt="" src="./teacherLogin_files/shapeS1TNG.gif"></div>

<div id="image1" style="position:absolute; overflow:hidden; left:60px; top:48px; width:260px; height:67px; z-index:1"><img src="./teacherLogin_files/text827854609.gif" alt="" title="" border="0" width="260" height="67"></div>

<div id="hr1" style="position:absolute; overflow:hidden; left:64px; top:126px; width:1169px; height:17px; z-index:2">
<hr size="4" width="1169" color="#C0C0C0">
</div>

<div id="hr2" style="position:absolute; overflow:hidden; left:49px; top:569px; width:1174px; height:17px; z-index:3">
<hr size="2" width="1174">
</div>

<div id="text1" style="position:absolute; overflow:hidden; left:49px; top:583px; width:439px; height:24px; z-index:4">
<div class="wpmd">
<div><font class="ws8">NowTech Nigeria </font><font class="ws8">©</font><font class="ws8"> 2018 All Rights Reserved</font></div>
</div></div>

<div id="text2" style="position:absolute; overflow:hidden; left:70px; top:151px; width:150px; height:26px; z-index:5">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Teacher Login </font></div>
</div></div>

<form name="form1" id="form1" action="teacherLogin.php" method="post"style="margin:0px">
<input name="username" type="text" style="position:absolute;width:294px;left:539px;top:247px;z-index:10">
<input name="password" type="password" style="position:absolute;width:294px;left:538px;top:297px;z-index:11">
<input name="login" type="submit" value="Login" style="position:absolute;left:644px;top:342px;z-index:12">
</form>

<?php
if(isset($_POST['login']))
{
	session_start();
	include 'mysqlconn.php';
	$con = mysqli_connect($host, $dbuser, $pass, $db) or die('Cannot Connect');

	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	
	$sql = "SELECT id FROM tinfoz WHERE username = '$username' AND password = md5('$password')";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//$active = $row['active'];
	
	$count = mysqli_num_rows($result);
	
	if($count ==1)
	{
		//session_register("username");
		$username = $_SESSION['username'];
		
		header("Location: home_instructor.php?login=success");
	}
	else{
		echo '<script type= text/javascript>';
		echo 'alert("Error Please Verify Username and Password")';
		echo '</script>';
	    }
}
?>
<!--[if IE]><div id="table1" style="position:absolute; overflow:hidden; left:378px; top:227px; width:513px; height:169px; z-index:7; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table1" style="position:absolute; overflow:hidden; left:378px; top:227px; width:511px; height:167px; z-index:7; border:#C0C0C0 1px solid"><!--<![endif]-->

<div class="wpmd">
<div><table bgcolor="#FFFFFF" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="648" height="305"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<div id="text3" style="position:absolute; overflow:hidden; left:398px; top:251px; width:150px; height:30px; z-index:8">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Teacher Staff ID: </font></div>
</div></div>

<div id="text4" style="position:absolute; overflow:hidden; left:438px; top:298px; width:86px; height:22px; z-index:9">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Password: </font></div>
</div></div>

</div>



</body></html>