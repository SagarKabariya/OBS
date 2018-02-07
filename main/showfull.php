<!DOCTYPE html>
<html>
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="file:///C|/wamp/www/my final work/djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="file:///C|/wamp/www/my final work/djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="file:///C|/wamp/www/my final work/djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
<?php
	include("headadmin.php");
?>
</head>
<body bgcolor="#FFFFFF">
<section id="columns">
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div id="content">
        <div>
        <form action="showregister.php" method="post">
          <table border="1" cellpadding="0" cellspacing="0" align="center" width="400px">
          <tr align="center">
          	<td colspan="2">
            <font size="+1" style="font-weight:bolder">
            	Full Information
            </font>
            </td>
          </tr>
                  <?php 
						include("conn.php");
						 $no=$_REQUEST['id'];
                            $data=mysql_query("select * from registration where id = $no");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                  <tr><td align="center"><font size="3px">User Name :</font></td><td align="center"><font size="2px"><?php echo $row[1]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Address</font></td><td align="center"><font size="2px"><?php echo $row[2]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Birth-date</font></td><td align="center"><font size="2px"><?php echo $row[3]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">City</font></td><td align="center"><font size="2px"><?php echo $row[4]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Gender</font></td><td align="center"><font size="2px"><?php echo $row[5]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Email</font></td><td align="center"><font size="2px"><?php echo $row[6]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Contact</font></td><td align="center"><font size="2px"><?php echo $row[7]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">User-ID</font></td><td align="center"><font size="2px"><?php echo $row[8]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Password</font></td><td align="center"><font size="2px"><?php echo $row[9]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">User Type</font></td><td align="center"><font size="2px"><?php echo $row[10]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Security Que</font></td><td align="center"><font size="2px"><?php echo $row[11]; ?></font></td></tr>
                     <tr><td align="center"><font size="3px">Seurity Ans</font></td><td align="center"><font size="2px"><?php echo $row[12]; ?></font></td></tr>
                    <?php
                                
                            }
                    ?>
                </table>
                <br/>
                <br/>
                <center>
                <input type="submit" class="button" value="Back to List">
                </center>
                <br/>
                <br/>
              </form>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>