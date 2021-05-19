<?php
session_start();

$_SESSION['id']=1;

include "../../controller/shopC.php";
$core=new shopC();
    if(isset($_SESSION['cart1']))
    {
      $prod1=$core->recuperershops($_SESSION['cart1']);
    }
    if(isset($_SESSION['cart2']))
    {
      $prod2=$core->recuperershops($_SESSION['cart2']);

    }
    if(isset($_SESSION['cart3']))
    {
      $prod3=$core->recuperershops($_SESSION['cart3']);


    }
    if(isset($_SESSION['cart4']))
    {
      $prod4=$core->recuperershops($_SESSION['cart4']);
    }



?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="SocialChef - Social Recipe HTML Template" />
	<meta name="description" content="SocialChef - Social Recipe HTML Template">
	<meta name="author" content="themeenergy.com">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">


<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/style.css">
<script type="text/javascript"></script>
	<title>Wakkalny</title>
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/icons.css" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
	<script src="../../../../use.fontawesome.com/e808bf9397.js"></script>
	<link rel="shortcut icon" href="images/favicon.ico" />
	

</head>
<body>
	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	
	<!--header-->
	<header class="head" role="banner">
		<!--wrap-->
		<nav class="main-nav" role="navigation" id="menu">
			<li>
				<li style="color:black; font-size:15px;text-transform: lowercase" >
					<img src="../admin/plugins/images/user.ico"  alt="" width="25" height="25" ><i></i><?php echo $_SESSION['username']; ?> 
				</li>
				<li  
					style=" font-size:10px;text-transform: lowercase; text-color:white;"> <a href="logout.php" id="logout"><span class="" ><button  style="padding: 10px 10px; text-align: center; font-size:10px;">Logout</button></span></a> 
				</li>
			</li>
		</nav>
		<div class="wrap clearfix">
			<a href="index.php" title="SocialChef" class="logo"><img src="images/ico/logo.png" alt="SocialChef logo"  /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li><a href="index.php" title="Home"><span>Home</span></a></li>
					<li><a href="recipes.php" title="Recipes"><span>Recipes</span></a>
						
					</li>
					<li ><a href="blog.php" title="Blog"><span>Blog</span></a>
						
					</li>
										
										
					<li><a href="contact.php" title="Contact"><span>Contact</span></a></li>
					<li><a href="shop.php" title="Shop"><span>Shop</span></a>
					<li  class="current-menu-item"><a href="panier.php" title="Shop" ><span>Cart</span></a></li>

					</li>
					
				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="medium"><a href="my_profile.php" title="My account"><i class="icon icon-themeenergy_chef-hat"></i> <span>My account</span></a></li>
					<li class="dark"><a href="submit_recipe.php" title="Submit a recipe"><i class="icon icon-themeenergy_fork-spoon"></i> <span>Submit a recipe</span></a></li>
				</ul>
			</nav>
		</div>
		<!--//wrap-->
	</header>
	<!--//header-->
		
	<!--main-->
	<main class="main" role="main">
		<!--wrap-->
		<div class="wrap clearfix">
			<!--row-->
		
	  <div class="row">
        </div>
				<!--content-->
				<section class="content center ">
       
        <div class="modal container">
				
		<form  method="post">
			  <div>
				<table >
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
						<img  src="images/<?PHP echo $row['image']?>" alt="Image" width="100" class="img-fluid"  >
					  </td>
					  <td class="product-name">
						<h2 class="h5 text-black"><?PHP echo $row['nom']?></h2>
					  </td>
					  <td><?PHP echo $row['prix']; ?>DT</td>
					  <td>
						<div class="input-group mb-3" style="max-width: 120px;">
						  <div class="input-group-prepend">
						 <a href=" ../../controller/decrementqty.php?id=<?PHP echo $row['id']; ?>">
						  &minus;</a class="btn btn-outline-primary js-btn-minus">
						  </div>
						  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty1']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
						  <div class="input-group-append">
						  <a href=" ../../controller/incremqty.php?id=<?PHP echo $row['id']; ?>">
						  &plus;</a class="btn btn-outline-primary js-btn-plus">
						  </div>
						</div>
  
					  </td>
					  <td><?PHP (int)$total=(int)$_SESSION['qty2']*(int)$row['prix'];(int)$totalproduit2=+(int)$total;
  echo $total; ?>DT</td>
		 <td><a href=" ../../controller/supprimercart.php?id=<?PHP echo $row['id']; ?>">
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
		<img src="images/<?PHP echo $row['image']?>" alt="Image" class="img-fluid">
	  </td>
	  <td class="product-name">
		<h2 class="h5 text-black"><?PHP echo $row['nom']?></h2>
	  </td>
	  <td><?PHP echo $row['prix']; ?>DT</td>
	  <td>
		<div class="input-group mb-3" style="max-width: 120px;">
		  <div class="input-group-prepend">
		 <a href=" ../../controller/decrementqty.php?id=<?PHP echo $row['id']; ?>">
		  &minus;</a class="btn btn-outline-primary js-btn-minus">
		  </div>
		  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty2']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
		  <div class="input-group-append">
		  <a href=" ../../controller/incremqty.php?id=<?PHP echo $row['id']; ?>">
		  &plus;</a class="btn btn-outline-primary js-btn-plus">
		  </div>
		</div>
  
	  </td>
	  <td><?PHP (int)$total=(int)$_SESSION['qty2']*(int)$row['prix'];(int)$totalproduit2=+(int)$total;
  echo $total; ?>DT</td>
  <td><a href=" ../../controller/supprimercart.php?id=<?PHP echo $row['id']; ?>">
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
		<img src="images/<?PHP echo $row['image']?>" alt="Image" class="img-fluid">
	  </td>
	  <td class="product-name">
		<h2 class="h5 text-black"><?PHP echo $row['nom']?></h2>
	  </td>
	  <td><?PHP echo $row['prix']; ?>DT</td>
	  <td>
		<div class="input-group mb-3" style="max-width: 120px;">
		  <div class="input-group-prepend">
		 <a href="../../controller/decrementqty.php?id=<?PHP echo $row['id']; ?>">
		  &minus;</a class="btn btn-outline-primary js-btn-minus">
		  </div>
		  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty3']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
		  <div class="input-group-append">
		  <a href=" ../../controller/incremqty.php?id=<?PHP echo $row['id']; ?>">
		  &plus;</a class="btn btn-outline-primary js-btn-plus">
		  </div>
		</div>
  
	  </td>
	  <td><?PHP (int)$total=(int)$_SESSION['qty2']*(int)$row['prix'];(int)$totalproduit2=+(int)$total;
  echo $total; ?>DT</td>
  <td><a href=" ../../controller/supprimercart.php?id=<?PHP echo $row['id']; ?>">
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
		<img src="images/<?PHP echo $row['image']?>" alt="Image" class="img-fluid">
	  </td>
	  <td class="product-name">
		<h2 class="h5 text-black"><?PHP echo $row['nom']?></h2>
	  </td>
	  <td><?PHP echo $row['prix']; ?>DT</td>
	  <td>
		<div class="input-group mb-3" style="max-width: 120px;">
		  <div class="input-group-prepend">
		 <a href=" ../../controller/decrementqty.php?id=<?PHP echo $row['id']; ?>">
		  &minus;</a class="btn btn-outline-primary js-btn-minus">
		  </div>
		  <input type="text" class="form-control text-center" value="<?PHP echo $_SESSION['qty4']?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
		  <div class="input-group-append">
		  <a href=" ../../controller/incremqty.php?id=<?PHP echo $row['id']; ?>">
		  &plus;</a class="btn btn-outline-primary js-btn-plus">
		  </div>
		</div>
  
	  </td>
	  <td><?PHP (int)$total=(int)$_SESSION['qty2']*(int)$row['prix'];(int)$totalproduit2=+(int)$total;
  echo $total; ?>DT</td>
  <td><a href=" ../../controller/supprimercart.php?id=<?PHP echo $row['id']; ?>">
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

			<div class="row center"> 
			<div >
			  <div >
  
				<div class="col-md-6">
				  <button onclick="window.location='shop.php'" class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
				</div>
			  </div>
  
			</div>
			<div class="col-md-6 pl-5">
			  <div class="row justify-content-end">
				<div class="col-md-7">
				  <div class="row">
					<div class="col-md-19 text-right border-bottom mb-5">
					  <h3 class="text-black h2 text-uppercase">Cart Totals</h3>
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
				</section>
				<!--//content-->
			</div>
			<!--//row-->
		</div>
		<!--//wrap-->
	</main>
	


	
	<!--footer-->
	<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-half">
					<h5>About Wakkalny Community</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</article>
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via phone or email</p>
					<p><em>T:</em>  +116 52 717 009<br /><em>E:</em>  <a href="#">Wakkalny@gmail.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li><a href="https://www.facebook.com" title="facebook"><img src="images/ico/fb.png" alt="facebook logo"  /></a></li>
						<li><a href="https://www.youtube.com" title="youtube"><img src="images/ico/yo.png" alt="youtube logo"/></a></li>
						<li><a href="https://www.linkedin.com" title="linkedin"><img src="images/ico/li.png" alt="linkedin logo"/></a></li>
						<li><a href="https://www.twitter.com" title="twitter"><img src="images/ico/tw.png" alt="twitter logo"/></a></li>
						<li><a href="https://www.pinterest.com" title="pinterest"><img src="images/ico/pi.png" alt="pinterest logo"/></i></a></li>
						<li><a href="https://www.instagram.com" title="vimeo"><img src="images/ico/ig.png" alt="instagram logo"/></a></li>
					</ul>
				</article>
				
				<div class="bottom">
					
					
					<nav class="foot-nav">
						<ul>
							<li><a href="index.php" title="Home">Home</a></li>
							<li><a href="recipes.php" title="Recipes">Recipes</a></li>
							<li><a href="blog.php" title="Blog">Blog</a></li>
							<li><a href="contact.php" title="Contact">Contact</a></li>    
							<li><a href="find_recipe.php" title="Search for recipes">Search for recipes</a></li>
							<li><a href="login.php" title="Login">Login</a></li>	<li><a href="register.php" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->

	<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
	
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>
    /*"#sign-in-form").submit(function (e) {
        e.preventDefault();

        var form = $("#sign-in-form");
        var url = form.attr('action');
        
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), 
            success: function (data) {
                // do the folloup action, redirect
            }
        });

    });*/
    </script>
</body>

</html>


