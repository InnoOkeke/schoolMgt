<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0077)file:///C:/Users/Emi/AppData/Local/Temp/Web%20Page%20Maker/Preview/page2.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title></title>
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
<?php
if(isset($_POST['senda']))
{
	include 'mysqlconn.php';
	$con = mysqli_connect($host, $dbuser, $pass, $db) or die('Cannot Connect');
	
	$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
	$gname = mysqli_real_escape_string($con,$_POST['gname']);
	$gtel = mysqli_real_escape_string($con,$_POST['gtel']);
	$gaddress = mysqli_real_escape_string($con,$_POST['gaddress']);
	$rNo = mysqli_real_escape_string($con,$_POST['rNo']);
	$dName = mysqli_real_escape_string($con,$_POST['dName']);
	$pwhy = mysqli_real_escape_string($con,$_POST['pwhy']);
	$rTeacher = mysqli_real_escape_string($con,$_POST['rTeacher']);
	
	//$sql = "INSERT INTO fees(FULLNAME,GNAME,GTEL,GADDRESS,RNO,DNAME,PURPOSE,RTEACHER) VALUES ('".$fullname."','".$gname."','".$gtel."','".$gaddress."','".$rNo."','".$dName."','".$pwhy."','".$rTeacher."')";
	
	$sql = "INSERT INTO fees(Fullname,Gname,Gtel,GAddress,rNo,DName,pWhy,rTeacher) VALUES ('".$fullname."','".$gname."','".$gtel."','".$gaddress."','".$rNo."','".$dName."','".$pwhy."','".$rTeacher."')";
	
	if(!mysqli_query($con,$sql))
	{
		die('Query Error!');
	}
	echo ("<script language ='javascript'>
	  window.alert('Complete!')
	  window.location.href='home.php';
	  </script>");
}
?>
<div id="container">
  <div id="image1" style="position:absolute; overflow:hidden; left:60px; top:48px; width:260px; height:67px; z-index:1"><img src="./compute_pay_files/text827854609.gif" alt="" title="" border="0" width="260" height="67"></div>

<div id="hr1" style="position:absolute; overflow:hidden; left:64px; top:126px; width:1169px; height:17px; z-index:2">
<hr size="4" width="1169" color="#C0C0C0">
</div>

<div id="text1" style="position:absolute; overflow:hidden; left:66px; top:148px; width:241px; height:25px; z-index:3">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Manage Student Payment</font></div>
</div></div>

<form name="paymentForm" method="POST" action="compute_pay.php" style="margin:0px">
<input name="fullname" type="text" style="position:absolute;width:296px;left:204px;top:209px;z-index:6">
<input name="gname" type="text" style="position:absolute;width:296px;left:203px;top:251px;z-index:8">
<input name="gtel" type="text" style="position:absolute;width:296px;left:205px;top:298px;z-index:10">
<textarea name="gaddress" style="position:absolute;left:205px;top:351px;width:297px;height:125px;z-index:12"></textarea>
<input name="rNo" type="text" style="position:absolute;width:296px;left:716px;top:207px;z-index:14">
<input name="dName" type="text" style="position:absolute;width:296px;left:717px;top:250px;z-index:16">
<input name="pwhy" type="text" style="position:absolute;width:187px;left:717px;top:296px;z-index:18">
<input name="rTeacher" type="text" style="position:absolute;width:296px;left:715px;top:347px;z-index:20">
<input name="senda" type="submit" value="Submit Data" style="position:absolute;left:834px;top:426px;z-index:23">
<div id="roundrect1" style="position:absolute; overflow:hidden; left:20px; top:17px; width:1233px; height:591px; z-index:0"><img border="0" width="100%" height="100%" alt="" src="./compute_pay_files/shapeQ6V6T.gif"></div>
</form>

<div id="text2" style="position:absolute; overflow:hidden; left:92px; top:211px; width:113px; height:24px; z-index:5">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Name in Full :</font></div>
</div></div>

<div id="text3" style="position:absolute; overflow:hidden; left:49px; top:253px; width:155px; height:24px; z-index:7">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Name of Guardian :</font></div>
</div></div>

<div id="text4" style="position:absolute; overflow:hidden; left:36px; top:300px; width:170px; height:24px; z-index:9">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Guardian Telephone :</font></div>
</div></div>

<div id="text5" style="position:absolute; overflow:hidden; left:53px; top:348px; width:150px; height:24px; z-index:11">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Guardian Address :</font></div>
</div></div>

<div id="text6" style="position:absolute; overflow:hidden; left:567px; top:209px; width:150px; height:24px; z-index:13">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Receipt Number :</font></div>
</div></div>

<div id="text7" style="position:absolute; overflow:hidden; left:548px; top:252px; width:170px; height:24px; z-index:15">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Name of Depositor :</font></div>
</div></div>

<div id="text8" style="position:absolute; overflow:hidden; left:590px; top:298px; width:128px; height:24px; z-index:17">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Payment For :</font></div>
</div></div>

<div id="text9" style="position:absolute; overflow:hidden; left:551px; top:349px; width:150px; height:24px; z-index:19">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Recieving Teacher :</font></div>
</div></div>

<div id="hr2" style="position:absolute; overflow:hidden; left:50px; top:566px; width:1180px; height:17px; z-index:21">
<hr size="2" width="1180">
</div>

<div id="text10" style="position:absolute; overflow:hidden; left:49px; top:583px; width:439px; height:24px; z-index:22">
<div class="wpmd">
<div><font class="ws8">Nowtech Nigeria </font><font class="ws8">©</font><font class="ws8"> 2018 All Rights Reserved</font></div>
</div></div>

<div id="table1" style="position:absolute; overflow:hidden; left:20px; top:636px; width:1231px; height:83px; z-index:24">
<div class="wpmd">
<div><table bgcolor="#EBEBEB" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="1005" height="128"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

</div>



</body></html>