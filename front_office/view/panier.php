<?PHP
session_start(); 
include "core/ProduitCore.php";
$core=new ProduitCore();
    if(isset($_SESSION['cart1']))
    {
      $prod1=$core->rechercheProduit($_SESSION['cart1']);
    }
    if(isset($_SESSION['cart2']))
    {
      $prod2=$core->rechercheProduit($_SESSION['cart2']);
    }
    if(isset($_SESSION['cart3']))
    {
      $prod3=$core->rechercheProduit($_SESSION['cart3']);

    }
    if(isset($_SESSION['cart4']))
    {
      $prod4=$core->rechercheProduit($_SESSION['cart4']);

    }
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Wakkalny - Social Recipe HTML Template" />
		<meta name="description" content="Wakkalny - Social Recipe HTML Template">
		<meta name="author" content="themeenergy.com">
		
		<title>Wakkalny</title>
		
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/icons.css" />
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
		<script src="../../../../use.fontawesome.com/e808bf9397.js"></script>
		<link rel="shortcut icon" href="images/favicon.ico" />
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!--//preloader-->
	
	<!--header-->
	<header class="head" role="banner">
		<!--wrap-->
		<div class="wrap clearfix">
			<a href="index.html" title="SocialChef" class="logo"><img src="images/ico/logo.png" alt="SocialChef logo"  /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li><a href="index.html" title="Home"><span>Home</span></a></li>
					<li><a href="recipes.html" title="Recipes"><span>Recipes</span></a>
						
					</li>
					<li><a href="blog.html" title="Blog"><span>Blog</span></a>
						<ul>
							<li><a href="blog_single.html" title="Blog post">Blog post</a></li>
						</ul>
					</li>
					<li><a href="#" title="Pages"><span>Pages</span></a>
						<ul>
							<li><a href="login.html" title="Login page">Login page</a></li><li><a href="register.html" title="Register page">Register page</a></li>
						</ul>
					</li>
					
					<li><a href="contact.html" title="Contact"><span>Contact</span></a></li>
					<li  class="current-menu-item"><a href="shop.html" title="Shop" ><span>Shop</span></a></li>
					<li><a href="addcommande.html" title="Recipes"><span>Commande</span></a>

				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="light"><a href="find_recipe.html" title="Search for recipes"><i class="icon icon-themeenergy_search"></i> <span>Search for recipes</span></a></li>
					<li class="medium"><a href="my_profile.html" title="My account"><i class="icon icon-themeenergy_chef-hat"></i> <span>My account</span></a></li>
					<li class="dark"><a href="submit_recipe.html" title="Submit a recipe"><i class="icon icon-themeenergy_fork-spoon"></i> <span>Submit a recipe</span></a></li>
				</ul>
			</nav>
		</div>
		<!--//wrap-->
	</header>
	<!--//header-->
  
    <div class="site-section">
		<div class="container">
		  <div class="row mb-5">
			<form class="col-md-12" method="post">
			  <div class="site-blocks-table">
				<table class="table table-bordered">
				  <thead>
					<tr>
					  <th class="product-thumbnail">Image</th>
					  <th class="product-name">Product</th>
					  <th class="product-price">Price</th>
					  <th class="product-quantity">Quantity</th>
					  <th class="product-total">Total</th>
					  <th class="product-remove">Remove</th>
					</tr>
  
				  </thead>
				  <tbody>
				  <?PHP
  
				  $totalproduit1=0;$totalproduit2=0;$totalproduit3=0;$totalproduit4=0;
				  if(isset($prod1))
				  {
  foreach($prod1 as $row){
	  
	  ?>
					<tr>
					  <td class="product-thumbnail">
						<img  src="images/<?PHP echo $row['product_image']?>" alt="Image" width="100" class="img-fluid"  >
					  </td>
					  <td class="product-name">
						<h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
					  </td>
					  <td><?PHP echo $row['product_price']; ?>DT</td>
					  <td>
						<div class="input-group mb-3" style="max-width: 120px;">
						  <div class="input-group-prepend">
						 <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
						  &minus;</a class="btn btn-outline-primary js-btn-minus">
						  </div>
						  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty1']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
						  <div class="input-group-append">
						  <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
						  &plus;</a class="btn btn-outline-primary js-btn-plus">
						  </div>
						</div>
  
					  </td>
					  <td><?PHP $total=$_SESSION['qty1']*$row['product_price'];$totalproduit1=+$total;
	 echo $total; ?>DT</td>
		 <td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
	  X</a class="btn btn-primary height-auto btn-sm"></td>
   
					</tr>
					<?PHP
  }}
  if(isset($prod2))
  {
  foreach($prod2 as $row){
  
  ?>
	<tr>
	  <td class="product-thumbnail">
		<img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
	  </td>
	  <td class="product-name">
		<h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
	  </td>
	  <td><?PHP echo $row['product_price']; ?>DT</td>
	  <td>
		<div class="input-group mb-3" style="max-width: 120px;">
		  <div class="input-group-prepend">
		 <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
		  &minus;</a class="btn btn-outline-primary js-btn-minus">
		  </div>
		  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty2']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
		  <div class="input-group-append">
		  <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
		  &plus;</a class="btn btn-outline-primary js-btn-plus">
		  </div>
		</div>
  
	  </td>
	  <td><?PHP $total=$_SESSION['qty2']*$row['product_price'];$totalproduit2=+$total;
  echo $total; ?>DT</td>
  <td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
  X</a class="btn btn-primary height-auto btn-sm"></td>
  
	</tr>
	<?PHP
  }}
  if(isset($prod3))
  {
  foreach($prod3 as $row){
  
  ?>
	<tr>
	  <td class="product-thumbnail">
		<img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
	  </td>
	  <td class="product-name">
		<h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
	  </td>
	  <td><?PHP echo $row['product_price']; ?>DT</td>
	  <td>
		<div class="input-group mb-3" style="max-width: 120px;">
		  <div class="input-group-prepend">
		 <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
		  &minus;</a class="btn btn-outline-primary js-btn-minus">
		  </div>
		  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty3']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
		  <div class="input-group-append">
		  <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
		  &plus;</a class="btn btn-outline-primary js-btn-plus">
		  </div>
		</div>
  
	  </td>
	  <td><?PHP $total=$_SESSION['qty3']*$row['product_price'];$totalproduit3=+$total;
  echo $total; ?>DT</td>
  <td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
  X</a class="btn btn-primary height-auto btn-sm"></td>
  
	</tr>
	<?PHP
  }}
  if(isset($prod4))
  {
  foreach($prod4 as $row){
  
  ?>
	<tr>
	  <td class="product-thumbnail">
		<img src="images/<?PHP echo $row['product_image']?>" alt="Image" class="img-fluid">
	  </td>
	  <td class="product-name">
		<h2 class="h5 text-black"><?PHP echo $row['product_title']?></h2>
	  </td>
	  <td><?PHP echo $row['product_price']; ?>DT</td>
	  <td>
		<div class="input-group mb-3" style="max-width: 120px;">
		  <div class="input-group-prepend">
		 <a href=" core/decrementqty.php?id=<?PHP echo $row['product_id']; ?>">
		  &minus;</a class="btn btn-outline-primary js-btn-minus">
		  </div>
		  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty4']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
		  <div class="input-group-append">
		  <a href=" core/incremqty.php?id=<?PHP echo $row['product_id']; ?>">
		  &plus;</a class="btn btn-outline-primary js-btn-plus">
		  </div>
		</div>
  
	  </td>
	  <td><?PHP $total=$_SESSION['qty4']*$row['product_price'];$totalproduit4=+$total;
  echo $total; ?>DT</td>
  <td><a href=" core/supprimercart.php?id=<?PHP echo $row['product_id']; ?>">
  X</a class="btn btn-primary height-auto btn-sm"></td>
  
	</tr>
	<?PHP
  }}
  $total=$totalproduit1+$totalproduit2+$totalproduit3+$totalproduit4;
  
  
  ?>
  
  
  
  
  
  
				  </tbody>
				</table>
			  </div>
			</form>
		  </div>
  
		  <div class="row">
			<div class="col-md-6">
			  <div class="row mb-5">
  
				<div class="col-md-6">
				  <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
				</div>
			  </div>
  
			</div>
			<div class="col-md-6 pl-5">
			  <div class="row justify-content-end">
				<div class="col-md-7">
				  <div class="row">
					<div class="col-md-12 text-right border-bottom mb-5">
					  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
					</div>
				  </div>
				  <div class="row mb-3">
					<div class="col-md-6">
					  <span class="text-black">Subtotal</span>
					</div>
					<div class="col-md-6 text-right">
					<strong class="text-black"><?PHP echo $total; ?>DT</strong>
					</div>
				  </div>
				  <div class="row mb-5">
					<div class="col-md-6">
					  <span class="text-black">Total</span>
					</div>
					<div class="col-md-6 text-right">
					  <strong class="text-black"><?PHP echo $total; ?>DT</strong>
					</div>
				  </div>
  
				  <div class="row">
					<div class="col-md-12">
					  <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
  
	<!--footer-->
	<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-half">
					<h5>About SocialChef Community</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</article>
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via phone or email</p>
					<p><em>T:</em>  +1 555 555 555<br /><em>E:</em>  <a href="#">socialchef@email.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
						<li><a href="#" title="youtube"><i class="fa  fa-fw fa-youtube"></i></a></li>
						<li><a href="#" title="rss"><i class="fa  fa-fw fa-rss"></i></a></li>
						<li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
						<li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
						<li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
						<li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
						<li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
					</ul>
				</article>
				
				<div class="bottom">
					<p class="copy">Copyright 2016 SocialChef. All rights reserved</p>
					
					<nav class="foot-nav">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li><a href="recipes.html" title="Recipes">Recipes</a></li>
							<li><a href="blog.html" title="Blog">Blog</a></li>
							<li><a href="contact.html" title="Contact">Contact</a></li>    
							<li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
							<li><a href="login.html" title="Login">Login</a></li>	<li><a href="register.html" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->
	
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>
