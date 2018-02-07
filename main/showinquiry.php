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
      <div id="content">
        <div>
          <table border="0" cellpadding="0" cellspacing="0" align="center">
            
              <th align="center" valign="center"><h1>--------Show Inquiry--------</h1></th>
              <form  action="" name="subcat" method="post" >
                <table height="100%" width="100%" align="center">
                  <tr align="center">
                    <th> <font size="2px">First name</font></th>
                    <th> <font size="2px">Email</font></th>
                    <th> <font size="2px">Inquiry</font></th>
                    <th> <font size="2px">Reply</font></th>
                    <th> <font size="2px">Delete</font></th>
                  </tr>
                  <?php 
                            $data=mysql_query("select * from enquiry");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                  <tr>
                    <td align="center"><font size="2px"><?php echo $row[1]; ?></font></td>
                   
                    <td align="center"><font size="2px"><?php echo $row[2]; ?></font></td>
                   
                    <td align="center"><font size="2px"><?php echo $row[3]; ?></font></td>
                    
                    <td align="center"><a href="delinquiry.php?id=<?php echo $row[0]; ?>">Reply</a></td>
                    
                    <td align="center"><a href="delinquiry.php?id=<?php echo $row[0]; ?>">Delete</a></td>
                  
                  </tr>
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