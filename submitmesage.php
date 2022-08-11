<html>
<head>
	<title>Send Message</title>
	<style>
		nav{

			background-color: SlateBlue;
  			overflow: hidden;
			align: center;
		}
		nav a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			font-family: sans-serif, Helvetica, Arial;
		}

		nav a:hover {
			background-color: MintCream;
			color: black;
		}
		
	</style>
</head>
<body>

<nav>
	<a href="doctorHome.php">Home</a>
	<a href="clientlist.php">Listing</a> 
	<a href="submitmesage.php">Message</a>  
	<a href="messageindex.html">Message Send</a> 
	<a href="doctorProfile.php">My Profile</a>
	<a href="doctorProfileEdit.php">Edit Profile</a>
	<a href="../Common/logout.php">Logout</a>
</nav>

<h1></h1>

</body>
</html>
<?php
//include_once('connection.php');
$servername="localhost";
$username="root";
$password="";
$dbname="message";
$conn=new mysqli("$servername","$username","$password","$dbname");
$query="select * from women";
$result=$conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<head>
			Women Message
		</head>
	</title>
</head>
<body>
	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4"><h2>Client Message</h2></th>
		</tr>
		<t>
			<th> ID </th>
			<th> Email </th>
			<th> Message </th>
			</t>
		<?php
         while($row=$result->fetch_assoc())
         {
		?> 
	<tr>
		<td><?php echo "".$row["ID"]; ?></td>
		<td><?php echo "".$row["Email"]; ?></td>
		<td><?php echo "".$row["Message"]; ?></td>
	</tr>
	<?php
        }
    ?>
    </table>

</body>
</html>