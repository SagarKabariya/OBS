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
	  
	  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                            <th align="center" valign="center"><h1>--------Manage Main-Category-Book--------</h1></th>
                            
                            
                                <form  action="" name="maincat" method="post" >
                                <div style="float:right"><a href="addmaincat.php" class="button">Add Main Category</a></div>
                                        <table  align="center" width="760px">
                                            <tr>
                                                <th align="center"> <font size="2px">Main-Category Id</font></th>
                                                <th align="center"> <font size="2px">Name</font></th>
                                                  <th align="center"> <font size="2px">Update</font></th>
                                                  <th align="center"> <font size="2px">Delete</font></th>
                                            </tr>
                    <?php 
                            $data=mysql_query("select * from main_book_cat");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
                    <tr>
                        <td align="center"> <font size="2px"><?php echo $row['main_book_id']; ?></font></td>
                        <td align="center"> <font size="2px"><?php echo $row['main_cat_name']; ?></font></td>
                        <td align="center"><a href="updatemaincat.php?id=<?php echo $row['main_book_id']; ?>">Update</a></td>
                        <td align="center"><a href="delmaincat.php?id=<?php echo $row['main_book_id']; ?>">Delete</a></td>
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