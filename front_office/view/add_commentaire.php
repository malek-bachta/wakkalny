<?php
include '../model/commentaire.php';
include '../controller/commentaireC.php';
$error = "";

$commentaire1 = null;

$commentairec = new commentaireC();

if(isset($_POST["nom"])&&
    isset($_POST["prenom"])&&
    isset($_POST["email"])&&
	isset($_POST["date"])&&
    isset($_POST["commentaire"])
    )
    {
        if(!empty($_POST["nom"])&&
            !empty($_POST["prenom"])&&
            !empty($_POST["email"])&&
			!empty($_POST["date"])&&
            !empty($_POST["commentaire"])
            ){
        $commentaire1 = new commentaire(
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["email"],
			$_POST["date"],
            $_POST["commentaire"]
        );
        $commentairec->ajoutercommentaire($commentaire1);
        header('Location:blog.php');
    }
    else{
        $error= "missing info";
    }
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
					<li"><a href="index.html" title="Home"><span>Home</span></a></li>
					<li><a href="recipes.html" title="Recipes"><span>Recipes</span></a>
						
					</li>
					<li><a href="blog.php" title="Blog"><span>Blog</span></a>
						<ul>
							<li><a href="blog_single.php" title="Blog post">Blog post</a></li>
                            <li class="current-menu-item"><a href="Add_blog.php" title="Add blog">Add blog</a></li>

						</ul>
					</li>
					<li><a href="#" title="Pages"><span>Pages</span></a>
						<ul>
							<li><a href="login.html" title="Login page">Login page</a></li><li><a href="register.html" title="Register page">Register page</a></li>
						</ul>
					</li>
					
					<li><a href="contact.html" title="Contact"><span>Contact</span></a></li>
					<li><a href="shop.html" title="Shop"><span>Shop</span></a></li>
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
					<li><a href="index.html" title="Home">Home</a></li>
                    <li><a href="blog.php" title="Blog">blog</a></li>
                    <li>Submit comment</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
			<!--row-->
			<div class="row">
				<header class="s-title">
					<h1>Add commentaire</h1>
				</header>
					
				<!--content-->
				<section class="content full-width">
					<div class="submit_commentaire container">
						<form  name="myForm" method="POST" action="" >
 
                        <div class="comment-respond" id="respond">
						<h2>Leave a reply</h2>
						<div class="container">
							<p>Rq:Your email address will not be published. Required fields are signed with <span class="req">*</span></p>
							<form>
								<div class="f-row">
									<div class="third">
									 
										<input type="text" placeholder="Your name" id="nom" name="nom" />
										<span class="req">*</span>
									</div>
									<div class="third">
									 
										<input type="text" placeholder="your first name" id="prenom" name="prenom" />
										<span class="req">*</span>
									</div>
									
									<div class="third">
										<input type="email" placeholder="Your email" id="email" name="email" />
										<span class="req">*</span>
									</div>
									<div class="third">
<br>

										<input type="date" placeholder="date" id="date" name="date" />
										<span class="req">*</span>
									</div>
									
								</div>


								<div class="f-row">
									<div class="f-row">
									<div class="full"><textarea placeholder="commentaire" id="commentaire" name="commentaire"></textarea></div>
								</div>
								</div>
								
								<div class="f-row">
									<div class="third bwrap">
										<input type="submit" value="Submit comment" />
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


