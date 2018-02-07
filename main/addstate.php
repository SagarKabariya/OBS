<?php
	$c1=0;
			$er=0;
			$f=0;
			$e=0;
        require_once 'conn.php';
        if(isset($_REQUEST['save']))
        {
			
            if($_REQUEST[con]=="--Select--")
            {
                $c1=1;
            }
            if($_REQUEST[state]=="")
            {
                $er=1;
            }
            $data=  mysql_query("select state_name from state");
            while($row=  mysql_fetch_array($data))
            {
                if($row[0]==$_REQUEST['state'])
                {
                    $f=1;
                    break;
                }
            }
            if($er!=1 && $f!=1 && $c1!=1)
            {
                $gg=  mysql_query("select id from country where country_name='$_REQUEST[con]'");
                $g=  mysql_fetch_array($gg);
               
                $in=  mysql_query("insert into state values($g[0],0,'$_REQUEST[state]')");
                header('location:showstate.php');
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
                             <td valign="top" align="center" colspan="2"><h3><b>add state</b></h3></td>
                 </tr>
                             <tr>   
                                 <td align="center"><font size="2"> Country Name :</font></td>
                                 <td>
                                        <select name="con">
                                            
                                         <?php
                                        $c=0;
                                            $data=  mysql_query("select * from country");
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
                            <td align="center" ><font size="2px">&nbsp;&nbsp;State Name :</font></td>
                            <td align="left"><input name="state"   size="15" type="text"></input>
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