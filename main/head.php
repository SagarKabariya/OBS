<html>
<head>
<title>E-Book</title>
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1404211850/catalog/view/theme/pav_tracy/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="../djejn6fs9vly6.cloudfront.net/1397853522/catalog/view/theme/pav_tracy/skins/orange/stylesheet/stylesheet.css" />
</head>
<body>
<div id="headerbottom">
 <div class="container">
			<div class="row-fluid">
				<div class="span3">
				  				  <div id="logo"><a href="index.php"><img src="../kartrocket.cachefly.net/all-stores/image_tracyorange/data/logo/logo4.jpg" title="Tracyorange" alt="Tracyorange" /></a></div>
				 			
				</div>
				<div id="search">
                <form method="post">
				<table>
                <tr>
                <td>
                 <input type="text" name="searchtxt" value="Search" onClick="this.value = '';" onKeyDown="this.style.color = '#000000';" />
                </td>
                <td><div style="margin-top:-10px">
                	<input type="submit" name="submit" class="button" value="Search"> 
                    </div>
                </td>
                </tr>
                <tr>
                <td colspan="2">
                <font size="-1" style="font-weight:bold;">
			<?php
				session_start();
            	if(isset($_SESSION['uname']))
				{
					echo "Welcome ".$_SESSION['uname'];
					echo "<a href='logout.php'>Logout</a>";
				}
				if(isset($_POST['submit']))
				{
					$seatxt=$_POST['searchtxt'];
					header("Location: http://localhost/obs/main/search.php?setxt=$seatxt");
				}
			?>
            </font>
                </td>
                </tr>
                </table>
                
                </form></div>			
			</div>
          
		</div>
  </div>
</div>
</section>
<section id="mainnav">
  <div class="container">
    <div class="mainnav-inner">
      <div class="row-fluid">
        <nav id="mainmenu" class="span12">
          <div class="navbar"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
            <div class="navbar-inner">
              <div class="nav-collapse collapse">
                <ul class="nav megamenu">
                  <li ><a href="index.php">Home</a> </li>
                  <li ><a href="category.php?catid=2">IT Books</a> </li>
                  <li ><a href="specialbook.php">Special Books</a> </li>
                   <li ><a href="upload.php">Upload Books</a> </li>
                  <li ><a href="Register.php">Register</a> </li>
                  <li ><a href="login.php">login</a> </li>
                  <li ><a href="contact-us.php">contact</a> </li>
                  
                  <!-- vqcode-menu -->
                  
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
</body>
</html>