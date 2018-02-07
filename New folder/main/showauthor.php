<?php
	include("conn.php");
?>
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
	  
	  <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <th align="center" valign="center"><h1>--------Manage Author--------</h1></th>
                            
                            
                                <form  action="" name="subcat" method="post" >
                                        <table height="100%" width="70%" align="center" border="1">
                                       		<tr>
											<td colspan="4" align="right"><a href="addauthor.php" class="button">Add Author</a></td>
										</tr>
                                       
									        <tr>
                                                <th> <font size="2px">Author Id</font></th>
                                                <th> <font size="2px">Author Name</font></th>
                                                  
                                                  <th> <font size="2px">Update</font></th>
                                                  <th> <font size="2px">Delete</font></th>
                                            </tr>
                    <?php 
                            $data=mysql_query("select * from author_master");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr>
                        <td align="center"> <font size="2px"><?php echo $row[0]; ?></font></td>
                        <td align="center"> <font size="2px"><?php echo $row[1]; ?></font></td>
                        
                        <td align="center"><a href="updateauthor.php?id=<?php echo $row[0]; ?>">Update</a></td>
                        <td align="center"><a href="delauthor.php?id=<?php echo $row[0];?>">Delete</a></td>
                    </tr>
                    <?php
                                
                            }
                    ?>
                </table><br/><br/>
            </form>
                     
                     
                </table>
	  
	  <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <th align="center" valign="center"><h1>--------Manage Publisher--------</h1></th>
                            
                            
                                <form  action="" name="subcat" method="post" >
                                        <table height="100%" width="70%" align="center" border="2">
                                       		<tr>
											<td colspan="4" align="right"><a href="addpublisher.php"  class="button">Add Publisher</a></td>
										</tr>
                                       
									        <tr>
                                                <th> <font size="2px">Publisher Id</font></th>
                                                <th> <font size="2px">Publisher Name</font></th>
                                                  
                                                  <th> <font size="2px">Update</font></th>
                                                  <th> <font size="2px">Delete</font></th>
                                            </tr>
                    <?php 
                            $data=mysql_query("select * from Publisher_master");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr>
                        <td align="center"> <font size="2px"><?php echo $row[0]; ?></font></td>
                        <td align="center"> <font size="2px"><?php echo $row[1]; ?></font></td>
                        
                        <td align="center"><a href="updatepublisher.php?id=<?php echo $row[0]; ?>">Update</a></td>
                        <td align="center"><a href="delpublisher.php?id=<?php echo $row[0];?>">Delete</a></td>
                    </tr>
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