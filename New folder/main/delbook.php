Are you Sure to delete this book ???
<form method="post">
	<input type="submit" name="yes" value="Yes" />
    <input type="submit" name="no" value="NO" />
</form>
<?php
	if(isset($_POST['yes']))
		{
		 require_once 'conn.php';
         $no=$_REQUEST['id'];
		 echo $no;
		 $in=mysql_query("delete from book where ID=$no");
		 
         header('location:showbook.php');
	}
	if(isset($_POST['no']))
		{
	 	header('location:showbook.php');
	}
?>