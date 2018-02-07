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
<body>
<section id="sys-notification">
  <div class="container">
    <div id="notification"></div>
  </div>
</section>
<section id="columns">
<div class="container">
  <div class="row-fluid">
    <div class="span3">
      <div id="column-left" class="sidebar">
        <div class="box dark category">
          <div class="box-heading">
            <h3><span>Categories</span></h3>
          </div>
          <div class="box-content">
            <ul class="box-category">
              <li class=""> <a href="art-books.html">Programming</a> </li>
              <li class=""> <a href="images.html">Commics</a> </li>
              <li class=""> <a href="login.php">Story</a> </li>
              <li class=""> <a href="register.php">History</a> </li>
              <li class=""> <a href="vectors.html">Biography</a> </li>
              <li class=""> <a href="wallpapers.html">Health</a> </li>
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
                <div class="span4 product-block">
                  <div class="product-inner">
                    <div class="image">
                      <div class="product-label-special label">Sale</div>
                      <a href="conse-ctetur-adipisicing-3.html"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/product55_resized-80x195.png" title="Conse Ctetur Adipisicing" alt="Conse Ctetur Adipisicing" /></a>
                      <div class="group-item">
                        <div class="wishlist"> <a onclick="addToWishList('37');" title="Add to Wish List" >Add to Wish List</a></div>
                        <div class="compare"><a onclick="addToCompare('37');" title="Add to Compare" >Add to Compare</a></div>
                        <div class="cart">
                          <div >
                            <input type="button" value="Add to Cart" onclick="addToCart('37');" class="button" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="name"><a href="conse-ctetur-adipisicing-3.html">Conse Ctetur Adipisicing</a></div>
                    <div class="extra" style="display: block; color: #444;"> </div>
                    <div class="price"> <span class="price-old">Rs.123</span> <span class="price-new">Rs.120</span> </div>
                  </div>
                </div>
                <div class="span4 product-block">
                  <div class="product-inner">
                    <div class="image">
                      <div class="product-label-special label">Sale</div>
                      <a href="st-amet-conse-ctetur-3.html"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/product40_resized-80x195.png" title="St Amet Conse Ctetur" alt="St Amet Conse Ctetur" /></a>
                      <div class="group-item">
                        <div class="wishlist"> <a onclick="addToWishList('52');" title="Add to Wish List" >Add to Wish List</a></div>
                        <div class="compare"><a onclick="addToCompare('52');" title="Add to Compare" >Add to Compare</a></div>
                        <div class="cart">
                          <div >
                            <input type="button" value="Add to Cart" onclick="addToCart('52');" class="button" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="name"><a href="st-amet-conse-ctetur-3.html">St Amet Conse Ctetur</a></div>
                    <div class="extra" style="display: block; color: #444;"> </div>
                    <div class="price"> <span class="price-old">Rs.95</span> <span class="price-new">Rs.93</span> </div>
                  </div>
                </div>
                <div class="span4 product-block">
                  <div class="product-inner">
                    <div class="image">
                      <div class="product-label-special label">Sale</div>
                      <a href="st-amet-conse-ctetur-5.html"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/product30_resized-80x195.png" title="St Amet Conse Ctetur" alt="St Amet Conse Ctetur" /></a>
                      <div class="group-item">
                        <div class="wishlist"> <a onclick="addToWishList('65');" title="Add to Wish List" >Add to Wish List</a></div>
                        <div class="compare"><a onclick="addToCompare('65');" title="Add to Compare" >Add to Compare</a></div>
                        <div class="cart">
                          <div >
                            <input type="button" value="Add to Cart" onclick="addToCart('65');" class="button" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="name"><a href="st-amet-conse-ctetur-5.html">St Amet Conse Ctetur</a></div>
                    <div class="extra" style="display: block; color: #444;"> </div>
                    <div class="price"> <span class="price-old">Rs.158</span> <span class="price-new">Rs.156</span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="span9">
      <div id="content">
        <div class="content-top">
          <div class="box productcarousel title-dotted">
            <div class="box-heading">
              <h3><span>Latest</span></h3>
            </div>
            <div class="box-content" >
              <div class="box-products slide" id="productcarousel4">
                <div class="carousel-inner ">
                  <div class="item active">
                    <div class="row-fluid box-product">
                    <?php
						$con=mysql_connect("localhost","root","");
						$db=mysql_select_db("ebook",$con);
						$result = mysql_query("select * from book");
						while($row=mysql_fetch_array($result))
						{
							echo "<div class='span4 product-block'><div class='product-inner'><div class='image'> <a href='lorem-ipsum-dolor-sit-amet-6.html'><img src='".$row[9]."' title='Lorem Ipsum Dolor Sit Amet' alt='Lorem Ipsum Dolor Sit Amet' /></a><div class='group-item'><div class='wishlist'><a onclick='addToWishList('79');' title='Add to Wish List' >Add to Wish List</a> </div><div class='compare'><a onclick='addToCompare('79');' title='Add to Compare' >Add to Compare</a> </div><div class='cart'><div ><input type='button' value='Add to Cart' onclick='addToCart('79');' class='button' /></div></div></div></div><div class='name'><a href='lorem-ipsum-dolor-sit-amet-6.html'>".$row[2]."</a></div><div class='description'> ".$row[3]."</div></div></div>";
						}
					 ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript">
$('#productcarousel4').carousel({interval:false,auto:false,pause:'hover'});
</script>
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
			echo "<div class='span4 product-block'><div class='product-inner'><div class='image'> <a href='st-amet-conse-ctetur-1.html'><img src='$row[9]'/></a> <div class='group-item'><div class='wishlist'><a onclick='addToWishList('33');' title='Add to Wish List' >Add to Wish List</a> </div><div class='compare'><a onclick='addToCompare('33');' title='Add to Compare' >Add to Compare</a> </div><div class='cart'><div><input type='button' value='Add to Cart' onclick='addToCart('33');' class='button' /></div></div></div></div><div class='name'><a href='st-amet-conse-ctetur-1.html'>".$row[2]."</a></div><div class='description'>".$row[3]."</div></div></div>";
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
    <div xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
     xmlns="http://www.w3.org/1999/xhtml"
     xmlns:foaf="http://xmlns.com/foaf/0.1/"
     xmlns:gr="http://purl.org/goodrelations/v1#"
     xmlns:vcard="http://www.w3.org/2006/vcard/ns#">
      <div about="#company" typeof="gr:BusinessEntity">
        <div property="gr:legalName" content="Tracyorange"></div>
        <div rel="vcard:adr">
          <div typeof="vcard:Address">
            <div property="vcard:country-name" content="Afghanistan"></div>
            <div property="vcard:locality" content=""></div>
            <div property="vcard:postal-code" content=""></div>
            <div property="vcard:street-address" content=""></div>
          </div>
        </div>
        <div property="vcard:tel" content="9999999999"></div>
        <div rel="foaf:depiction" resource="nfs/image_tracyorange/data/logo/log4o.gif"> </div>
        <div rel="foaf:page" resource="index.html"></div>
      </div>
    </div>
  </div>
</div>
</div>
<section id="pav-mass-bottom">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <div id="pavcarousel7" class="carousel slide pavcarousel hidden-phone">
          <div class="carousel-inner"> </div>
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
      <div class="copyright pull-right"> Tracyorange &copy; Copyright 	2014 <!--vqmod-powered-by-footer-->
        <div class="power-by-21534"><a href="http://www.kartrocket.com/" title="eCommerce Software by KartRocket" target="_blank">eCommerce Software</a> by <img src="../www.kartrocket.co/nfs/image_base/kartrocket-logo-small.png" alt="eCommerce India"  /></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>