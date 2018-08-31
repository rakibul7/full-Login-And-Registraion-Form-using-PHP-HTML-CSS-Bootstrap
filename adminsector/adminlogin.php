<?php
session_start();

?>
<?php
if(isset($_SESSION['admin']))
{
		header("Location:showinformations.php?You_ARE_ALREADY_LOGGED_IN_AS_ADMIN");
	exit();
}
else
{
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../images/sahid.png" alt="IMG">
				</div>

				<form method="post"action="adminaction.php" class="login100-form validate-form" data-validate = "Password is admin">
					<span class="login100-form-title">
						Admin Login Page
					</span>

					<div method="post" class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="Admin Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div method="post" class="wrap-input100 validate-input" data-validate = "Password is admin">
						<input class="input100" type="password" name="password" placeholder="Admin Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input method ="post" name="submit" type="submit" class="login100-form-btn">
 
						</input>
					</div>
					<div class="text-center p-t-0">
						<span class="txt1">
							Admin Name: "admin"<br>
							Admin Password: "admin"
						</span> <br>
					</div>


					<div class="text-center p-t-15">
						<span class="txt1">
							Want to go index Page?
						</span> <br>
						<a class="txt2" href="../index.php">
							Click Here to Go!!
						</a>
					</div>


				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>
	<?php
}
?>