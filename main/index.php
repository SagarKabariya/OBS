<!DOCTYPE html>
<html>
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
<?php
		include("head.php");
?>
</head>
<body bgcolor="#FFFFFF">
<section id="sys-notification">
  <div class="container">
    <div id="notification"></div>
  </div>
</section>
<section id="columns">
<div class="container">
<div class="row-fluid">
<div class="span3">
  <?php include("side.php"); ?>
<div class="span9">
<div id="content">
  <div class="content-top">
    <div class="box productcarousel title-dotted">
      <div class="box-heading">
        <h3><span>Latest</span></h3>
      </div>
      <div class="box-content" >
        <div class="box-products slide" id="productcarousel5">
          <div class="carousel-inner ">
            <div class="item active">
              <div class="row-fluid box-product"><font size="+2" face=""></font>
                <?php
					  	$con=mysql_connect("localhost","root","");
						$db=mysql_select_db("ebook",$con);
						$result = mysql_query("select * from book b,latest l where l.book_id=b.book_id");
						while($row=mysql_fetch_array($result))
						{
			echo "<div class='span4 product-block'><div class='product-inner'><div class='image'> <a href='bookinfo.php?bookid=$row[1]'><img src='$row[9]'/></a> <div class='group-item'><font size='+5' color='white' face='across the road'>Download</font></div></div><div class='name'><a href='st-amet-conse-ctetur-1.html'>".$row[2]."</a></div><div class='description'>".$row[3]."</div></div></div>";
						}
					  ?>
              </div>
            </div>
          </div>
        </div>
        <div class="box productcarousel title-dotted">
          <div class="box-heading">
            <h3><span>Best Books</span></h3>
          </div>
          <div class="box-content" >
            <div class="box-products slide" id="productcarousel5">
              <div class="carousel-inner ">
                <div class="item active">
                  <div class="row-fluid box-product">
                    <?php
					  	$con=mysql_connect("localhost","root","");
						$db=mysql_select_db("ebook",$con);
						$result = mysql_query("select * from book where special_book = 1");
						while($row=mysql_fetch_array($result))
						{
			echo "<div class='span4 product-block'><div class='product-inner'><div class='image'> <a href='bookinfo.php?bookid=$row[1]'><img src='$row[9]'/></a> <div class='group-item'><div class='wishlist'><a onclick='addToWishList('33');' title='Add to Wish List' >Add to Wish List</a> </div><div class='compare'><a onclick='addToCompare('33');' title='Add to Compare' >Add to Compare</a> </div><div class='cart'><div><input type='button' value='Add to Cart' onclick='addToCart('33');' class='button' /></div></div></div></div><div class='name'><a href='st-amet-conse-ctetur-1.html'>".$row[2]."</a></div><div class='description'>".$row[3]."</div></div></div>";
						}
					  ?>
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript">
$('#productcarousel5').carousel({interval:false,auto:false,pause:'hover'});
</script>
            <h1 style="display: none;">Tracyorange</h1>
          </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>