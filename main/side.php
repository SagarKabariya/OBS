<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="column-left" class="sidebar">
    <div class="box dark category">
      <div class="box-heading">
        <h3><span>Categories</span></h3>
      </div>
      <div class="box-content">
        <ul class="box-category">
        <?php
			include("conn.php");
			$qry="select * from main_book_cat";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
				echo "<li class=''> <a href='category.php?catid=$row[0]'>$row[1]</a> </li>";
			}
		?>
        </ul>
      </div>
    </div>
    <div class="box box-produce dark-title bestseller">
      <div class="box-heading">
        <h3><span>HOT BOOKs</span></h3>
      </div>
      <div class="box-content">
        <div class="box-product">
          <div class="row-fluid">
            <?php
				include("conn.php");
				$result = mysql_query("select book_name,d.book_id from book b,download d where d.book_id = b.book_id order by d.download_counter desc LIMIT 5");
						while($row=mysql_fetch_array($result))
						{
							echo "<div class='span4 product-block'>
              <div class='product-inner'>
                <div class='name'><a href='bookinfo.php?bookid=$row[1]'>".$row[0]."</a></div>
                <div class='extra' style='display: block; color: #444;'> </div>
              </div>
            
        </div>";
						}
			?>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</body>
</html>