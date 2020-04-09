<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0077)file:///C:/Users/Emi/AppData/Local/Temp/Web%20Page%20Maker/Preview/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Home</title>
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
	width: 1270px;
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
<div id="roundrect1" style="position:absolute; overflow:hidden; left:20px; top:17px; width:1233px; height:591px; z-index:0"><img border="0" width="100%" height="100%" alt="" src="./home_files/shapeS1TNG.gif"></div>

<div id="image1" style="position:absolute; overflow:hidden; left:60px; top:48px; width:260px; height:67px; z-index:1"><img src="./home_files/text827854609.gif" alt="" title="" border="0" width="260" height="67"></div>

<div id="table1" style="position:absolute; overflow:hidden; left:813px; top:81px; width:433px; height:40px; z-index:2">
<div class="wpmd">
<div><table bgcolor="#FFFFFF" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<?php
$date = $date = date('Y-m-d H:i:s');
?>
<td width="368" height="35"><div class="wpmd">
<div><font face="Verdana"><b>Current Date and Time :  <?php echo $date;?></b></font></div>
</div>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<div id="hr1" style="position:absolute; overflow:hidden; left:64px; top:126px; width:1169px; height:17px; z-index:3">
<hr size="4" width="1169" color="#C0C0C0">
</div>

<div id="image2" style="position:absolute; overflow:hidden; left:672px; top:155px; width:545px; height:363px; z-index:4"><img src="./home_files/Students-in-classroom.jpg" alt="" title="" border="0" width="545" height="363"></div>

<div id="hr2" style="position:absolute; overflow:hidden; left:49px; top:569px; width:1174px; height:17px; z-index:5">
<hr size="2" width="1174">
</div>

<div id="text1" style="position:absolute; overflow:hidden; left:49px; top:583px; width:439px; height:24px; z-index:6">
<div class="wpmd">
<div><font class="ws8">Nowtech Nigeria </font><font class="ws8">©</font><font class="ws8"> 2018 All Rights Reserved</font></div>
</div></div>

<div id="table2" style="position:absolute; overflow:hidden; left:17px; top:637px; width:1234px; height:111px; z-index:7">
<div class="wpmd">
<div><table bgcolor="#EBEBEB" border="0" bordercolorlight="#C0C0C0" bordercolordark="#808080">
<tbody><tr valign="top">
<td width="1069" height="133"><br>
</td>
</tr>
</tbody></table>
</div>
</div></div>

<form name="HomeForm" method="POST" style="margin:0px">
<select name="formselect1" onChange="location = this.options[this.selectedIndex].value;" style="position:absolute;left:259px;top:170px;width:290px;z-index:10">
<option value="">Please Make a Selection</option>
<option value="searchresults.php">Results</option>
<option value="compute_pay.php">Compute Payment</option>
<option value="receipt_search.php">Search Reciept Number</option>
</select>
<?php
if(isset($_POST['logout']))
{
	header('Location: index.php?logout=yes');
}
?>
<input name="logout" type="submit" value="Logout Session" style="position:absolute;left:1061px;top:35px;z-index:11">
</form>

<div id="text2" style="position:absolute; overflow:hidden; left:64px; top:170px; width:185px; height:25px; z-index:9">
<div class="wpmd">
<div><font face="Verdana" class="ws11">Please Make a Selection</font></div>
</div></div>

</div>



</body></html>