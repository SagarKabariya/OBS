<!DOCTYPE html>
<html>
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
<?php
	include("headadmin.php");
?>
</head>
<body bgcolor="#FFFFFF">
<section id="columns">
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div id="content"><div>
	  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                            <th align="center" valign="center"><h1>--------Manage User Shared Book--------</h1>
                              <h1>----------------------------------------------------------------------------------------------</h1>
                            </th>
                            <form  action="showbook.php" name="book" method="post" >
                                        <table height="100%" width="100%" border="1px">
                                            <tr align="center">
                                                
                                                <th><font size="2px">Book-Name</font></th>
												<th><font size="2px">Short-Descrition</font></th>
												<th><font size="2px">Author</font></th>
                                                <th><font size="2px">Publisher</font></th>
                                                <th><font size="2px">Show Datail</font></th>
                                                <th><font size="2px">Approve</font></th>
                                                <th><font size="2px">Delete</font></th>
                    </tr>
                    <?php
					include("conn.php");
                            $data=mysql_query("select * from user_share where approv = 0");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr align="center">
                        <td><font size="2px"><?php echo $row[4]; ?></font></td>
                        <td><font size="2px"><?php echo $row[5]; ?></font></td>
                        
                        <td><font size="2px">
						<?php							
							$getath=mysql_query("SELECT `author_name` FROM `author_master` WHERE `author_id`='$row[8]'");
							$ra=mysql_fetch_array($getath);
							echo $ra[0];							
							
   					 	?>
                        </font></td>
                        <td><font size="2px">
						<?php 
							$getath=mysql_query("SELECT `publisher_name` FROM `publisher_master` WHERE `publisher_id`='$row[7]'");
							$ra=mysql_fetch_array($getath);
							echo $ra[0];					
						?>
                        </font></td>
                        
						<td><font size="2px"><a href="showfullUS.php?id=<?php echo $row[0]; ?>">Show</a></font></td>
                        <td><font size="2px"><a href="allowUS.php?id=<?php echo $row[0]; ?>">Allow</a></font></td>
                        <td><font size="2px"><a href="delbook.php?id=<?php echo $row[0]; ?>">Delete</a></font></td>
                    <?php
                                
                            }
                    ?>
  
                </table><br/><br/>
            </form>
                     
                     
                </table>
	  </div></div>
    </div>
  </div>
</div>
</body>
</html>