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
            <h3><span>Best Book</span></h3>
          </div>
          <div class="box-content" >
            <div class="box-products slide" id="productcarousel5">
              <div class="carousel-inner ">
                <div class="item active" style="height:">
                  <div class="row-fluid box-product">
                  <?php
						include("conn.php");
						$result = mysql_query("select * from book where special_book=1;");
						while($row=mysql_fetch_array($result))
						{
							echo "<div class='span4 product-block'><div class='product-inner'><div class='image'><a href='bookinfo.php?bookid=$row[1]'><img  src='".$row[9]."'/></a><div class='group-item'><div class='wishlist'><a onclick='addToWishList('79');' title='Add to Wish List' >Add to Wish List</a> </div><div class='compare'><a onclick='addToCompare('79');' title='Add to Compare' >Add to Compare</a> </div><div class='cart'><div ><input type='button' value='Add to Cart' onclick='addToCart('79');' class='button' /></div></div></div></div><div class='name'><a href='lorem-ipsum-dolor-sit-amet-6.html'>".$row[2]."</a></div><div class='description'>".$row[3]."</div></div></div>";
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
      <div class="copyright pull-right">Henry SW LIB PVT LTD @ copyright 2014 </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>