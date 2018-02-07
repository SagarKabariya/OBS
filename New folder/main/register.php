<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	load_options('','country');
});

function load_options(id,index){
	$("#loading").show();
	if(index=="state"){
		
		$("#city").html('<option value="">Select city</option>');
	}
	$.ajax({
		url: "ajax.php?index="+index+"&id="+id,
		complete: function(){$("#loading").hide();},
		success: function(data) {
			$("#"+index).html(data);
		}
	})
}
</script>
<?php
		
		if(isset($_POST['Submit']))
		{
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("ebook",$con);
		$name=$_POST['uname'];
		$add=$_POST['add'];
		$dob=$_POST['txtCalendar'];
		$city=$_POST['city'];
		$gen=$_POST['gen'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$uid=$_POST['uid'];
		$pwd=$_POST['pwd'];
		$cpwd=$_POST['cpwd'];
		$sque=$_POST['sque'];
		$sans=$_POST['sans'];
		//$inquiry=$_POST['inquiry'];
		
		$qry="insert into   registration(user_name,address,birth_date,city,gender,email,contact,user_id,password,security_que,security_ans)values('$name','$add','$dob','$city','$gen','$email','$contact','$uid','$pwd','$sque','$sans')";
		$r=mysql_query($qry) or die(mysql_error());
		$qry1="insert into login(username,password,user_type)values('$uid','$pwd','User')";
		mysql_query($qry1) or die(mysql_error());

		
		if($r)
		{
				echo "<script type='text/javascript'>alert('Registration Successful');
				</script>";
		}
		else
		{
				echo "<script type='text/javascript'>alert('Unsuccessful');
				</script>";
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
<?php include("head.php");?>
</head>
<body>
<section id="sys-notification"><div class="container"><div id="notification"></div></div></section>
<section id="columns"><div class="container"><div class="row-fluid">
 
<div class="span12">
<div id="content">	  <div class="breadcrumb">
				<a href="file:///C|/Users/Admin/Downloads/home.html">Home</a>
				 &raquo; <a href="file:///C|/Users/Admin/Downloads/login.html">Account</a>
				 &raquo; <a href="file:///C|/Users/Admin/Downloads/register.html">Register</a>
			  </div>
	  <h1>Register Account</h1>
	  <p>If you already have an account with us, please login at the <a href="login.php">login page</a>.</p>
	  <form method="post">
		<h2>Your Personal Details</h2>
		<div class="content">
		  <table class="form">
			<tr>
			  <td><span class="required">*</span> User Name:</td>
			  <td><input type="text" name="uname" value="" />
				</td>
			</tr>
			<tr>
			  <td><span class="required">*</span> Address:</td>
			  <td><input type="text" name="add" value="" />
				</td>
			</tr>
			<tr>
			  <td><span class="required">*</span> Date Of Brith:</td>
			  <td><input name='txtCalendar' id='idCalendar' class='inputBoxStyle'>
<img height="23px" width="23px" src='dt.jpg' align='absmiddle' onMouseOver="fnInitCalendar(this, 'idCalendar','expiry=false,close=true')">
			  						</td>
			</tr>
			<tr>
          <td><span class="required">*</span> Country:</td>
          <td>
          <select id="country" onChange="load_options(this.value,'state');">
					<option value="">-----Select Country-----</option>
					</select>
            </td>
        </tr>
 		<tr>
          <td><span class="required">*</span> Region / State:</td>
          <td><select id="state" onChange="load_options(this.value,'city');" calss="dropdown-menu">
					<option value="">-----Select State-----</option>
					</select>
            </td>
        </tr>
		<tr>
          <td><span class="required">*</span> City:</td>
          <td><select id="city" calss="dropdown-menu" name="city"  required="required">
					<option value="">------Select City------</option>
					</select></td>
        </tr>
        <tr>
          <td><span class="required">*</span> Gender:</td>
          <td>	<input type="radio" name="gen" value="1" checked="checked" />
				Male			<input type="radio" name="gen" value="0" />
				Female			
            </td>
        </tr>
        <tr>
          <td><span class="required">*</span> Email:</td>
          <td><input type="text" name="email" value="" /></td>
        </tr>
        <tr>
          <td><span class="required">*</span> Contact:</td>
          <td><input type="text" name="contact" value="" />
            </td>
        </tr>
		</table>
		</div>
		  
		<h2>Your Login Information</h2>
		<div class="content">
		  <table class="form">

        <tr>
          <td><span class="required">*</span> User Id:</td>
          <td><input type="text" name="uid" value="" />
            </td>
        </tr>
         <tr>
			  <td><span class="required">*</span> Password:</td>
			  <td><input type="password" name="pwd" value="" />
				</td>
			</tr>
			<tr>
			  <td><span class="required">*</span> Confirm Password:</td>
			  <td><input type="password" name="cpwd" value="" />
				</td>
			</tr>      
      </table>
		</div>
		<h2> Security</h2>
		<div class="content">
		  <table class="form">
			<td><span class="required">*</span> Security Question:</td>
          <td><select name="sque" >
              <option value=""> --- Please Select --- </option>
                                          <option value="1">what is your favourite teacher?</option>
                                                        <option value="2">what is your favourite color?</option>
                                                        <option value="3">what is your nick name?</option>
                                                        <option value="4">who is your first childhood friend?</option>
                                                        <option value="5">what is your favourite place?</option>
                                                        <option value="6">what is your father business?</option>
                                                        <option value="7">what is your favourite perfume?</option>
				</select>
            </td>
        </tr>
		<tr>
          <td><span class="required">*</span> Security Answer:</td>
          <td><input type="text" name="sans" value="" />
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
			
							
					Tracyorange &copy; Copyright 	2014								<!--vqmod-powered-by-footer-->
<div class="power-by-00497"><a href="http://www.kartrocket.com/" title="eCommerce Software by KartRocket" target="_blank">eCommerce Software</a> by <img src="file:///C|/Users/Admin/www.kartrocket.co/nfs/image_base/kartrocket-logo-small.png" alt="eCommerce India"  /></div>
	
			</div>
		</div>
	</div>
</div>
	</body>
</html>
