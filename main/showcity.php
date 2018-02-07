<!DOCTYPE html>
<?php 
    require_once 'conn.php';
    $data=  mysql_query("select * from city");
?>
<html>
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../../my final work/djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../../my final work/djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../../my final work/djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
<?php
	include("headadmin.php");
?>
</head>
<body bgcolor="#FFFFFF">
<section id="columns">
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div id="content"><div >
	  <table border="0" cellpadding="0" cellspacing="0" align="center"  style="padding-left: 100px;">
                            <th align="center" valign="center" colspan="6"><h1>--------Manage City--------</h1></th>
                            
                            
                                <form  action="" name="state" method="post" >
                                        <table height="100%" width="100%" align="center" style="padding-left: 100px;">
										<tr>
											<td colspan="5" align="right"><a href="addcity.php" class="button" >Add City</a></td>
											
										</tr>
                                    <tr align="center">
                                        
                                                <th><font size="2px">StateId</font></th>
                                                <th> <font size="2px">City Id</font></th>
                                                 <th> <font size="2px">Name</font></th>
                                                  
                                                  <th> <font size="2px">Update</font></th>
                                                  <th> <font size="2px">Delete</font></th>
                                            </tr>
                                    <tr><td><br></td></tr>
                    <?php
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                                    
                     <tr align="center">
                         <td><font size="2px"><?php echo $row[1]; ?></font></td>
                                    <td><font size="2px"><?php echo $row[0]; ?></font></td>
                                    <td><font size="2px"><?php echo $row[2]; ?></font></td>
                                   
                                    <td><font size="2px"><a href="updatecity.php?id=<?php echo $row[1]; ?>">Update</a></font></td>
                                    <td><a href="deletecity.php?id=<?php echo $row[0]; ?>">Delete</a></td>
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
  </section>
</body>
</html>