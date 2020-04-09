<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<LINK href="C:/Users/Emi/Desktop/home.css" rel="stylesheet" type="text/css">
<title>Fees Register </title>
</head>

<body>

</div>
<div align="center">
    <table border="0" width="84%" id="table1">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
            <img border="0" src="index_files/text827854609.gif" width="260" height="67"></td>
        </tr>
        <tr>
            <td><hr size="4" color="#808080"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
		   <div>
            <form method="POST" action="receipt_search.php" id="paymentsearchform" name="paymentsearchform">
                <!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
                <p>&nbsp;</p>
                <p>Enter Student Name : 
                  <input type="text" name="fullname" size="58">
                  <input type="submit" value="Search Payment Activity" name="sendx2">
                </p>
                <p>&nbsp;</p>
            </form>
            <?php
            include 'mysqlconn.php';
            if(isset($_POST['sendx2']))
            {
                $con = mysqli_connect($host, $dbuser, $pass, $db) or die('Connect Failed!');
                $fullname = mysqli_real_escape_string($con,$_POST['fullname']);
                $sql = "SELECT * FROM fees WHERE fullname = '$fullname'";
                $result = mysqli_query($con,$sql)  or die("Error: ".mysqli_error($con));

                $tableheader = "<table border=0 width=100% id=table2 align=center>
                                    <tr>
                                        <th width=307 align=center>
                                        <font face=Verdana size=2>Full Name </font></th>
                                        <th width=198 align=center>
                                        <font face=Verdana size=2>&nbsp;Guardians Name</font></th>
                                        <th width=157 align=center>
                                        <font face=Verdana size=2>&nbsp;Receipt Number </font></th>
                                        <th align=center><font face=Verdana size=2>&nbsp;Purpose</font></th>
                                    </tr>";

                            echo $tableheader;

                            while( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) )
                            {
                                $tablerows = "<tr>
                                        <td width=307 align=center>" . $row['fullname'] . "</td>
                                        <td width=198 align=center>" . $row['gname'] . "</td>
                                        <td width=157 align=center>" . $row['rNo'] . "</td>
                                        <td align=center>" . $row['pwhy'] . "</td>
                                    </tr>";
                            }

                echo $tablerows;
                echo '</table>';
            }
            ?>		  </td>
      </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><hr size="4" color="#808080"></td>
        </tr>
        <tr>
            <td><font face="Arial" size="1">Nowtech &copy; All rights Reserved. </font></td>
        </tr>
    </table>
</div>
</body>

</html>