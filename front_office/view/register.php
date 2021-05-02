<?php
session_start();

include '../model/user.php';
include '../controller/userC.php';
$error = "";

$user1 = null;

$userc = new userC();







if(isset($_POST["register"]))
    {
        
        if(!empty($_POST["username"])&&
            !empty($_POST["nom"])&&
            !empty($_POST["prenom"])&&
			!empty($_POST["adresse"])&&
            !empty($_POST["tel"])&&
            !empty($_POST["email"])&&
            !empty($_POST["mdp"])&&
			!empty($_POST["image"]))
			{
                $user1 = new user(
				$userc->sanitizeString($_POST["username"]),
				$userc->sanitizeString($_POST["nom"]),
				$userc->sanitizeString($_POST["prenom"]),
				$userc->sanitizeString($_POST["adresse"]),
				$_POST["tel"],
				$userc->sanitizeString($_POST["email"]),
				$userc->sanitizePassworrd($_POST["mdp"]),
				$_POST["image"],
			);
        
			$userc->addUser($user1);
			$_SESSION['id']=$_POST['id'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['nom']=$_POST['nom'];
			$_SESSION['prenom']=$_POST['prenom'];
			$_SESSION['adresse']=$_POST['adresse'];
			$_SESSION['tel']=$_POST['tel'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['role']=$_POST['role'];
			$_SESSION['image']=$_POST['image'];



			header('Location:index.php');
		}
		else{
			$error= "Wrong input";
		}
	

/*
		if(empty($_POST["username"])){$error = "Please enter username";}
		else if(empty($_POST["nom"])){$error = "Please enter first name";}
		else if(empty($_POST["prenom"])){$error = "Please enter last name";}
		else if(empty($_POST["adresse"])){$error = "Please enter adress";}
		else if(empty($_POST["tel"])){$error = "Please enter pjone number";}
		else if(empty($_POST["email"])){$error = "Please enter a valid email address";}
		else if(empty($_POST["mdp"])){$error = "Please enter password";}
		else if(strlen($_POST["mdp"]) < 4 ){$error = "Password must be atleast 4 characters";}

		else if($error = "") {
			$user1 = new user(
				$_POST["username"],
				$_POST["nom"],
				$_POST["prenom"],
				$_POST["adresse"],
				$_POST["tel"],
				$_POST["email"],
				$_POST["mdp"]);
        
				
			$userc->addUser($user1);
			header('Location:index.php');
		}
*/


	}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Wakkalny</title>
<link rel="stylesheet" href="cssR/style1.css"/>
<link rel="shortcut icon" href="images/favicon.ico" />
<script src="js1/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

		
</head>
 
	<body>

		<div class="header">
			<h2>Register</h2>
		</div>

		<div id="section_lading">
			<!--<div class="content">
					
				
				<?php
				/*if($error = "")
				{
					
					?>
						<div class="error">
							<strong> <?php echo $error; ?></strong>
						</div>
					<?php
					
				}
				else if($error = "")
				{
				?>
					<div class="error success">
						<strong>Register Successfully..... Please Click On Login Account Link</strong>
					</div>
				<?php
				}*/
				?>   
				</div>-->
				
		<form method="post" action="register.php">
			
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" placeholder="Your Username" required>
			</div>
			<div class="input-group">
				<label>First name</label>
				<input type="text" name="nom"  placeholder="Your First name" required>
			</div>
			<div class="input-group">
				<label>Last name</label>
				<input type="text" name="prenom"  placeholder="Your Last name" required>
			</div>
			<div class="input-group">
				<label>Adress</label>
				<input type="text" name="adresse" placeholder="Your Adress" required>
			</div>
			<div class="input-group">
				<label>Phone number</label>
				<input type="tel" name="tel" placeholder="Your phone number" pattern="[2-9]{2}[0-9]{3}[0-9]{3}" maxlength="8" required>
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email"  placeholder="Your email" required>
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="mdp"  placeholder="Your password" required>
			</div>
			<section>
					<h42>Photo</h4>
					<div class="f-row full">
						<input type="file" name="image" />
					</div>
			</section>
			
			<div class="input-group">
				<button type="submit" class="btn" name="register">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
			</div>
	</body>

</html>


