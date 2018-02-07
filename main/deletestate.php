Are you Sure to delete this content ???
<form method="post">
	<input type="submit" name="yes" value="Yes" />
    <input type="submit" name="no" value="NO" />
</form>
<?php
	if(isset($_POST['yes']))
		{
		 require_once 'conn.php';
                            $no=$_REQUEST['id'];
                                $name=$_REQUEST['state'];
                                $in=mysql_query("delete from state where id=$no");
                                header('location:showstate.php');
		}
	if(isset($_POST['no']))
		{
	 	header('location:showstate.php');
	}
?>