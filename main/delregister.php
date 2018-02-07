Are you Sure to do this User ???
<form method="post">
	<input type="submit" name="yes" value="Yes" />
    <input type="submit" name="no" value="NO" />
</form>
<?php
	if(isset($_POST['yes']))
		{
		  require_once 'conn.php';
                           		$no=$_REQUEST['id'];
								$chk=mysql_query("select block from registration where ID=$no");
								$r=mysql_fetch_assoc($chk);
								if($r["block"]=="0")
								{
									 $in=mysql_query("update registration set block = 1 where ID=$no");
								}
								if($r["block"]=="1")
								{
									 $in=mysql_query("update registration set block = 0 where ID=$no");
								}
                                header('location:showregister.php');
		}
	if(isset($_POST['no']))
		{
	 	header('location:showregister.php');
	}
?>