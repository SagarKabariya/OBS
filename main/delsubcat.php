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
                        
                                $in=mysql_query("delete from sub_book_cat where sub_cat_id=$no");
                                header('location:showsubcat.php');
		}
	if(isset($_POST['no']))
		{
	 	header('location:showsubcat.php');
	}
?>
<?php
                           
?>