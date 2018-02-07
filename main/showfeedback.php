
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
	  
	  <table border="0" cellpadding="0" cellspacing="0" align="center" width="70%">
                            <th align="center" valign="center"><h1>--------Show FeedBack--------</h1></th>
                            
                            
                                <form  action="" name="subcat" method="post" >
                                        <table height="100%" width="1000%" align="center">
										
										<tr></tr>
                                            <tr>
                                                <th align="center"> <font size="2px">FeedBack Id</font></th><td></td>
                                                <th align="center"> <font size="2px">User Id</font></th><td></td>
                                                  <th align="center"> <font size="2px">Book Id</font></th><td></td>
                                                  <th align="center"> <font size="2px">FeedBack</font></th><td></td>
                                                  <th align="center"> <font size="2px">Delete</font></th><td></td>
                                            </tr>
                    <?php 
                            $data=mysql_query("select * from feedback");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr>
                        <td align="center"> <font size="2px"><?php echo $row[1]; ?></font></td><td></td>
                        <td align="center"> <font size="2px"><?php echo $row[0]; ?></font></td><td></td>
						<td align="center"> <font size="2px"><?php echo $row[2]; ?></font></td><td></td>
                       <td align="center"> <font size="2px"><?php echo $row[3]; ?></font></td><td></td>	
                        <td align="center"><a href="delfeedback.php?id=<?php echo $row[1]; ?>">Delete</a></td><td></td>
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