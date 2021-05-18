<?php
session_start();
include "../../controller/userC.php";
include_once "../../model/user.php";

$userc = new userC();
$user=$userc->getUserbyname($_SESSION['username']);
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
					<li><a href="blog.php" title="Blog"><span>Blog</span></a>
					
					</li>
						
					</li>
					
					<li><a href="contact.php" title="Contact"><span>Contact</span></a></li>
					<li><a href="shop.php" title="Shop"><span>Shop</span></a></li>
					
				</ul>
				
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="medium current-menu-item"><a href="my_profile.php" title="My account"><i class="icon icon-themeenergy_chef-hat"></i> <span>My account</span></a></li>
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
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.php" title="Home">Home</a></li>
					<li>My account</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
		
			<!--content-->
						
			<section class="content">
				<!--row-->
				<div class="row">
					<!--profile left part-->
						
					<div class="my_account one-fourth" >
						
						
					</div>
					
					<!--//profile left part-->
					
					
					<div class="three-fourth">
						<nav>
							<ul style="width:auto;">
								<li  class="active"><h2><a href="#about" title="About me" style="color: black">Profile</a></h2></li>
							</ul>
						</nav>
						
						<!--about-->
						
						<div class="tab-content" id="about" style="text-align: center">
							<div class="row">
							<?php
            				//foreach($malek as $user){
   							?>
								<dl class="basic two-third">
								<figure style="display: block; margin-left: auto; margin-right: auto; width: 50%;" >
									<img src="images/images/<?php echo $user['image']; ?>" />
								</figure>
								
									
									<dt>Username</dt>
									<dd><?php echo $user['username']; ?></dd>
									<dt>First Name</dt>
									<dd><?php echo $user['nom']; ?></dd>
									<dt>Laste Name</dt>
									<dd><?php echo $user['prenom']; ?></dd>
									<dt>Email</dt>
									<dd><?php echo $user['email']; ?></dd>
									<dt>Adress </dt>
									<dd><?php echo $user['adresse']; ?></dd>
									<dt>Phone number</dt>
									<dd><?php echo $user['tel']; ?></dd>
									<dt>Role</dt>
									<dd>
									<?php 
									if($user['role'] == 0 )
									{
										echo "USER";
									}
									else 
									{
										echo "ADMIN";
									}
									 ?>
									 </dd>
									<td>
									<div class="f-row bwrap">
										<a href="updateuser.php?id=<?php echo $_SESSION['username'];?>"><button>Edit Profile</button></a>
									</div>
											
									</td>
									
									
								
									
								</dl>
							<?php
							//}
							?>
								
								<div class="one-third">
									<!--<ul class="boxed gold">
										<li class="light"><a href="#" title="Best recipe"><i class="icon icon-themeenergy_crown"></i> <span>Had a best recipe</span></a></li>
										<li class="medium"><a href="#" title="Was featured"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
										<li class="dark"><a href="#" title="Added a first recipe"><i class="icon  icon-themeenergy_medal-first-place"></i> <span>Added a first recipe</span></a></li>
										
										<li class="medium"><a href="#" title="Added 10-20 recipes"><i class="icon icon-themeenergy_medal-8"></i> <span>Added 10-20 recipes</span></a></li>
										<li class="dark"><a href="recipes.php" title="Events"><i class="icon icon-themeenergy_pencil"></i> <span>Wrote a blog post</span></a></li>
										<li class="light"><a href="recipes.php" title="Fish"><i class="icon icon-themeenergy_chat-bubbles"></i> <span>Wrote a comment</span></a></li>
										
										<li class="dark"><a href="recipes.php" title="Fish"><i class="icon icon-themeenergy_cup2"></i> <span>Won a contest</span></a></li>
										<li class="light"><a href="recipes.php" title="Healthy"><i class="icon icon-themeenergy_share3"></i> <span>Shared a recipe</span></a></li>
										<li class="medium"><a href="#" title="Was featured"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
									</ul>-->
								</div>
							</div>
						</div>
						<!--//about-->

						

					
					
					</div>
				</div>
				<!--//row-->
			</section>
			<!--//content-->
		</div>
		<!--//wrap-->
	</main>
	<!--//main-->
	
	
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

	
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>


