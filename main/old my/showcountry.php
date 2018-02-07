<!DOCTYPE html>
<?php
	include("conn.php");
	if(isset($_REQUEST['insert']))
	{
		header("Location: http://localhost/obs/main/addcountry.php");
	}
?>
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
      <div id="content"><div >
	  
	   <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <th align="center" valign="center" colspan="5" style="padding-left: 100px;"><h1>--------Manage Country--------</h1></th>
                            
                            
                                <form  action="" name="country" method="post" >
                                        <table align="center"  style="padding-left: 120px;">
										<tr colspan="8">
											<td ><button type="submit" name="insert">Insert</button> </td>
										</tr>
                                            <tr>
                                                <th> <font size="2px">Country Id</font></th><td></td>
                                                 <th style="padding-left: 50px;"> <font size="2px">Name</font></th><td></td>
                                                  <th style="padding-left: 50px;"> <font size="2px">Update</font></th><td></td>
                                                  <th style="padding-left: 50px;"> <font size="2px">Delete</font></th><td></td>
                                            </tr>
                                            <tr><td><br></td></tr>
                    <?php 
                            $data=mysql_query("select * from country");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr>
                        <td > <font size="2px"><?php echo $row[0]; ?></font></td><td></td>
                        <td style="padding-left: 50px;" > <font size="2px"><?php echo $row[1]; ?></font></td><td></td>
                        
                        <td style="padding-left: 50px;"><a href="updatecountry.php?id=<?php echo $row[0]; ?>">Update</a></td><td></td>
                        <td style="padding-left: 50px;"><a href="deletecountry.php?id=<?php echo $row[0]; ?>">Delete</a></td><td></td>
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