<?php
session_start();

include '../model/user.php';
include '../controller/userC.php';
$error = "";

$user1 = null;

$userc = new userC();


function sanitizeString($string)
{
	$string = strip_tags($string);
	$string = str_replace(' ','',$string);
	return $string;
}

function sanitizePassworrd($string)
{
	$string = md5($string);
	return $string;
}


if(isset($_POST['login']))
    {
        
        if(!empty($_POST["username"])&&
            !empty($_POST["mdp"]))
			{
                $user1 = new user(
					sanitizeString($_POST["username"]),
					sanitizePassworrd($_POST["mdp"])
			);

			$username=$_POST["username"];
			$mdp=$_POST["mdp"];
        
			if($userc->checklogin($username,$mdp))
			{
				
			$_SESSION['id']=$_POST['id'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['nom']=$_POST['nom'];
			$_SESSION['prenom']=$_POST['prenom'];
			$_SESSION['adresse']=$_POST['adresse'];
			$_SESSION['tel']=$_POST['tel'];
			$_SESSION['email']=$_POST['email'];
				
				header('Location:index.php');
			}
			else
			{
				echo "The username and / or password are incorrect";
			}


			
		}
		else{
			$error= "Wrong input";
		}
	




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
		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js1/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>	
</head>

	<body>
	
	
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		/*if(isset($message))
		{
			foreach($message as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
	
	*/
		?>   
			
			<body>
				<div class="header">
					<h2>Login Page</h2>
				</div>
				<form method="post" action="login.php">

					

					<div class="input-group">
						<label>Username </label>
						<input type="text" name="username" placeholder="Enter username" required>
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter passowrd" required>
					</div>
					
					<div class="input-group">
						<button type="submit" class="btn" name="login" >Login</button>
					</div>
					<p>
					You don't have a account register here? <a href="register.php"><p class="text-info">Register Account</p></a>
					</p>
				</form>
			</body>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>