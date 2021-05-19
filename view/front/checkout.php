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
										
										
					<li class="current-menu-item"><a href="contact.php" title="Contact"><span>Contact</span></a></li>
					<li><a href="shop.php" title="Shop"><span>Shop</span></a>
						
					</li>
          <li><a href="panier.php" title="Shop" ><span>Cart</span></a></li>

					
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
				<section class="content center full-width">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>

        <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>
        <div class="modal container">
					<form name="form1" method="POST" onSubmit="verif_formulaire() "action="../../controller/ajoutcmd.php" >
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
        

            </div>
          </div>
          <div class="col-md-6">


            <div class="row mb-5">
              <div class="col-md-12">
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    <?PHP
                $totalproduit1=0;$totalproduit2=0;$totalproduit3=0;$totalproduit4=0;
                if(isset($prod1))
                {
foreach($prod1 as $row){
	
	?>
	
                      <tr>
                        <td><?PHP echo $row['nom']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty1']?></td>
                        <td><?PHP (int)$totalproduit1=(int)$_SESSION['qty1']*(int)$row['prix'];(int)$totalpanier=+(int)$totalproduit1;
   echo (int)$totalproduit1; ?>DT</td>
                      </tr>
                      <?PHP
}}
if(isset($prod2))
{
foreach($prod2 as $row){

?>

      <tr>
                        <td><?PHP echo $row['nom']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty1']?></td>
                        <td><?PHP (int)$totalproduit1=(int)$_SESSION['qty1']*(int)$row['prix'];(int)$totalpanier=+(int)$totalproduit1;
   echo (int)$totalproduit1; ?>DT</td>
                      </tr>
      <?PHP
}}
if(isset($prod3))
{
foreach($prod3 as $row){

?>

<tr>
                        <td><?PHP echo $row['nom']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty1']?></td>
                        <td><?PHP (int)$totalproduit1=(int)$_SESSION['qty1']*(int)$row['prix'];(int)$totalpanier=+(int)$totalproduit1;
   echo (int)$totalproduit1; ?>DT</td>
                      </tr>
      <?PHP
}}
if(isset($prod4))
{
foreach($prod4 as $row){

?>

<tr>
                        <td><?PHP echo $row['nom']?> <strong class="mx-2">x</strong> <?PHP echo $_SESSION['qty1']?></td>
                        <td><?PHP (int)$totalproduit1=(int)$_SESSION['qty1']*(int)$row['prix'];(int)$totalpanier=+(int)$totalproduit1;
   echo (int)$totalproduit1; ?>DT</td>
                      </tr>
      <?PHP
}}
$total=$totalproduit1+$totalproduit2+$totalproduit3+$totalproduit4;

?>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong> <?php  echo $total ?>DT</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  
                 
                  
                  <div >
                  <Div>
              <div>
                <h2 class="h3 mb-1 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div >
                    <input type="text" class="form-control" name="coupon" id="coupon" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                  </div>

                </div>
              </div>
            </Div>
                  <?php
                  if(isset($_SESSION['cart1']))
    { ?>
                      <input type="hidden" name="prod1" value=" <?php echo $_SESSION['cart1']; ?>">
                      <input type="hidden" name="qty1" value=" <?php echo $_SESSION['qty1']; ?>">

                      <?php } ?>
                      <?php
                  if(isset($_SESSION['cart2']))
    { ?>
                      <input type="hidden" name="prod2" value=" <?php echo $_SESSION['cart2']; ?>">
                      <input type="hidden" name="qty2" value=" <?php echo $_SESSION['qty2']; ?>">

                      <?php } ?>
                      <?php
                  if(isset($_SESSION['cart3']))
    { ?>
                      <input type="hidden" name="prod3" value=" <?php echo $_SESSION['cart3']; ?>">
                      <input type="hidden" name="qty3" value=" <?php echo $_SESSION['qty3']; ?>">

                      <?php } ?>
                      <?php
                  if(isset($_SESSION['cart4']))
    { ?>
                      <input type="hidden" name="prod4" value=" <?php echo $_SESSION['cart4']; ?>">
                      <input type="hidden" name="qty4" value=" <?php echo $_SESSION['qty4']; ?>">

                      <?php } ?>
              
                  <input type="hidden" name="total" value=" <?php echo $total; ?>">
                  <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>">
                  <input type="submit" class="btn btn-primary btn-lg btn-block" />
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        </form>












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


