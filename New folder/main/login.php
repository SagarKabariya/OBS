<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
<?php include("head.php");?>
</head>
<body>
<section id="sys-notification">
  <div class="container">
    <div id="notification"></div>
  </div>
</section>
<section id="columns">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div id="content">
          <div class="breadcrumb"> <a href="home.html">Home</a> &raquo; <a href="login.html">Account</a> &raquo; <a href="login.html">Login</a> </div>
          <h1>Account Login</h1>
          <div class="login-content">
            <div class="row-fluid">
              <div class="span6">
                <div class="inner">
                  <h2>New Customer</h2>
                  <div class="content">
                    <p><b>Register Account</b></p>
                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                    <a href="register.php" class="button">Continue</a></div>
                </div>
              </div>
              <div class="span6">
                <div class="inner">
                  <h2>Returning Customer</h2>
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="content">
                      <p>I am a returning customer</p>
                      <b>User Name:</b><br />
                      <input type="text" name="uname" value="" />
                      <br />
                      <br />
                      <b>Password:</b><br />
                      <input type="password" name="pwd" value="" />
                      <br />
                      <a href="indexacda.html?route=account/forgotten">Forgot Password</a><br />
                      <br />
                      <input type="submit" value="Login" class="button" name="submit" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
//--></script> 
      </div>
    </div>
  </div>
</section>
</section>
<div id="powered">
  <div class="container">
    <div class="container-inner">
      <div class="pull-left">
        <ul class="list-menu">
          <li><a href="tell-a-friend.html">Tell a Friend</a></li>
          <li><a href="manufacturer.html">Brands</a></li>
          <li><a href="voucher.html">Gift Vouchers</a></li>
          <li><a href="affiliate-login.html">Affiliates</a></li>
          <li><a href="specials.html">Specials</a></li>
        </ul>
      </div>
      <div class="copyright pull-right"> Tracyorange &copy; Copyright 	2014 <!--vqmod-powered-by-footer-->
        <div class="power-by-ed277"><a href="http://www.kartrocket.com/" title="eCommerce Software by KartRocket" target="_blank">eCommerce Software</a> by <img src="../www.kartrocket.co/nfs/image_base/kartrocket-logo-small.png" alt="eCommerce India"  /></div>
      </div>
    </div>
  </div>
</div>
<?php

if(isset($_POST['submit']))
{
		session_start();
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("ebook",$con);
		session_start();
  $userid = $_REQUEST["uname"];
  $pass = $_REQUEST["pwd"];
  
  
  if(!empty($userid) && !empty($pass))
  {
    
	 $query="select user_id,user_name,password,user_type,block from registration where user_name='$userid' and password='$pass'";
	 	 $result=mysql_query($query,$con) or die(mysql_error());
		 
	 if($r=mysql_fetch_assoc($result))
	 {
	 	$uid=$r['user_id'];
	 	$vutype=$r["user_type"];
		$vuser=$r["user_name"];
		$blk=$r["block"];
		if($blk=="1")
		{
			header("Location: http://localhost/obs/main/index.php");
			break;
		}
		if($vutype=="00")
		{
			 $_SESSION["uname"]=$vuser;
			$_SESSION["uid"]=$uid;
			$_SESSION["utype"]=$vutype;
			header("Location: http://localhost/obs/main/index.php");
		}
		else if($vutype=="01")
		{
			 $_SESSION["uname"]=$vuser;
			$_SESSION["uid"]=$uid;
			$_SESSION["utype"]=$vutype;
			header("Location: http://localhost/obs/main/admin.php");		
		}
		
		else
		{
			echo "invalid";
		}
	 }
	 else
	 {
		  echo "<script type='text/javascript'>alert('Invalid username & password');</script>";
	 }
  }
  else
  {
      echo "<script type='text/javascript'>alert('Invalid username & password');</script>";
  }
}
?>
</body>
</html>
