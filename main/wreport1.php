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
      <div style="margin-left:350px; font-size:large; color:#F00">Top Five Downloaded Book</div>
      <br>
      <div style="margin-left:00px">
      
      <table height="100%" width="70%" align="center" border="1px">
										
										<tr></tr>
                                            <tr align="center">
                                                <th> <font size="2px">Download_ID</font></th>
                                                <th> <font size="2px">Book_ID</font></th>
                                                  <th> <font size="2px">Download_Counter</font></th>
                                                  <th> <font size="2px">Download_Time</font></th>
                                               
                                            </tr>
                    <?php 
							
                            $data=mysql_query("select * from download order by download_counter desc limit 5");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr align="center">
                        <td align="center"> <font size="2px"><?php echo $row[0]; ?></font></td>
                        <td> <font size="2px"><?php echo $row[1]; ?></font></td>
						<td> <font size="2px"><?php echo $row[2]; ?></font></td>
                       <td> <font size="2px"><?php echo $row[3]; ?></font></td>
                     
                      
                       
                    </tr>
                    <?php
                                
                            }
                    ?>
                </table><br/><br/>
      
      </div>
    </div>
  </div>
  </div>
  </section>
</body>
</html>