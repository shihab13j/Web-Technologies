<?php  
$connect=mysqli_connect("localhost","root","","Login Database") or die("Connection Failed!");
if(!empty($_GET['save']))
{ 
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$query="select * from logindatabase where Username='$Username' and Password='$Password'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		$_SESSION["uname"] = $username;
			header("Location:../Doctor/doctorHome.php");
		echo "Login Successful";
	} 
	else
	{
		echo "Login Unsuccessful";
	}

}
?>

<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="loginab.css">
		<title>Login Doctor</title>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h3>Login</h3>

			</div>
			<form class="form" id="form" method="post" action="next.php">
				<div class="form-control" id="form-control">
					<label>Username:</label>
					<input type="text" id="uname" name="uname" placeholder="User name">
					<i id="success" class="fas fa-check-circle"></i>
				    <i id="error" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<br>
				<div class="form-control1" id="form-control1">
					<label>Password:</label>
					<input type="password" id="pass" name="pass" placeholder="Password">
					<i id="successp"class="fas fa-check-circle"></i>
					<i id="errorp"class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<h3>Forget password</h3>
				<a href="doctorHome.php" type="submit" name="save">Login</a>
				<button type="submit" name="save" onclick="doctorHome.php">Login</button>
			</form>
		</div>
		<div class="container1">
			<h4>Hello Doctor</h4>
			<button type="submit">SignUp</button>
		</div>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<script src="abc.js"></script>
	</body>
</html>