<!DOCTYPE html>
<html lang="en">
<head>
	<title>registration </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="Query_code.php" autocomplete="off">
					<input type="hiddn" name="action" value="registration">

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="enter your email">
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "complaint is required">
						<input class="input100" type="password" name="password"  placeholder="enter your password">
						
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
						Send
						</button>
					</div>

					

				
				</form>
			</div>
		</div>
	</div>
	
	

	


</body>
</html>
<?php
include('db.php');
//function str_openssl_enc($str,$iv){
//	$key='tekup';
//	$chiper="AES-128-CTR";
//	$options=0;
//	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
//	return $str;
//}

if(isset($_POST['submit'])){
	/* $iv=openssl_random_pseudo_bytes(16);
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	
	$name=str_openssl_enc($name,$iv);
	$email=str_openssl_enc($email,$iv); 
	
	$iv=bin2hex($iv);
	
	$id=mysqli_query($con,"insert into message(name,email) values('$name','$email')");
	if($id>0){
		echo "Thank you for providing information";
	}else{
		echo "Please try after sometime";
	}
	*/
	

}
?>

	<!-- <table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" required></td> 
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td> 
		</tr>
	</table>

</body>
</html> -->