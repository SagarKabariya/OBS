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
          <table border="0" cellpadding="0" cellspacing="0" align="center">
            
              <th align="center" valign="center"><h1>--------Manage Registration--------</h1></th>
              <form  action="showregister.php" name="registration" method="post" >
                <table height="100%" width="100%" align="center" border="2px">
                  <tr>
                    <th align="center"><font size="2px">Name</font></th>
                    <th align="center"><font size="2px">Email </font></th>
                    <th align="center"><font size="2px">Contacts</font></th>
                    <th><font size="2px">UseId</font></th>
                    <th><font size="2px">Password</font></th>
                    <th><font size="2px">User Type</font></th>
                     <th><font size="2px">Block Status</font></th>
                    <th><font size="2px">Show Detail</font></th>
                    <th><font size="2px">Block User</font></th>
                  </tr>
                  <?php 
						include("conn.php");
                            $data=mysql_query("select * from registration");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                  <tr>
                    <td align="center"><font size="2px"><?php echo $row[1]; ?></font></td>
                    <td align="center"><font size="2px"><?php echo $row[6]; ?></font></td>
                    <td align="center"><font size="2px"><?php echo $row[7]; ?></font></td>
                    <td align="center"><font size="2px"><?php echo $row[8]; ?></font></td>
                    <td align="center"><font size="2px"><?php echo $row[9]; ?></font></td>
                    <td align="center"><font size="2px"><?php echo $row[10]; ?></font></td>
                    <td align="center"><font size="2px"><?php echo $row[13]; ?></font></td>
                    <td align="center"><font size="2px"><a href="showfull.php?id=<?php echo $row['ID']; ?>">Show</a></font></td>
                    <td align="center"><font size="2px"><a href="delregister.php?id=<?php echo $row['ID']; ?>">Block/Unblock</a></font></td>
                    <?php
                                
                            }
                    ?>
                </table>
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