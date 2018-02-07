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
<body class="fs12 page-product ">
<section id="columns">
<div class="container">
<div class="row-fluid">
<div class="breadcrumb">
<div>
<div class="span3">
  <?php 
  include("side.php"); 
  ?>
<div class="span9">
  <div id="content">
    <div class="product-info">
      <div class="row-fluid">
         <?php
		 	$id=$_GET['bookid'];
						include("conn.php");
						$result = mysql_query("select b.*,p.publisher_name,a.author_name from book b,publisher_master p,author_master a where b.publisher_id=p.publisher_id AND b.author_id=a.author_id AND b.book_id = $id;");
						while($row=mysql_fetch_array($result))
						{
							echo "<div class='span5  image-container'>
									<div class='image'><a href='' class='colorbox'><img itemprop='image' src='$row[9]' id='image'/></a></div></div>
								<div class='span7'>
								<h2>$row[2]</h2>
								<div class='review'><div>&nbsp;</div>
										  </div>
										  <div class='price-cart'>
											<div itemprop='offers' itemscope itemtype='http://schema.org/Offer'>
											  <div class='price'><span itemprop='price'>Publisher : $row[12]</span></div>
											  <div class='price-other'></div>
											</div>
											<div class='description'><span>$row[3]</span><br />
											  <span>Author:</span>$row[13]<br />
											  </div>
											
										  </div>
										  <div class='product-extra pull-right'>
											<div class='quantity-adder pull-left'>
										<span class='add-up add-action'><span class='icon-caret-up'></span></span>
										<span class='add-down add-action'><span class='icon-caret-down'></span></span></div>
										<input type='hidden' name='product_id' size='2' value='80' />
										$row[4]<span ></br>
										</br>
										
										</span>
										</div>
									</div>
								  </div>";
								  
								 
						}
						if(isset($_POST['submit']))
						{
							if(isset($_SESSION['uid']))
							{
								$name=$_POST['txtname'];
								$rev=$_POST['txtfeed'];
								$userid=$_SESSION['uid'];
								$dat=date('YYYY-DD-MM');
								$qryfed="insert into feedback (user_id,book_id,feedback,feedback_time) values('$userid','$id','$rev','$dat')";
								$r=mysql_query($qryfed) or die(mysql_error());
								if($r)
								{
									echo "Thank you for giving your feedback fot this book";
								}
								else
								{
									echo "something wrong....";
								}
							}
							else
							{
								echo "First Login then you can add review on this book";
							}
							
						}
						if(isset($_POST['down']))
						{
							if(isset($_SESSION['uid']))
							{
								$userid=$_SESSION['uid'];
								$insdh="INSERT INTO `download_history`(`user_id`, `book_id`) VALUES ('$userid','$id')";
								mysql_query($insdh);
								$dat=date('YYYY-DD-MM');
								$qrychk="select book_id,download_counter from download where book_id=$id";
								$reschk=mysql_query($qrychk);
								$cc=mysql_fetch_row($reschk);
								if($cc > 0)
								{
									$cou=$cc[1];
									$cou++;
									$qrycom="update download set download_counter=$cou where book_id=$id";
									mysql_query($qrycom);
								}
								else
								{
									$qrycom="insert into download (book_id,download_counter) values ('$id','1')";
									mysql_query($qrycom);
								}
								$afc=mysql_affected_rows() ;
								if($afc > 0)
								{
									$qryget="select book_path from book where book_id=$id";
									$qrybpath=mysql_query($qryget);
									$bpath=mysql_fetch_row($qrybpath);
									echo "<script language='JavaScript' type='text/javascript'>alert('Thank you');</script>";
							echo "<object data='$bpath[0]' type='application/pdf'><a href='$bpath[0]' class='button'>click here to download</a></object>";
							
							header("location:$bpath[0]");
								}
								
							}
							else
							{
								echo "<script type='text/javascript'>alert('first login then you can download the book');</script>";
							}
						}
					?>
     	  <form method="post">
           <input type="submit" value="Download Book" class="button" name="down" />
          </form>
        
    </div>
    <div class="tabs-group">
      <div id="tabs" class="htabs">
        
      </div>
        <form method="post">
      <div id="tab-description" class="tab-content"><span itemprop="description"></span></div>
      <div id="tab-review" class="tab-content">
        <div id="review"></div>
        <h2 id="review-title">Write a review</h2>
        <b>Your Name:</b><br />
        <input type="text" name="txtname" value="" />
        <br />
        <br />
        <b>Your Review:</b>
        <textarea name="txtfeed" cols="40" rows="8" style="width: 98%;"></textarea>
        <div>
          <div><input type="submit" value="Submit Review" class="button" name="submit" /></div>
        </div>
      </div> </form> </div>
    <!--<div class="content-bottom">
      <div class="product-related"><span class="title-related">Related Product(3)</span>
        <div class="row-fluid">
          <div class="span4 product-block">
            <div class="image"><a href="lorem-ipsum-dolor-sit-amet-conse-6"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/product79-500x734.png" title="Lorem Ipsum Dolor Sit Amet Conse" alt="Lorem Ipsum Dolor Sit Amet Conse" /></a>
              <div class="group-item">
                <div class="wishlist"><a onclick="addToWishList('67');" title="Add to Wish List" >Add to Wish List</a></div>
                <div class="compare"><a onclick="addToCompare('67');" title="Add to Compare" >Add to Compare</a></div>
                <div class="cart">
                  <div >
                    <input type="button" value="Add to Cart" onclick="addToCart('67');" class="button" />
                  </div>
                </div>
              </div>
            </div>
            <div class="name"><a href="lorem-ipsum-dolor-sit-amet-conse-6">Lorem Ipsum Dolor Sit Amet Conse</a></div>
            <div class="extra" style="display: block; color: #444;"></div>
            <div class="price">Rs.158</div>
          </div>
          <div class="span4 product-block">
            <div class="image"><a href="dolor-sit-amet-conse-ctetur-adipisicing-5"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/product76_resized-500x734.png" title="Dolor Sit Amet Conse Ctetur Adipisicing" alt="Dolor Sit Amet Conse Ctetur Adipisicing" /></a>
              <div class="group-item">
                <div class="wishlist"><a onclick="addToWishList('70');" title="Add to Wish List" >Add to Wish List</a></div>
                <div class="compare"><a onclick="addToCompare('70');" title="Add to Compare" >Add to Compare</a></div>
                <div class="cart">
                  <div >
                    <input type="button" value="Add to Cart" onclick="addToCart('70');" class="button" />
                  </div>
                </div>
              </div>
            </div>
            <div class="name"><a href="dolor-sit-amet-conse-ctetur-adipisicing-5">Dolor Sit Amet Conse Ctetur Adipisicing</a></div>
            <div class="extra" style="display: block; color: #444;"></div>
            <div class="price">Rs.131</div>
          </div>
          <div class="span4 product-block">
            <div class="image"><a href="ipsum-dolor-sit-amet-conse-ctetur-6"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/product72_resized-500x734.png" title="Ipsum Dolor Sit Amet Conse Ctetur" alt="Ipsum Dolor Sit Amet Conse Ctetur" /></a>
              <div class="group-item">
                <div class="wishlist"><a onclick="addToWishList('74');" title="Add to Wish List" >Add to Wish List</a></div>
                <div class="compare"><a onclick="addToCompare('74');" title="Add to Compare" >Add to Compare</a></div>
                <div class="cart">
                  <div >
                    <input type="button" value="Add to Cart" onclick="addToCart('74');" class="button" />
                  </div>
                </div>
              </div>
            </div>
            <div class="name"><a href="ipsum-dolor-sit-amet-conse-ctetur-6">Ipsum Dolor Sit Amet Conse Ctetur</a></div>
            <div class="extra" style="display: block; color: #444;"></div>
            <div class="price">Rs.131</div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div id="powered">
  <div class="container">
    <div class="container-inner">
      <div class="pull-left">
        <ul class="list-menu">
          <li><a href="tell-a-friend.html">Tell a Friend</a></li>
          <li><a href="manufacturer.html">Brands</a></li>
          <li><a href="voucher.html">Gift Vouchers</a></li>
          <li><a href="affiliate-login.html">Affiliates</a></li>
          <li><a href="specials.html">Specials</a></li>
        </ul>
      </div>
      <div class="copyright pull-right">Henry SW LIB PVT LTD @ copyright 2014 </div>
    </div>
  </div>
</div>
</div>
</form>
</body>
</html>