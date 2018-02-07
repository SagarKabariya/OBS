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
            $data=  mysql_query("select sub_book_cat  from sub_book_cat");
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
                $in=  mysql_query("insert into sub_book_cat values(0,'$_REQUEST[name]')");
                header('location:showsubcat.php');
            }
            
        }
?>

<?php
	$c1=0;
			$er=0;
			$f=0;
			$e=0;
        require_once 'conn.php';
        if(isset($_REQUEST['save']))
        {
			
            if($_REQUEST[main]=="--Select--")
            {
                $c1=1;
            }
            if($_REQUEST[sub]=="")
            {
                $er=1;
            }
            $data=  mysql_query("select sub_book_cat_name from sub_book_cat");
            while($row=  mysql_fetch_array($data))
            {
                if($row[0]==$_REQUEST['sub'])
                {
                    $f=1;
                    break;
                }
            }
            if($er!=1 && $f!=1 && $c1!=1)
            {
                $gg=  mysql_query("select main_book_id from main_book_cat where main_cat_name='$_REQUEST[main]'");
                $g=  mysql_fetch_array($gg);
               
                $in=  mysql_query("insert into sub_book_cat values($g[0],0,'$_REQUEST[sub]')");
                header('location:showsubcat.php');
            }
            if(isset($_REQUEST["back"]))
        	{
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
      <div id="content"><div>
	  
	<table  border="0" cellpadding="0" cellspacing="0" align="center" width="400">
                    
                         
                         <form  action="addsubcat.php" name="country" method="post">
                             <tr>
                             <td valign="top" align="center" colspan="2"><h3><b>Add Sub Category</b></h3></td>
                 </tr>
                             <tr>   
                                 <td align="center"><font size="2"> Main ategory Name :</font></td>
                                 <td>
                                        <select name="main">
                                            
                                         <?php
                                        $c=0;
                                            $data=  mysql_query("select * from main_book_cat");
                                            while($row=  mysql_fetch_array($data))
                                            {
                                        
                                           
                                            
                                            if($c==0)
                                            {
                                                ?>
                                            <option id="<?php echo $row[0];?>">--Select--</option>
                                            <?php
                                            }
                                            ?>
                                            
                                            <option><?php $c++; echo $row[1];?></option>
                                        <?php
                                            
                                            }
                                        ?>
                                        </select><?php if($c1==1) echo "<font color=red size=2> Select Country</font>";?>
                                </td>
                             </tr>
            <th>  
                <tr><td><br></td></tr>
                  <tr align="center">
                        <tr colspan="3">
                            <td align="center" ><font size="2px">&nbsp;&nbsp;Sub Categoty Name :</font></td>
                            <td align="left"><input name="sub"   size="15" type="text"></input>
                            <?php if($e==1){ echo "<font color='red'> Require..!</font>"; } ?>
                            <?php if($f==1) echo "<font color=red size=2> Allready Exist..!</font>" ; ?></td>
                         </tr>
                          <tr><td><br></td></tr>
                          <tr align="center">
                              <td colspan="2"><input name="save" class="button" type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" class="button" value="reset">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="button" href="showsubcat.php">Back To List</a>
                            </td>
                        </tr>                       
                  </tr>
              </th>
	                         
                     </form> 
                </table>
	  
	  </div></div>
    </div>
  </div>
</div>
</body>
</html>