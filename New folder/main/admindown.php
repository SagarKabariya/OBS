<html>
<head>
<?php
	include("headadmin.php");
?>
</h
><title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
</head>
<body>
<section id="columns">
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div id="content" style="text-align:center">
      <form method="post">
      	<input type="submit" name="submit">
      </form>
      	<?php
			include("conn.php");
			
			echo "<table align=center width=600px style=text-align:center>";
			echo "<tr><td>Book ID</td><td>Download Counter</td><td>Download Time</td>";
			if(isset($_POST['submit']))
			{
					$selqry="select * from download order by download_counter";
			}
			else
			{
					$selqry="select * from download";
			}
			$res=mysql_query($selqry);
			while($row=mysql_fetch_row($res))
			{
				echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
			}
			echo "</table>";
		?>
      </div>
    </div>
  </div>
  </div>
  </section>
</body>
</html>