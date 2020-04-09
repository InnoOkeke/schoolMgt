<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0077)file:///C:/Users/Emi/AppData/Local/Temp/Web%20Page%20Maker/Preview/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Result Compilation</title>
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
	width: 1252px;
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
if(isset($_POST['submit'])){
	
	include 'mysqlconn.php';
	$con = mysqli_connect($host, $dbuser, $pass, $db) or die('Cannot Connect');
	
	$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
	$age = mysqli_real_escape_string($con,$_POST['age']);
	$stdNo = mysqli_real_escape_string($con,$_POST['stdNo']);
	$teacherName = mysqli_real_escape_string($con,$_POST['teacherName']);
	$teacherNo = mysqli_real_escape_string($con,$_POST['teacherNo']);
	$class = mysqli_real_escape_string($con,$_POST['class']);
	$subjectname = mysqli_real_escape_string($con,$_POST['subjectname']);
	$subteacher = mysqli_real_escape_string($con,$_POST['subteacher']);
	$gpa = mysqli_real_escape_string($con,$_POST['gpa']);
	$cgpa = mysqli_real_escape_string($con,$_POST['cgpa']);
	$score = mysqli_real_escape_string($con,$_POST['score']);
	
	$sql = "INSERT INTO scores(Fullname,age,studentNo,Teachername,TeacherNum,Class,SubjectName,SubjectTeacher,GPA,CGPA,score) VALUES ('".$fullname."','".$age."','".$stdNo."','".$teacherName."','".$teacherNo."','".$class."','".$subjectname."','".$subteacher."','".$gpa."','".$cgpa."','".$score."')";
	
	if(!mysqli_query($con,$sql))
{
	die('Error: '.mysqli_error($con));
}
echo ("<script language ='javascript'>
	  window.alert('Saved!')
	  window.location.href='home.php';
	  </script>");
}

?>
<div id="container">
<div id="roundrect1" style="position:absolute; overflow:hidden; left:28px; top:29px; width:1197px; height:658px; z-index:0"><img border="0" width="100%" height="100%" alt="" src="./results_files/shape5NBED.gif"></div>

<div id="image1" style="position:absolute; overflow:hidden; left:59px; top:60px; width:244px; height:63px; z-index:1"><img src="./results_files/text827854609.gif" alt="" title="" border="0" width="244" height="63"></div>

<div id="hr1" style="position:absolute; overflow:hidden; left:59px; top:135px; width:1144px; height:17px; z-index:2">
<hr size="4" width="1144" color="#D4D4D4">
</div>

<div id="text1" style="position:absolute; overflow:hidden; left:61px; top:160px; width:195px; height:20px; z-index:3">
<div class="wpmd">
<div><font face="Verdana">Result Management Area</font></div>
</div></div>

<div id="table1" style="position:absolute; overflow:hidden; left:27px; top:691px; width:1196px; height:126px; z-index:4">
<div class="wpmd">
<div><table bgcolor="#EBEBEB" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="1066" height="105"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<!--[if IE]><div id="table2" style="position:absolute; overflow:hidden; left:59px; top:193px; width:1141px; height:420px; z-index:5; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table2" style="position:absolute; overflow:hidden; left:59px; top:193px; width:1139px; height:418px; z-index:5; border:#C0C0C0 1px solid"><!--<![endif]-->

<div class="wpmd">
<div><table bgcolor="#FFFFFF" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="1017" height="523"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<div id="hr2" style="position:absolute; overflow:hidden; left:57px; top:627px; width:1143px; height:17px; z-index:6">
<hr size="2" width="1143">
</div>

<div id="text2" style="position:absolute; overflow:hidden; left:58px; top:648px; width:348px; height:17px; z-index:7">
<div class="wpmd">
<div><font face="Verdana" class="ws7">Nowtech Nigeria © 2018 All rights Reserved.</font></div>
</div></div>

<div id="text3" style="position:absolute; overflow:hidden; left:72px; top:207px; width:284px; height:18px; z-index:8">
<div class="wpmd">
<div><font face="Verdana" class="ws11"><b>Student Information</b></font></div>
</div></div>

<form name="infoform" method="POST" action="results.php" style="margin:0px">
<input name="fullname" type="text" style="position:absolute;width:264px;left:230px;top:245px;z-index:11">
<input name="age" type="text" style="position:absolute;width:52px;left:230px;top:292px;z-index:13">
<input name="stdNo" type="text" style="position:absolute;width:264px;left:227px;top:344px;z-index:15">
<input name="teacherName" type="text" style="position:absolute;width:264px;left:236px;top:449px;z-index:18">
<input name="teacherNo" type="text" style="position:absolute;width:264px;left:234px;top:491px;z-index:20">
<select name="class" style="position:absolute;left:232px;top:536px;width:200px;z-index:22">
<option value="">Select ClassRoom</option>
<option value="">Primary 1</option>
<option value="">Primary 2</option>
<option value="">Primary 3</option>
<option value="">Primary 4</option>
<option value="">Primary 5</option>
<option value="">Primary 6</option>
<option value="">JSSI</option>
<option value="">JSS2</option>
<option value="">JSS3</option>
<option value="">SS1</option>
<option value="">SSS2</option>
<option value="">SSS3</option>
</select>
<input name="subjectname" type="text" style="position:absolute;width:264px;left:834px;top:245px;z-index:25">
<input name="subteacher" type="text" style="position:absolute;width:262px;left:834px;top:292px;z-index:27">
<input name="gpa" type="text" style="position:absolute;width:89px;left:831px;top:338px;z-index:29">
<input name="cgpa" type="text" style="position:absolute;width:87px;left:832px;top:389px;z-index:31">
<input name="score" type="text" style="position:absolute;width:87px;left:830px;top:434px;z-index:33">
<input name="submit" type="submit" value="Enter Results" style="position:absolute;left:814px;top:499px;z-index:34">
</form>

<div id="text4" style="position:absolute; overflow:hidden; left:100px; top:249px; width:113px; height:20px; z-index:10">
<div class="wpmd">
<div><font face="Verdana">Name in Full : </font></div>
</div></div>

<div id="text5" style="position:absolute; overflow:hidden; left:88px; top:294px; width:121px; height:20px; z-index:12">
<div class="wpmd">
<div><font face="Verdana">Age of Student : </font></div>
</div></div>

<div id="text6" style="position:absolute; overflow:hidden; left:77px; top:336px; width:131px; height:33px; z-index:14">
<div class="wpmd">
<div><font face="Verdana">Student Number(If Any): </font></div>
</div></div>

<div id="text7" style="position:absolute; overflow:hidden; left:78px; top:408px; width:210px; height:25px; z-index:16">
<div class="wpmd">
<div><font face="Verdana"><b>Class Teacher Information</b></font></div>
</div></div>

<div id="text8" style="position:absolute; overflow:hidden; left:79px; top:452px; width:150px; height:20px; z-index:17">
<div class="wpmd">
<div><font face="Verdana">Class Teacher Name:</font></div>
</div></div>

<div id="text9" style="position:absolute; overflow:hidden; left:81px; top:493px; width:142px; height:20px; z-index:19">
<div class="wpmd">
<div><font face="Verdana">Telephone Number : </font></div>
</div></div>

<div id="text10" style="position:absolute; overflow:hidden; left:78px; top:538px; width:142px; height:20px; z-index:21">
<div class="wpmd">
<div><font face="Verdana">Teacher Class : </font></div>
</div></div>

<div id="text11" style="position:absolute; overflow:hidden; left:736px; top:210px; width:150px; height:23px; z-index:23">
<div class="wpmd">
<div><font face="Verdana"><b>Subject Information</b></font></div>
</div></div>

<div id="text12" style="position:absolute; overflow:hidden; left:694px; top:249px; width:123px; height:20px; z-index:24">
<div class="wpmd">
<div><font face="Verdana">Subject Name : </font></div>
</div></div>

<div id="text13" style="position:absolute; overflow:hidden; left:692px; top:294px; width:121px; height:20px; z-index:26">
<div class="wpmd">
<div><font face="Verdana">Subject Teacher: </font></div>
</div></div>

<div id="text14" style="position:absolute; overflow:hidden; left:727px; top:344px; width:47px; height:25px; z-index:28">
<div class="wpmd">
<div><font face="Verdana">GPA</font></div>
</div></div>

<div id="text15" style="position:absolute; overflow:hidden; left:717px; top:391px; width:61px; height:20px; z-index:30">
<div class="wpmd">
<div><font face="Verdana">CGPA : </font></div>
</div></div>

<div id="text16" style="position:absolute; overflow:hidden; left:713px; top:435px; width:61px; height:20px; z-index:32">
<div class="wpmd">
<div><font face="Verdana">Score :</font></div>
</div></div>

</div>



</body></html>