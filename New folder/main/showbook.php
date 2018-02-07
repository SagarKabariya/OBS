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
	  
	  <div style="float:right"><a href="addbook2.php" class="button">Add Book</a></div>
	  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                            <th align="center" valign="center"><h1>--------Manage Book--------</h1>
                              <h1>----------------------------------------------------------------------------------------------</h1>
                            </th>
                            <form  action="showbook.php" name="book" method="post" >
                                        <table height="100%" width="100%" border="1px">
                                            <tr align="center">
                                                
                                                <th><font size="2px">Book-Name</font></th><td></td>
												<th><font size="2px">Short-Descrition</font></th><td></td>
												<th><font size="2px">Publisher</font></th><td></td>
                                                <th><font size="2px">Author</font></th><td></td>
                                                <th><font size="2px">Edition</font></th><td></td>
												<th><font size="2px">Release-Date</font></th><td></td>
                                                <th><font size="2px">Image </font></th><td></td>
                                                <th><font size="2px">Special-Book</font></th><td></td>
                                                <th><font size="2px">Book-Path</font></th><td></td>
                                               
                                                <th><font size="2px">Update</font></th><td></td>
                                                <th><font size="2px">Delete</font></th><td></td>
                    </tr>
                    <?php
					include("conn.php");
                            $data=mysql_query("select * from book");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr align="center">
                        <td><font size="2px"><?php echo $row[2]; ?></font></td><td></td>
                        <td><font size="2px"><?php echo $row[3]; ?></font></td><td></td>
                        <td><font size="2px"><?php echo $row[5]; ?></font></td><td></td>
                        <td><font size="2px"><?php echo $row[6]; ?></font></td><td></td>
                        <td><font size="2px"><?php echo $row[7]; ?></font></td><td></td>
                        <td><font size="2px"><?php echo $row[8]; ?></font></td><td></td>
                        <td ><font size="2px"><img  width="55px" height="55px"  src="<?php echo $row[9]; ?>" ><br></img></font></td><td></td>
                        <td><font size="2px"><?php echo $row[10]; ?></font></td><td></td>
                        <td><font size="2px"><?php echo $row[11]; ?></font></td><td></td>
						<td><font size="2px"><a href="updatebook.php?id=<?php echo $row[1]; ?>">Update</a></font></td><td></td>
                        <td><font size="2px"><a href="delbook.php?id=<?php echo $row[1]; ?>">Delete</a></font></td><td></td>
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