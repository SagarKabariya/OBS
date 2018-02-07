<?php
        require_once 'conn.php';
        if(isset($_REQUEST[save]))
        {
			$c1=0;
			$er=0;
			$f=0;
            if($_REQUEST[state]=="--Select--")
            {
                $c1=1;
            }
            if($_REQUEST[city]=="")
            {
                $er=1;
            }
            $data=  mysql_query("select city_name from city");
            while($row=  mysql_fetch_array($data))
            {
                if($row[0]==$_REQUEST[state])
                {
                    $f=1;
                    break;
                }
            }
            if($er!=1 && $f!=1 && $c1!=1)
            {
                $gg=  mysql_query("select state_id from state where state_name='$_REQUEST[state]'");
                $g=  mysql_fetch_array($gg);
               
                $in=  mysql_query("insert into city values($g[0],0,'$_REQUEST[city]')");
                header('location:showcity.php');
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
                    
                         
                         <form  action="addstate.php" name="country" method="post">
                             <tr>
                             <td valign="top" align="center" colspan="2"><h3><b>Add City</b></h3></td>
                 </tr>
                             <tr>   
                                 <td align="center"><font size="2"> State Name :</font></td>
                                 <td>
                                        <select name="state">
                                            
                                         <?php
                                        $c=0;
                                            $data=  mysql_query("select * from state");
                                            while($row=  mysql_fetch_array($data))
                                            {
                                        
                                           
                                            
                                            if($c==0)
                                            {
                                                ?>
                                            <option id="<?php echo $row[1];?>">--Select--</option>
                                            <?php
                                            }
                                            ?>
                                            
                                            <option><?php $c++; echo $row[1];?></option>
                                        <?php
                                            
                                            }
                                        ?>
                                        </select><?php if($c1==1) echo "<font color=red size=2> Select State</font>";?>
                                </td>
                             </tr>
            <th>  
                <tr><td><br></td></tr>
                  <tr align="center">
                        <tr colspan="3">
                            <td align="center" ><font size="2px">&nbsp;&nbsp;State Name :</font></td>
                            <td align="left"><input name="city"   size="15" type="text"></input>
                            <?php if($e==1){ echo "<font color='red'> Require..!</font>"; } ?>
                            <?php if($f==1) echo "<font color=red size=2> Allready Exist..!</font>" ; ?></td>
                         </tr>
                          <tr><td><br></td></tr>
                          <tr align="center">
                              <td colspan="2"><button name="save" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="reset">Reset</button></td>
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