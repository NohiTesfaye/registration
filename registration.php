<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
</head>
<body>
	<div class="header-beauty"><fieldset>
	<form action="registration.php" method="POST">
		<h1>Registration Form</h1>
		<label for="username">username:</label>
		<input type="text" name="username" id="username" value="username" required><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" value="email" required><br><br>
		<label for="password">password:</label>
		<input type="password" name="password" id="password" value="password" required><br><br>
		<label for="confirmpassword">confirmpassword:</label>
		<input type="password" name="confirmpassword" id="confirmpassword" value="confirmpassword" required><br><br>
		<input type="submit" value="register">
	</form>
	</fieldset>
</div>
<style type="text/css">
	body{
		margin: 10px;
		padding: 10px;
		background: greenyellow;
		font-display: center;
	}
.header-beauty{
	padding: 10px;
	text-align: center;
	align-content: center;
	font-size: 18px;
}
input[type="text"]{
	padding: 10px;
	height: 10px;
	width: 150px;

}
input[type="email"]{
	padding: 10px;
	height: 10px;
	width: 150px;

}
input[type="password"]{
	padding: 10px;
	height: 10px;
	width: 150px;

}

button{
	height: 20px;
	width: 75px;
	color: red;
	font-size: 15px;
	cursor: pointer;
}

	
</style>


</body>
</html>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="database";
$conn=new mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("connection failed".mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']="POST"){
	$name=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	if($password != $confirmpassword){
		echo "incorrect password";
		exit();
	};
	$hash=password_hash($password, PASSWORD_DEFAULT);
	$sql="INSERT INTO data(name,email,password)VALUES('NOHI','nohitesfayemarara@gmail.com','nohi0965');
	if(mysqli_query($conn,$sql)){
		echo "registration succesfull";
		};
		else{
			echo "error".mysqli_error($conn);
		};
		mysqli_close($conn);
	};
};

?>