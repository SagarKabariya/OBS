<html>
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
<?php
	include("head.php");
?>
</head>
<body>
	
<section id="sys-notification"><div class="container"><div id="notification"></div></div></section>
<section id="columns">

<div class="container"><div class="row-fluid"> 
<div class="span12">
<div id="content">  <div class="breadcrumb">
        <a href="home.html">Home</a>
         &raquo; <a href="contact-us.php">Contact Us</a>
      </div>
  <h1>Contact Us</h1>

    <h2>Our Location</h2>
    <div class="contact-info">
      <div class="content"><div class="left"><b>Address:</b><br />
        Online Liabrary Book Store, <br />A-604, Henry Complex, <br />ghod doad road, <br />surat  <br />
        <br />
Gujarat<br />India
<br />
</div>
      <div class="right">
                <b>Mobile:</b><br />
        7405728288<br />
        <br />
                        <b>Landline:</b><br />
        0261-252525                <br />

      </div>
    </div>
    </div>
    <h2>Contact Form</h2>
    <div class="content">
    <form name="frm" method="post">
    <b>First Name:</b><br />
    <input type="text" name="txtfname" value=""/>
    <br />
        <br />
    <b>E-Mail Address:</b><br />
    <input type="text" name="email" value="" />
    <br />
        <br />
    <b>Enquiry:</b><br />
    <textarea name="txtmsg" cols="40" rows="10" style="width: 99%;"></textarea>
    <br />
        <br />
    <div class="buttons">
      <div class="right"><input type="submit" value="Continue" class="button" name="submit" /></div>
    </div>
  </form>
  <?php
  if(isset($_POST['submit']))
  {
 	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("ebook",$con);
  $fname=$_POST['txtfname'];
  $email=$_POST['email'];
  $msg=$_POST['txtmsg'];
  $qry="insert into enquiry(first_name,email,enquiry) values('$fname','$email','$msg')";
  if(mysql_query($qry))
  {
	  	echo "Admin can connect with you in shortly....";
  }
  else
  {
	  	echo "something get wrong...";
  }
  }
  ?>
  </div>
</div> 
</div></div>
<div id="powered">
	<div class="container">
		<div class="container-inner">
			<div class="pull-left">
				<ul class="list-menu">

				<li><a href="tell-a-friend.html">Tell a Friend</a></li>
	  		
					  <li><a href="manufacturer.html">Brands</a></li>
					  <li><a href="voucher.html">Gift Vouchers</a></li>
					  <li><a href="admin.php">Affiliates</a></li>
					  <li><a href="specials.html">Specials</a></li>
				</ul>
			</div>
			<div class="copyright pull-right">Henry SW LIB PVT LTD @ copyright 2014	</div>
		</div>
	</div>
</div>
</div>
</section>