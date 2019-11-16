<!DOCTYPE html>
<html>
<head>
	<center><b><u><h2>Login Page</h2></u></b></center>
	<title>Library Management</title>
	<link rel="stylesheet"  type="text/css" href="logincss.css">
</head>
<body>
		<form action="login.php" method="post">
			<div>
				<b>User name:</b> <input type="text" name="user_name"><br><br>
				<b>Password: </b>&ensp;<input type="Password" name="Password"><br><br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" name="submit" value="submit">&emsp;&emsp;
				<input type="reset" value="reset">
				<center>
					<a href="	C:\Users\user\Desktop\Library Mang\html,css,js\form.html">
					<h3><u><b>Register</b></u></h3>
					</a>
				</center>
			</div>>
		</form>		
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "website"); // Establishing Connection with Server
//$db = mysqli_select_db("colleges", $conn); // Selecting Database from Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username = $_POST['user_name'];
$password = $_POST['Password'];


if($username !=''||$password !=''){
//Insert Query of SQL
$query = mysqli_query($conn, "INSERT INTO logininfo(Username, Password) values('$username', '$password')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else
{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($conn); // Closing Connection with Server
?>

