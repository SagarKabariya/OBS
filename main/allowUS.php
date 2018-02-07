<?php
	require_once 'conn.php';
    $no=$_REQUEST['id'];
	$getus=mysql_query("select * from user_share where user_share_id = $no");
	$row=mysql_fetch_row($getus);
	$insus="INSERT INTO `book`(`sub_cat_id`,`book_name`, `book_sdesc`, `book_ldesc`, `publisher_id`, `author_id`, `edition`, `rel_date`, `image`,`book_path`) VALUES ('$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[12]','$row[11]','$row[10]')";
	if(mysql_query($insus))
	{
		echo "<script type='text/javascript'>alert('Book succesfully added');</script>";	
		$up="update user_share set approv = 1 where user_share_id=$no";
		mysql_query($up);
		header("location:usershare.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Somethong Error');</script>";
	}
	
	 
?>