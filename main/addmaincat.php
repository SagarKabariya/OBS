<?php
$er=0;
			$f=0;
        require_once 'conn.php';
        if(isset($_REQUEST['save']))
        {
			
            if($_REQUEST[name]=="")
            {
                $er=1;
            }
            $data=  mysql_query("select main_cat_name from main_book_cat");
            while($row=  mysql_fetch_array($data))
            {
                if($row[0]==$_REQUEST[name])
                {
                    $f=1;
                    break;
                }
            }
            if($er!=1 && $f!=1)
            {
                $in=  mysql_query("insert into main_book_cat values(0,'$_REQUEST[name]')");
                header('location:maincat.php');
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
      <div id="content"><div>
	  
	  <table  border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                     <form action="" name="state" method="post">
                            <tr>
                             <td valign="top" align="center" colspan="2"><h3><b>Add Main-Category</b></h3></td>
                 </tr>
                         <tr><td><br></td></tr>
                             <tr>
                                 <td align="center"><font size="2px">Main-Category :</font></td>
                                 <td style="padding-left: 10px; "><input name="name" size="20" type="text" align="center"><br>
                                 <?php if($er==1){ echo "<font color='red'> Please Enter ....!</font>"; } ?>
                                 <?php if($f==1) echo "<font color=red size=2> Allready Exist..!</font>" ; ?></td>

                             </tr>
                         <tr><td><br></td></tr>
                         <tr align="center">
                             <td colspan="2"><input name="save" type="submit" class="button" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp
                                 <input  type="reset" class="button" value="Reset">  </td>
                            </tr>                     
                     </form> 
                </table>
	  
	  </div></div>
    </div>
  </div>
</div>
</body>
</html>