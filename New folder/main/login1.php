<?php
session_start();
  $uname = $_REQUEST["uname"];
  $pass = $_REQUEST["pwd"];
  include('comman/database.php');
  
  if(!empty($uname) && !empty($pass))
  {
    
	 $query="select * from login where Username='$uname' and Password='$pass'";
	 
	 	 $result=mysql_query($query,$con) or die(mysql_error());
		 
	 if($r=mysql_fetch_assoc($result))
	 {
	 	
	 	$vutype=$r["User_type"];
		$vuser=$r["Username"];
		
	    $_SESSION["suser"]=$vuser;
		
		if($vutype=="Admin")
		{
		
			header("location:Admin/index.php");
		}
		else if($vutype=="User")
		{
			
			header("location:User/profile.php");
		}
		
		else
		{
			echo "invalid";
		}
		
	 }
  }
  else
  {
      echo "<script type='text/javascript'>alert('Invalid username & password');
				window.location='index.php';</script>";
  }
  
?>