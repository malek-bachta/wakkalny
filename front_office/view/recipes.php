<?php
include "../controller/recetteC.php";

$recettec = new recetteC();
$listerecette=$recettec->afficherrecette();
$erreur="";
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
			<a href="index.php" title="SocialChef" class="logo"><img src="images/ico/logo.png" alt="SocialChef logo"  /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li><a href="index.php" title="Home"><span>Home</span></a></li>
					<li class="current-menu-item"><a href="recipes.php" title="Recipes"><span>Recipes</span></a>
						
					</li>
					<li><a href="blog.php" title="Blog"><span>Blog</span></a>
						<ul>
							<li><a href="blog_single.php" title="Blog post">Blog post</a></li>
						</ul>
					</li>
					<li><a href="#" title="Pages"><span>Pages</span></a>
						<ul>
							<li><a href="login.php" title="Login page">Login page</a></li><li><a href="register.php" title="Register page">Register page</a></li>
						</ul>
					</li>
					
					<li><a href="contact.php" title="Contact"><span>Contact</span></a></li>
					<li><a href="shop.php" title="Shop"><span>Shop</span></a></li>
				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="light"><a href="find_recipe.php" title="Search for recipes"><i class="icon icon-themeenergy_search"></i> <span>Search for recipes</span></a></li>
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
			<!--breadcrumbs-->
			<nav class="breadcrumbs">
				<ul>
					<li><a href="index.php" title="Home">Home</a></li>
					<li>Recipes</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
			<!--row-->
			<div class="row">
				<header class="s-title">
					<h1>Recipes</h1>
				<?php	echo $erreur; ?>
				</header>
				<form  method="post" >
			  <h3 for="query">search a recipe : </h3>
			  <br> 
			  <input type="search" name="search" maxlength="80" size="80" id="query" />
			  <br>  <br>
			  <input type="submit" namme="recette" value="Rechercher" >
			
			</form>
			<?php
			if (isset($_POST['search']) && isset($_POST['recette']) )
			{
				$recette=$recettec->getrecettebyname($_POST['idrecette']);
				if ($recette !== false )
				{
					header('Location:recipe.php?idrecette='.$recette['idrecette']);
                 
								}
				else 
				{
					$erreur="<h2>recipe not found </h2>";
				}
			}

			?>
			<br>
				<!--content-->
				<section class="content three-fourth">
					<!--entries-->
					<div class="entries row">
						<?php
						foreach ($listerecette as $recette ){
						?>
						<!--item-->
						<div class="entry one-third">
							<figure>
								<img src="images/<?php echo $recette['photo']; ?> "  />
								<figcaption><?php echo "<a href=recipe.php?idrecette=".$recette['idrecette'].">" ; ?>  <i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
							</figure>
							<div class="container">
								<h2><a href="recipe.php"><?php echo $recette['titre']; ?></a></h2> 
								<div class="actions">
									<div>
										<div class="difficulty"><i class="ico i-hard"></i><a href="#"><?php echo $recette['difficulty']; ?></a></div>
										<form method="POST" action="deleterecette.php">
                    <input type="submit" name="supprimer" value="supprimer">
	                <input type="hidden" value="<?PHP echo $recette['idrecette']; ?>"  name="idrecette">
					<a href="modifierrecette.php?idrecette=<?php echo $recette['idrecette'];?>">Modifier</a>
	
                     
                    </form>
									</div>
								</div>
							</div>
						</div>
						<!--item-->
						<?php
						}
						?>
						
						
						<div class="quicklinks">
							<a href="#" class="button">More recipes</a>
							<a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
						</div>
					</div>
					<!--//entries-->
				</section>
				<!--//content-->
				
			
					<div class="widget">
						<h3>Advertisment</h3>
						<a href="#"><img src="images/advertisment.jpg" alt="" /></a>
					</div>
				</aside>
				<!--//right sidebar-->
			</div>
			<!--//row-->
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


