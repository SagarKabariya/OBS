<html>
<head>

</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("ebook",$con);
	$result = mysql_query("select * from book");
			
			echo "<table>";
		 while ($row = mysql_fetch_array($result))
		 {
		 $a="SELECT sub_book_cat_name FROM sub_book_cat WHERE sub_cat_id =$row[0]";
		 $res=mysql_query($a);		
			while($row1=mysql_fetch_array($res))
			{
				echo "<tr><td>$row1[0]</td></tr>";
			} 
		 echo "<tr><td>$row[1]</td></tr>";
		 echo "<tr><td>$row[2]</td></tr>";
		 echo "<tr><td>$row[3]</td></tr>";
		 echo "<tr><td>$row[4]</td></tr>";
		 $b="select publisher_name from publisher_master where publisher_id = $row[5]";
		 $respub=mysql_query($b);
		 while($row2=mysql_fetch_array($respub))
		 {
		 	echo "<tr><td>$row2[0]</td></tr>";
		 }
		 $b="select author_name from author_master where author_id = $row[6]";
		 $respub=mysql_query($b);
		 while($row2=mysql_fetch_array($respub))
		 {
		 	echo "<tr><td>$row2[0]</td></tr>";
		 }
		 echo "<tr><td>$row[7]</td></tr>";
		 echo "<tr><td>$row[8]</td></tr>";
		 echo "<tr><td><img src='$row[9]' height='300px' width='400px'></td></tr>";
		 echo "<tr><td>$row[10]</td></tr>";
		 }
		echo "</table>";
?>

</body>
</html>