<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Search Results</title>
</head>

<body bgcolor="#EFEFEF">
<table border="0" align=center width="95%" id="table1" bgcolor="#FFFFFF">
	<tr>
		<td>
		    <img border="0" src="index_files/text827854609.gif" width="238" height="57">&nbsp;</td>
	</tr>
	<tr>
		<td><hr align="center" size="4" color="#C0C0C0" width="99%"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<p align="left"><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Search Student Name For Results</font></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
	</tr>
	<tr>
		<td>
		<form method="POST" name="Informationform" action="searchresults.php">
			<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" B-Reverse-Chronology="FALSE" S-Builtin-Fields -->
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b><font face="Verdana" size="2">Enter Name in Full</font></b> :&nbsp;
			<input type="text" name="fullname" size="50">
			<input type="submit" value="Search" name="senda"></p>
		</form>
		<?php
		if(isset($_POST['senda']))
		{
			include 'mysqlconn.php';
			$con = mysqli_connect($host, $dbuser, $pass, $db) or die('Cannot Connect');
			
			$name = $_POST['fullname'];
			$sql = "SELECT * FROM scores WHERE fullname = '$name'";
			$result = mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));
			$tableheader="
    <table border='0' width='99%' id='table2'>
        <tr>
                <td width='299px' align='center'><b>
                <font face='Verdana' size='2' color='#808080'>Full Name</font></b></td>
                <td width='171px' align='center'><b>
                <font face='Verdana' size='2' color='#808080'>studentNo</font></b></td>
                <td width='276px' align='center'><b>
                <font face='Verdana' size='2 'color='#808080'>SubjectName</font></b></td>
                <td width='106px' align='center'><b>
                <font face='Verdana' size='2' color='#808080'>GPA</font></b></td>
                <td width='176px' align='center'><b>
                <font face='Verdana' size='2' color='#808080'>CGPA</font></b></td>
                <td align='center'><b>
                <font face='Verdana' size='2' color='#808080'>SCORE</font></b></td>
        </tr>";
		echo $tableheader;
			while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ){

    $tablerows = "
            <tr>
                <td width='299px' align='center'>" . $row['Fullname'] . "</td>
                <td width='171px' align='center'>". $row['studentNo']. "</td>
                <td width='276px' align='center'>". $row['SubjectName']."</td>
                <td width='106px' align='center'>" .$row['GPA']. "</td>
                <td width='176px' align='center'>".$row['CGPA']. "</td>
                <td align='center'>" .$row['SCORE']."</td>
            </tr>";
    /* echo the table row */
    echo $tablerows;
	
}
		}
		?>
		<td>		</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><hr></td>
	</tr>
	<tr>
	
		<td><font size="1" face="Arial, Helvetica, sans-serif">Nowtech &copy; All Rights Reseved </font></td>
	</tr>
</table>
</body>

</html>
