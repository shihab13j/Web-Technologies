<head>
	<title>

	</title>

	<style>
		h1{

			color: SlateBlue;
		}
		span{

			color:black;
			
		}	
	</style>
</head>

<?php
session_start();

$isPost=false;   //signal
$username="";   //initially empty
$email="";
$password="";
$gender="";
$birthdate="";
$number=0;
$address="";
$degrees="";
$tellAboutYourself="";
$nidCard="";
$bankAccountNumber="";
$bankCardNumber="";


$trigger=0;
$input=0;

if(isset($_POST["btnreg"])){

	$isPost=true;   //submit button clicked
	if($_POST["uname"]!=""){  //some input is here

		$username = $_POST["uname"]; //so assign it
	}
	if($_POST["email"]!=""){  //some input is here

		$email = $_POST["email"]; //so assign it
	}
    if($_POST["password"]!=""){  //some input is here

		$password = $_POST["password"]; //so assign it
	}
    if(isset($_POST["gender"])){  //some input is here

		$gender = $_POST["gender"]; //so assign it
	}
    if($_POST["birthdate"]!=""){  //some input is here

		$birthdate = $_POST["birthdate"]; //so assign it
	}
	if($_POST["number"]!=0){  //some input is here

		$number = $_POST["number"]; //so assign it
	}
	if($_POST["address"]!=""){  //some input is here

		$address = $_POST["address"]; //so assign it
	}
    if($_POST["degrees"]!=""){  //some input is here

		$degrees = $_POST["degrees"]; //so assign it
	}
	if($_POST["tellAboutYourself"]!=""){  //some input is here

		$tellAboutYourself = $_POST["tellAboutYourself"]; //so assign it
	}
	if($_POST["nidCard"]!=0){  //some input is here

		$nidCard = $_POST["nidCard"]; //so assign it
	}
	if($_POST["bankAccountNumber"]!=""){  //some input is here

		$bankAccountNumber = $_POST["bankAccountNumber"]; //so assign it
	}
	if($_POST["bankCardNumber"]!=""){  //some input is here

		$bankCardNumber = $_POST["bankCardNumber"]; //so assign it
	}

}

?>

<h1>Registration Form</h1>

<form action="#" method="post">

	<p>Username: </p><input type="text" id="uname" name="uname" placeholder="Enter your name">

<?php
//Username----
	if($isPost==true && $username==""){
		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>


	<p>Email: </p><input type="email" id="email" name="email" placeholder="Enter your email address">
<?php
//Email----
	if($isPost==true && $email==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>

<p>Password: </p><input type="password" id="password" name="password" placeholder="Enter your password">
<?php
//Password----
	if($isPost==true && $password==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

		$input++;
	}
?>

	<p>Select your Gender: </p>
    <input type="radio" id="Male" name="gender" value="Male">Male
    <input type="radio" id="Female" name="gender" value="Female">Female
    <input type="radio" id="Other" name="gender" value="Other">Other
    
<?php
//Gender----
	if($isPost==true && $gender==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>

<p>Date of Birth: </p><input type="date" id="birthdate" name="birthdate">
<?php
//Birthdate----
	if($isPost==true && empty($birthdate)){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

		$input++;
	}
?>

	<p>Phone Number: </p><input type="text"  id="number" name="number" placeholder="Enter your phone number">
<?php
//Phone----
	if($isPost==true && empty($number)){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>
	

	<p>Address: </p><input type="text" id="address" name="address" placeholder="Enter your address">
<?php
//Address----
	if($isPost==true && $address==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>

<p>Degrees: </p><input type="text" id="degrees" name="degrees" placeholder="Enter your degrees">
<?php
//degrees----
	if($isPost==true && $degrees==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>

<p>Tell About Yourself: </p><input type="text" id="tellAboutYourself" name="tellAboutYourself" placeholder="Tell about yourself...">
<?php

    if($isPost==true && $tellAboutYourself==""){

        echo "<span style='color:red';><small>Required</small></span><br>";

    }else{

        $input++;
    }
?>

<p>NID Card Number: </p><input type="text" id="nidCard" name="nidCard" placeholder="Enter your NID Card Number">
<?php
//NID Number----
	if($isPost==true && $nidCard==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>


	<p>Bank Account Number: </p><input type="text" id="bankAccountNumber" name="bankAccountNumber">
<?php
//Bank Account Number----
	if($isPost==true && $bankAccountNumber==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}
?>


	<p>Bank Card Number: </p><input type="text" id="bankCardNumber" name="bankCardNumber">
<?php
	if($isPost==true && $bankCardNumber==""){

		echo "<span style='color:red';><small>Required</small></span><br>";

	}else{

        $input++;
	}

?>

<br>
<br>
    <input type="submit" value="Register" name="btnreg">

</form>

<?php

    if($input==12 && isset($_POST["btnreg"])){
		
		$data = file_get_contents('doctorInfo.json');
		$json_arr = json_decode($data, true);
		$size = sizeof($json_arr);
		$count=0;
		$flag = true;
		$trigger = true;
		while($flag){

			if($json_arr[$count]['Email']==$email){

				$trigger=false;
				$flag=false;
			}
			if($count==$size){

				$flag=false;
			}
			$count++;
		}
		if($trigger){

			$json_arr[] = array('Username'=>$username, 'Email'=>$email, 'Password'=>$password, 'Gender'=>$gender, 'BirthDate'=>$birthdate, 'Number'=>$number, 'Address'=>$address, 'Degrees'=>$degrees, 'TellAboutYourself'=>$tellAboutYourself, 'NIDCard'=>$nidCard, 'Bank Account Number'=>$bankAccountNumber, 'Bank Card Number'=>$bankCardNumber);
			file_put_contents('doctorInfo.json', json_encode($json_arr));
			header("Location: ../Common/regSuccessful.php");
		}else{

			echo "<span style='color:red';><small>Already an user</small></span><br>";
			echo "<a href='../Common/login.php'> Back to Login? </a>";
		}
        
    }
?>