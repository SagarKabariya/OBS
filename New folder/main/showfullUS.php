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
          <form action="usershare.php" method="post">
            <table border="1" cellpadding="0" cellspacing="0" align="center" width="400px">
              <tr align="center">
                <td colspan="2"><font size="+1" style="font-weight:bolder"> Full Information </font></td>
              </tr>
              <?php 
						include("conn.php");
						 $no=$_REQUEST['id'];
                            $data=mysql_query("select * from user_share where user_share_id = $no");
                            while($row=mysql_fetch_array($data))
                            {
                    ?>
              <tr>
                <td align="center"><font size="3px">User ID :</font></td>
                <td align="center"><font size="2px"><?php echo $row[1]; ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Main Category</font></td>
                <td align="center"><font size="2px">
				<?php 
							$getath=mysql_query("SELECT `main_cat_name` FROM `main_book_cat` WHERE `main_book_id`='$row[2]'");
							$ra=mysql_fetch_array($getath);
							echo $ra[0];
				?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Sub category</font></td>
                <td align="center"><font size="2px"><?php 
							$getath=mysql_query("SELECT `sub_book_cat_name` FROM `sub_book_cat` WHERE `sub_cat_id`='$row[3]'");
							$ra=mysql_fetch_array($getath);
							echo $ra[0];
				 ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Book Title</font></td>
                <td align="center"><font size="2px"><?php echo $row[4]; ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Short Desc</font></td>
                <td align="center"><font size="2px"><?php echo $row[5]; ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Long Desc</font></td>
                <td align="center"><font size="2px"><?php echo $row[6]; ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Publisher</font></td>
                <td align="center"><font size="2px">
                  <?php 
					 $getath=mysql_query("SELECT `publisher_name` FROM `publisher_master` WHERE `publisher_id`='$row[7]'");
							$ra=mysql_fetch_array($getath);
							echo $ra[0];	
					  ?>
                  </font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Author</font></td>
                <td align="center"><font size="2px">
                  <?php $getath=mysql_query("SELECT `author_name` FROM `author_master` WHERE `author_id`='$row[8]'");
							$ra=mysql_fetch_array($getath);
							echo $ra[0]; ?>
                  </font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Edition</font></td>
                <td align="center"><font size="2px"><?php echo $row[9]; ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">PDF Book</font></td>
                <td align="center"><font size="2px"><?php echo $row[10]; ?></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Book Image</font></td>
                <td align="center"><font size="2px"><img src="<?php echo $row[11]; ?>" width="200px" height="200px"></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Release Date</font></td>
                <td align="center"><font size="2px"><?php echo $row[12]; ?></font></td>
              </tr>
              <?php
                                
                            }
                    ?>
            </table>
            <br/>
            <br/>
            <center>
              <input type="submit" class="button" value="Back to List">
            </center>
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