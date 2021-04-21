<?php
include "../controller/userC.php";


$userc = new userC();
$listeusers=$userc->showUser();
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
					<li><a href="shop.html" title="Shop"><span>Shop</span></a></li>
				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					<li class="light"><a href="find_recipe.html" title="Search for recipes"><i class="icon icon-themeenergy_search"></i> <span>Search for recipes</span></a></li>
					<li class="medium current-menu-item"><a href="my_profile.php" title="My account"><i class="icon icon-themeenergy_chef-hat"></i> <span>My account</span></a></li>
					<li class="dark"><a href="submit_recipe.html" title="Submit a recipe"><i class="icon icon-themeenergy_fork-spoon"></i> <span>Submit a recipe</span></a></li>
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
					<li><a href="index.html" title="Home">Home</a></li>
					<li>My account</li>
				</ul>
			</nav>
			<!--//breadcrumbs-->
			
		
			<!--content-->
						
			<section class="content">
				<!--row-->
				<div class="row">
					<!--profile left part-->
						<?php
            				foreach($listeusers as $user){
   						?>
					<div class="my_account one-fourth">
						<figure>
							<img src="images/<?php echo $user['image'];?>" />
						</figure>
						<div class="container">
						
							<h2>
								<?php echo $user['nom'];?>
								<?php echo $user['prenom'];?>
							</h2> 
							
						</div>
					</div>
					<!--//profile left part-->
					
					<div class="three-fourth">
						<nav class="tabs">
							<ul>
								<li class="active"><a href="#about" title="About me">About me</a></li>
								<li ><a href="#recipes" title="My recipes">Uptade profile</a></li>
								<li><a href="#favorites" title="My favorites">My favorites</a></li>
								<li><a href="#posts" title="My posts">My posts</a></li>
							</ul>
						</nav>
						
						<!--about-->
						
						<div class="tab-content" id="about">
							<div class="row">
							
								<dl class="basic two-third">
									<dt>Name</dt>
									<dd><?php echo $user['nom'];?></dd>
									<dt>Surname</dt>
									<dd><?php echo $user['prenom'];?></dd>
									<dt>Email</dt>
									<dd><?php echo $user['email'];?></dd>
									<dt>Adress </dt>
									<dd><?php echo $user['adresse'];?></dd>
									<dt>Phone number</dt>
									<dd><?php echo $user['tel'];?></dd>
									<dt>Role</dt>
									<dd><?php echo $user['role'];?></dd>
								</dl>
							<?php
							}
							?>
								
								<div class="one-third">
									<ul class="boxed gold">
										<li class="light"><a href="#" title="Best recipe"><i class="icon icon-themeenergy_crown"></i> <span>Had a best recipe</span></a></li>
										<li class="medium"><a href="#" title="Was featured"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
										<li class="dark"><a href="#" title="Added a first recipe"><i class="icon  icon-themeenergy_medal-first-place"></i> <span>Added a first recipe</span></a></li>
										
										<li class="medium"><a href="#" title="Added 10-20 recipes"><i class="icon icon-themeenergy_medal-8"></i> <span>Added 10-20 recipes</span></a></li>
										<li class="dark"><a href="recipes.html" title="Events"><i class="icon icon-themeenergy_pencil"></i> <span>Wrote a blog post</span></a></li>
										<li class="light"><a href="recipes.html" title="Fish"><i class="icon icon-themeenergy_chat-bubbles"></i> <span>Wrote a comment</span></a></li>
										
										<li class="dark"><a href="recipes.html" title="Fish"><i class="icon icon-themeenergy_cup2"></i> <span>Won a contest</span></a></li>
										<li class="light"><a href="recipes.html" title="Healthy"><i class="icon icon-themeenergy_share3"></i> <span>Shared a recipe</span></a></li>
										<li class="medium"><a href="#" title="Was featured"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!--//about-->

						

					
						<!--update profile-->
						
						<?php
							$error = "";
							
							if(isset($_POST["nom"])&&
							isset($_POST["prenom"])&&
							isset($_POST["email"])&&
							isset($_POST["mdp"])&&
							isset($_POST["tel"])&&
							isset($_POST["adresse"])&&
							isset($_POST["role"])
							)
							{
								if(!empty($_POST["nom"])&&
									!empty($_POST["prenom"])&&
									!empty($_POST["email"])&&
									!empty($_POST["mdp"])&&
									!empty($_POST["tel"])&&
									!empty($_POST["adresse"])&&
									!empty($_POST["role"])
									){
								$user1 = new user(
									$_POST["nom"],
									$_POST["prenom"],
									$_POST["email"],
									$_POST["mdp"],
									$_POST["tel"],
									$_POST["adresse"],
									$_POST["role"],
								);
								$userc->updateUser($user1, $_GET['id']);
								header('Location:my_profile.php');
								}
							
								else
									$error = "Missing information";
							}
								
						?>

						<div class="tab-content" id="recipes">
							<?php
								if (isset($_GET['id'])){
								$user1 = $userc->recupererUser($_GET['id']);
							?>
								
										<!--content-->
											<section class="content center full-width">
												<div class="modal container">
													<h3>Modify user</h3>
													<div class="f-row">
														<input type="text" name="id" id="id" value = "<?php echo $user1['id'];?>" disabled  />
													</div>
													<div class="f-row">
														<input type="text" name="nom" placeholder="Your name"  value = "<?php echo $user1['nom'];?>"  />
													</div>
													<div class="f-row">
														<input type="text" name="prenom" placeholder="Your surname"  value = "<?php echo $user1['prenom'];?>" />
													</div>
													<div class="f-row">
														<input type="email" name="email" placeholder="Your email"  value = "<?php echo $user1['email'];?>" />
													</div>
													<div class="f-row">
														<input type="text" name="adresse" placeholder="Your adress"  value = "<?php echo $user1['adresse'];?>"  />
													</div>
													<div class="f-row">
														<input type="number" name="tel" placeholder="Your phone number" value = "<?php echo $user1['tel'];?>" />
													</div>
													<div class="f-row">
														<input type="text" name="role" placeholder="Your role" value = "<?php echo $user1['role'];?>" />
													</div>
													<div class="f-row bwrap">
														<input type="submit" value="modifier" />
													</div>
													<div class="cta">
														<a href="my_profile.php" class="button big">Cancel</a>
													</div>
												</div>
											</section>
										<!--//content-->
								<?php
								}
								?>	
						</div>
						<!--//update profile-->
						 
					
						
						<!--my favorites-->
						<div class="tab-content" id="favorites">
							<div class="entries row">
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="images/img6.jpg" alt="" />
										<figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="recipe.html">Thai fried rice with fruit and vegetables</a></h2> 
										<div class="actions">
											<div>
												<div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
												<div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
												<div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
											</div>
										</div>
									</div>
								</div>
								<!--item-->
								
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="images/img5.jpg" alt="" />
										<figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="recipe.html">Spicy Morroccan prawns with cherry tomatoes</a></h2> 
										<div class="actions">
											<div>
												<div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
												<div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
												<div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
											</div>
										</div>
									</div>
								</div>
								<!--item-->
								
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="images/img8.jpg" alt="" />
										<figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="recipe.html">Super easy blueberry cheesecake</a></h2> 
										<div class="actions">
											<div>
												<div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
												<div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
												<div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
											</div>
										</div>
									</div>
								</div>
								<!--item-->
							</div>
						</div>
						<!--//my favorites-->
						
						<!--my posts-->
						<div class="tab-content" id="posts">
							<!--entries-->
							<div class="entries row">
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="images/img12.jpg" alt="" />
										<figcaption><a href="blog_single.html"><i class="icon icon-themeenergy_eye2"></i> <span>View post</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="blog_single.html">Barbeque party</a></h2> 
										<div class="actions">
											<div>
												<div class="date"><i class="fa fa-calendar"></i><a href="#">22 Dec 2014</a></div>
												<div class="comments"><i class="fa fa-comment"></i><a href="blog_single.html#comments">27</a></div>
											</div>
										</div>
										<div class="excerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
										</div>
									</div>
								</div>
								<!--item-->
								
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="images/img11.jpg" alt="" />
										<figcaption><a href="blog_single.html"><i class="icon icon-themeenergy_eye2"></i> <span>View post</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="blog_single.html">How to make sushi</a></h2> 
										<div class="actions">
											<div>
												<div class="date"><i class="fa fa-calendar"></i><a href="#">22 Dec 2014</a></div>
												<div class="comments"><i class="fa fa-comment"></i><a href="blog_single.html#comments">27</a></div>
											</div>
										</div>
										<div class="excerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
										</div>
									</div>
								</div>
								<!--item-->
								
								<!--item-->
								<div class="entry one-third">
									<figure>
										<img src="images/img10.jpg" alt="" />
										<figcaption><a href="blog_single.html"><i class="icon icon-themeenergy_eye2"></i> <span>View post</span></a></figcaption>
									</figure>
									<div class="container">
										<h2><a href="blog_single.html">Make your own bread</a></h2> 
										<div class="actions">
											<div>
												<div class="date"><i class="fa fa-calendar"></i><a href="#">22 Dec 2014</a></div>
												<div class="comments"><i class="fa fa-comment"></i><a href="blog_single.html#comments">27</a></div>
											</div>
										</div>
										<div class="excerpt">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
										</div>
									</div>
								</div>
								<!--item-->
							</div>
							<!--//entries-->
						</div>
						<!--//my posts-->
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

