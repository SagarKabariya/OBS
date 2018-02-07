<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>

</script>
<?php
		$userid;
		include("headadmin.php");
		include("conn.php");
		$getsub="select * from sub_book_cat";
		$getaut="select * from author_master";
		$getpub="select * from publisher_master";
		if(isset($_POST['Submit']))
		{
			if(isset($_SESSION['uid']))
			{
			 $userid=$_SESSION['uid']."<br>";
			 $bookname=$_POST['bname']."<br>";
			 $sdes=$_POST['sdesc']."<br>";
			 $ldes=$_POST['ldesc']."<br>";
			 $subcid=$_POST['subcat']."<br>";
			 $autid=$_POST['auth']."<br>";
			 $pubid=$_POST['publi']."<br>";
			 $reld=$_POST['txtCalendar']."<br>";
			 $edi=$_POST['edition'];
			
			$getsubcid="SELECT `sub_cat_id` FROM `sub_book_cat` WHERE `sub_book_cat_name` like '$subcid'";
			$getpubid="select `publisher_id` from publisher_master where `publisher_name` like '$pubid'";
			$getauthid="SELECT `author_id` FROM `author_master` WHERE `author_name` like '$autid'";
			
			
			$qrygetsubid=mysql_query($getsubcid);
			$ab=mysql_fetch_row($qrygetsubid);
			$finsubid=$ab[0];
			
			$qrygetpubid=mysql_query($getpubid);
			$ac=mysql_fetch_row($qrygetpubid);
			$finpubid=$ac[0];
			
			$qrygetauthid=mysql_query($getauthid);
			$ad=mysql_fetch_row($qrygetauthid);
			$finauthid=$ad[0];
			
			
			
			$allowedExts = array("odt", "pdf", "txt");
				$temp = explode(".", $_FILES["pfile"]["name"]);
				$extension = end($temp);
				$pdfpath="../bookpath/";
				if ((($_FILES["pfile"]["type"] == "application/pdf")
				|| ($_FILES["pfile"]["type"] == "application/txt")
				|| ($_FILES["pfile"]["type"] == "application/doc")
				|| ($_FILES["pfile"]["type"] == "application/odt"))
				&& ($_FILES["pfile"]["size"] < 50000000)
				&& in_array($extension, $allowedExts))
				  {
				  if ($_FILES["pfile"]["error"] > 0)
					{
					echo "Wrong file: " . $_FILES["pfile"]["error"] . "<br>";
					}
				  else
					{				
					if (file_exists($pdfpath . $_FILES["pfile"]["name"]))
					  {
					  echo $_FILES["pfile"]["name"] . "  ";
					  }
					else
					  {
					  move_uploaded_file($_FILES["pfile"]["tmp_name"],$pdfpath . $_FILES["pfile"]["name"]);
					  $finalpath= $pdfpath . $_FILES["pfile"]["name"];
					  }
					}
				  }
				else
				  {
				  echo "Wrong File Type";
				  }
				  
				$allowedExtsimg = array("gif", "jpeg", "jpg", "png");
				$tempimg = explode(".", $_FILES["imgfile"]["name"]);
				$extensionimg = end($tempimg);
				$imgpath="../bookimg/";
				if ((($_FILES["imgfile"]["type"] == "image/gif")
				|| ($_FILES["imgfile"]["type"] == "image/jpeg")
				|| ($_FILES["imgfile"]["type"] == "image/jpg")
				|| ($_FILES["imgfile"]["type"] == "image/pjpeg")
				|| ($_FILES["imgfile"]["type"] == "image/x-png")
				|| ($_FILES["imgfile"]["type"] == "image/png"))
				&& ($_FILES["imgfile"]["size"] < 50000000)
				&& in_array($extensionimg, $allowedExtsimg))
				  {
				  if ($_FILES["imgfile"]["error"] > 0)
					{
					echo "Wrong file: " . $_FILES["imgfile"]["error"] . "<br>";
					}
				  else
					{				
					if (file_exists($imgpath . $_FILES["imgfile"]["name"]))
					  {
					  echo $_FILES["imgfile"]["name"] . "  ";
					  }
					else
					  {
					  move_uploaded_file($_FILES["imgfile"]["tmp_name"],$imgpath . $_FILES["imgfile"]["name"]);
					  $finalimgpath= $imgpath . $_FILES["imgfile"]["name"];
					  }
					}
				  }
				else
				  {
				  echo "Wrong File Type";
				 }
				   $finalqry="INSERT INTO `book`(`sub_cat_id`, `book_name`, `book_sdesc`, `book_ldesc`, `publisher_id`, `author_id`, `edition`, `rel_date`, `image`,`book_path`,	special_book) VALUES ('$finsubid','$bookname','$sdes','$ldes','$finpubid','$finauthid','$edi','$reld','$finalimgpath','$finalpath','0')";
				  if(mysql_query($finalqry))
				  {
					  echo "<script type='text/javascript'>alert('Thank you for Upload book');</script>";
				  }
				  else
				  {
  					  echo "<script type='text/javascript'>alert('Something wrong in uploading contact with admin');</script>";
				  }
			}
			else
			{
			   	echo "<script type='text/javascript'>alert('first login then you can download the book');</script>";
			}
	}
	
?>


<title>E-Book</title>
<link rel='stylesheet' href='calendar.css' title='calendar'>
<link rel='stylesheet' href='calendar_pink.css' title='calendar'>

<script language="javascript" src="calendar.js"></script>

<script type="text/javascript" src="js/jsDatePick.jquery.min.1.3.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />



<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />

</head>
<body>
<section id="sys-notification"><div class="container"><div id="notification"></div></div></section>
<section id="columns"><div class="container"><div class="row-fluid">
 
<div class="span12">
<div id="content">	  
	  <h1>Add New Book</h1>
	 
	  <form method="post" enctype='multipart/form-data'>
		<h2>Your Personal Details</h2>
		<div class="content">
		  <table class="form">
			
 		<tr>
          <td><span class="required">*</span> Sub Category:</td>
          <td><select id="subcat" calss="dropdown-menu" name="subcat">
					<option value="">-----Select Sub category-----</option>
                     <?php
		  			$ressub=mysql_query($getsub);
					while($row=mysql_fetch_array($ressub))
					{
					echo "<option value='$row[2]' id='$row[1]'>$row[2]</option>";
					}
			?>
					</select>
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> Author:</td>
          <td><select id="auth" calss="dropdown-menu" name="auth">
					<option value="">-----Select Author-----</option>
                     <?php
		  			$resaut=mysql_query($getaut);
					while($row=mysql_fetch_array($resaut))
					{
					echo "<option value='$row[1]' id='$row[0]'>$row[1]</option>";
					}
			?>
					</select>
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> Publication :</td>
          <td><select id="publi" calss="dropdown-menu" name="publi">
					<option value="" style="text-align:center">-----Select Publisher-----</option>
                     <?php
		  			$respub=mysql_query($getpub);
					while($row=mysql_fetch_array($respub))
					{
					echo "<option value='$row[1]' id='$row[0]'>$row[1]</option>";
					}
			?>
					</select>
            </td>
        </tr>
		 <tr>
			  <td><span class="required">*</span> Edition :</td>
			  <td>
              <select id="seledi" calss="dropdown-menu" name="edition">
					<option value="" style="text-align:center">-----Select Edition-----</option>
              	<?php
					for($i=1;$i<=20;$i++)
						echo "<option value='$i' id='$i'>$i</option>";
				?>
                </select>
				</td>
			</tr>
            
            <tr>
			  <td><span class="required">*</span> Book Name:</td>
			  <td><input type="text" name="bname" value="" />
				</td>
			</tr>
			<tr>
			  <td><span class="required">*</span> Short Description:</td>
			  <td><input type="text" name="sdesc" value="" />
				</td>
			</tr>
            <tr>
			  <td><span class="required">*</span> Long Description:</td>
			  <td><textarea name="ldesc" id="textarea" cols="25" rows="5"></textarea></td>
			</tr>
			<tr>
			  <td><span class="required">*</span> Release Date :</td>
			  <td><input name='txtCalendar' id='idCalendar' class='inputBoxStyle'>
<img height="23px" width="23px" src='dt.jpg' align='absmiddle' onMouseOver="fnInitCalendar(this, 'idCalendar','expiry=false,close=true')">
			  						</td>
			</tr>
			        <tr>
          <td><span class="required">*</span> Upload PDF Book:</td>
          <td><input type="file" name="pfile" id="pfile"><br>	<span class="required">Upload Only PDF Format File</span>	
            </td>
        </tr>
          <tr>
          <td><span class="required">*</span> Upload Image Book:</td>
          <td><input type="file" name="imgfile" id="imgfile"><br>	<span class="required">Upload Image</span>	
            </td>
        </tr>
		</table>
		</div>
				<div class="buttons">
		  <div class="center">
						<input type="submit" value="Submit" class="button"  name="Submit"/>
		  </div>
		</div>
			  </form>
	  </div>
	<script type="text/javascript"><!--
	$(document).ready(function() {
		$('.colorbox').colorbox({
			width: 640,
			height: 480
		});
	});
	//--></script> 
</div>	

		</div></div></section>
 
	
	</section>
<div id="powered">
	<div class="container">
		<div class="container-inner">
			<div class="pull-left">
				<ul class="list-menu">

				<li><a href="file:///C|/Users/Admin/Downloads/tell-a-friend.html">Tell a Friend</a></li>
	  		
					  <li><a href="file:///C|/Users/Admin/Downloads/manufacturer.html">Brands</a></li>
					  <li><a href="file:///C|/Users/Admin/Downloads/voucher.html">Gift Vouchers</a></li>
					  <li><a href="file:///C|/Users/Admin/Downloads/affiliate-login.html">Affiliates</a></li>
					  <li><a href="file:///C|/Users/Admin/Downloads/specials.html">Specials</a></li>
				</ul>
			</div>
			<div class="copyright pull-right">
<div class="power-by-00497"><a href="http://www.kartrocket.com/" title="eCommerce Software by KartRocket" target="_blank">eCommerce Software</a> by <img src="file:///C|/Users/Admin/www.kartrocket.co/nfs/image_base/kartrocket-logo-small.png" alt="eCommerce India"  /></div>
	
			</div>
		</div>
	</div>
</div>
	</body>
</html>
