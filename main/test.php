<html>
<head>

</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("ebook",$con);
	$result = mysql_query("select * from book where bookid=1");
		
		echo "<table>";
		 while ($row = mysql_fetch_array($result))
		 {
		 echo "<tr><td>$row[0]</td></tr>";
		 echo "<tr><td>$row[1]</td></tr>";
		 echo "<tr><td>$row[2]</td></tr>";
		 echo "<tr><td>$row[3]</td></tr>";
		 echo "<tr><td>$row[4]</td></tr>";
		 echo "<tr><td>$row[5]</td></tr>";
		 echo "<tr><td>$row[6]</td></tr>";
		 echo "<tr><td>$row[7]</td></tr>";
		 echo "<tr><td>$row[8]</td></tr>";
		 }
		echo "</table>";
?>

</body>
</html>