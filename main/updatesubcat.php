<?php
        require_once 'conn.php';
       $er=0;
       $get=  mysql_query("select sub_book_cat_name from sub_book_cat where sub_cat_id=$_REQUEST[id]");
       $g= mysql_fetch_array($get);
       
                            
        if(isset($_REQUEST["save"]))
        {
            if($_REQUEST[name]=="")
            {
                $er=1;
            }
           
            
            if($er!=1)
            {

               $up=  mysql_query("update sub_book_cat set sub_book_cat_name='$_REQUEST[name]' where sub_cat_id=$_REQUEST[id]");
                header('location:showsubcat.php');
            }
            
        }
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
      <div id="content"><div style="margin-top:200px; margin-left:310px;">
	  
	   <table  border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                     <form action="" name="updatecategory" method="post">
                    <tr>
                             <td valign="top" align="center" colspan="2"><h3><b>Update Sub-Category</b></h3></td>
                 </tr>
                    <tr>
                        <td><br><br><font size="2px">Sub-Category :</font></td>
                                    <td><br><br><input type="text" name="name" value="<?php echo $g[0];?>">
                                    <?php if($er==1) echo "<font color=red size=2>Require Field..!</font>" ; ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="2"></td>
                                </tr>
                                <tr align="center">
                                    <td colspan="2"><br><br>
                                                <button type="submit" name="save"> Update</button>&nbsp;&nbsp;&nbsp;
                                                <button type="reset"> Reset</button>
                                    </td>
                                </tr>
                     </form> 
              
                        </table>
	  
	  </div></div>
    </div>
  </div>
</div>
</body>
</html>