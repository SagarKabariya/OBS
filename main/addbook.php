<?php
	$er=0;
	$e=0;
	$f=0;
	$g=0;
	$h=0;
	$i=0;
	$j=0;
	$k=0;
	$l=0;
	$eimg=0;
	
    require_once 'conn.php';
    if(isset($_REQUEST['save']))
    {
        if($_REQUEST[mainid]=="--Select--")
    {
        $er=1;
    }
    if($_REQUEST[sc]=="--Select--")
    {
        $eps=1;
    }
        if($_REQUEST[bname]=="")
        {
            $e=1;
        }
        if($_REQUEST[sdesc]=="")
        {
            $f=1;
        }
		if($_REQUEST[ldesc]=="")
        {
            $g=1;
        }
        if($_REQUEST[publisher]=="")
        {
            $h=1;
        }if($_REQUEST[author]=="")
        {
            $i=1;
        }
        if($_REQUEST[txtclaendar]=="")
        {
            $j=1;
        }
        if($_FILES[img][name]=="")
        {     
            $eimg=1;
        }
        if($_REQUEST[sbook]=="")
        {
            $k=1;
        }   
		
        if($_REQUEST[bpath]=="")
        {
            $l=1;
        }   
        $fname=$_FILES['img']['name'];
        
       $ex=substr($fname,strrpos($fname,".")+1);
       $ex=".".$ex;
       
       $get=  mysql_query("select max(book_id) from book");
       $gett=  mysql_fetch_array($get);
       $myname="product_".$gett[0].$ex;
       $dir=  dirname(__FILE__).'/bookimag/'.$myname;
       $path='bookimg/'.$myname;
       move_uploaded_file($_FILES['img']['tmp_name'], $dir);
       
       if($ex==".jpg" || $ex==".jpeg" || $ex==".png" || $ex==".gif")
       {
          $qy=  mysql_query("insert into book values('$_REQUEST[mainname]','$_REQUEST[sc]',0,'$_REQUEST[bname]','$_REQUEST[sdesc]','$_REQUEST[ldesc]','$_REQUEST[publisher]','$_REQUEST[author]','$_REQUEST[txtcalender]','$path','$_REQUEST[sbook]','$_REQUEST[bpath]')");           
     
          //echo "insert into product values('$_REQUEST[mainname]','$_REQUEST[sc]','$_REQUEST[typename]',0,'$_REQUEST[pname]','$path','$_REQUEST[price]','$_REQUEST[pdis]')";           
             header('location:showbook.php');
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
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<?php
	include("headadmin.php");
?>
</head>
<body bgcolor="#FFFFFF">
<section id="columns">
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div id="content"><div"><font size="+2" color="#C72121">
	  
	  <table  border="0" cellpadding="0" cellspacing="0" align="center" width="500" >
                            <form action="" name="addproduct" method="post" enctype="multipart/form-data">
                                     <tr>
                                         <td style="padding-left: 50px;" valign="top" colspan="2" align="center"><h3><b>Add Book</b></h3></td>
                 </tr>
                                    <tr><td><br></td></tr>
                                        <tr>
                                            <td align="center"><font size="2">Main-Category Book:</font></td>
                                            <td><select name="mainname" id="mainid" onChange="settype(this.value)">
                                                <option>--Select--</option>
                                                    <?php
                                                        $sql=  mysql_query("select main_book_id,main_cat_name from main_book_cat");
                                                        while($row=  mysql_fetch_array($sql))
                                                        {
                                                     ?>
                                                <option value="<?=$row['main_book_id']?>"><?=$row['main_cat_name']?></option>
                                                <?php
                                                        }
                                                ?>
                                                </select>
                                            </td>
                                        </tr>
                                    <tr><td><br></td></tr>
                                    <tr>
                                        <td align="center"><font size="2">Sub-Category Name:</font></td>
                                            <td><select name="sc" id="subid">
                                                <option>--Select--</option>
                                                    <?php
                                                        $sql=  mysql_query("select sub_cat_id,sub_book_cat_name from sub_book_cat");
                                                        while($row=  mysql_fetch_array($sql))
                                                        {
                                                     ?>
                                                <option value="<?=$row[0]?>"><?=$row[1]?></option>
                                                <?php
                                                        }
                                                ?>
                                                </select>
                                            
                                     </td>
                                </tr>
                                <tr><td><br></td></tr>
                                
                       <tr><td><br></td></tr>
                       <tr>
                           <td align="center" style="padding-left: 30px;"><font size="2">Book Name:</font></td>
                        <td><input type="text" name="bname" ></input>
                        <?php if($e==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?>
                        </td>
                       </tr>
                       <tr><td><br></td></tr>
					                          <tr>
                           <td align="center" style="padding-left: 30px;"><font size="2">Book Short-Description:</font></td>
                        <td><input type="text" name="sdesc" ></input>
                        <?php if($f==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?>
                        </td>
                       </tr>
                       <tr><td><br></td></tr>
					   <tr>
                           <td align="center" style="padding-left: 30px;"><font size="2">Book Long-Description:</font></td>
                        <td><input type="text" name="ldesc" ></input>
                        <?php if($g==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?>
                        </td>
                       </tr>
                       <tr><td><br></td></tr>
					    <tr>
                           <td align="center" style="padding-left: 30px;"><font size="2">Publisher:</font></td>
                        <td><input type="text" name="publisher" ></input>
                        <?php if($h==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?>
                        </td>
                       </tr>
                       <tr><td><br></td></tr>
					    <tr>
                           <td align="center" style="padding-left: 30px;"><font size="2">Author:</font></td>
                        <td><input type="text" name="author" ></input>
                        <?php if($i==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?>
                        </td>
                       </tr>
                       <tr><td><br></td></tr>
					   <td><span class="required">*</span> Relased Date:</td>
			  <td><input name='txtCalendar' id='idCalendar' class='inputBoxStyle'>
<img height="23px" width="23px" src='dt.jpg' align='absmiddle' onMouseOver="fnInitCalendar(this, 'idCalendar','expiry=false,close=true')">
					<?php if($j==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?>
			  						</td>
					   
                       <tr>
                        <td align="center" style="padding-left: 80px;"><font size="2">Image:</font></td>
                        <td><input type="file" name="img"></input>
                        <?php if($eimg==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?> 
                        <?php if($e==1){ echo "<font color='red' size=2> Please Select Coorect File....!</font>"; } ?>
                        </td>
                       </tr>
                       <tr><td><br></td></tr>
                       <tr>
                            <td align="center" style="padding-left: 80px;"><font size="2">Special Book:</font></td>
                            <td><input name="sbook"   size="10" type="text"></input>
                            <?php if($k==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?> 
                            </td>
                        </tr>
                         <tr><td><br></td></tr>
                         <tr>
                                <td align="center"><font size="2">Book Path:</font></td>
                                <td><input type="text" name="bpath"></textarea>
                                    <?php if($l==1){ echo "<font color='red' size=2> Please Enter ....!</font>"; } ?> 
                                </td>
                        </tr>
                        <tr><td><br></td></tr>

                         <tr align="center">
                             <td colspan="2"><button name="save" type="submit">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp
                                 <button  type="reset">Reset</button>  </td>
                        </tr> 
                        <tr><td><br></td></tr>
                     </form> 
                </table>
	  
	  
	  
	  </div></div>
    </div>
  </div>
</div>
</body>
</html>>
